<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class PengadaanController extends Controller
{
    public function index(Request $request)
    {
        $query = Pengadaan::query();

        // Jika ada parameter pencarian
        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('tgl_penerimaan', 'like', '%' . $search . '%')
                  ->orWhere('jumlah', 'like', '%' . $search . '%')
                  ->orWhereHas('dataBarang', function($q) use ($search) {
                      $q->where('kode_barang', 'like', '%' . $search . '%')
                        ->orWhere('nama_barang', 'like', '%' . $search . '%');
                  });
            });
        }
        if ($request->has('sort_by')) {
            $sort_by = $request->input('sort_by');
            if ($sort_by == 'newest') {
                $query->orderBy('tgl_penerimaan', 'desc');
            } elseif ($sort_by == 'oldest') {
                $query->orderBy('tgl_penerimaan', 'asc');
            }
        }

        $dataPengadaans = $query->get();

        return view('dashboard.pengadaan.index', [
            "tittle" => "Daftar Pengadaan",
            "active_menu" => "pengadaan"
        ], compact('dataPengadaans'));
    }

    public function create()
    {
        $dataBarangs = DataBarang::all();
        return view('dashboard.pengadaan.create', [
            'tittle' => 'Tambah Pengadaan',
            'active_menu' => 'pengadaan',
            'dataBarangs' => $dataBarangs
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'tgl_penerimaan' => 'required|date',
        'kode_barang' => 'required|exists:data_barangs,id',
        'jumlah' => 'required|integer',
    ]);

    // Menyimpan data pengadaan baru
    $pengadaan = Pengadaan::create([
        'tgl_penerimaan' => $request->tgl_penerimaan,
        'kode_barang' => $request->kode_barang,
        'jumlah' => $request->jumlah,
    ]);

    // Cari barang berdasarkan kode_barang yang dipilih
    $barang = DataBarang::findOrFail($request->kode_barang);

    // Tambahkan jumlah barang yang diterima ke kolom jumlah_barang
    $barang->jumlah_barang += $request->jumlah;

    // Simpan perubahan
    $barang->save();

    return redirect()->route('pengadaan.index')->with('success', 'Pengadaan berhasil ditambahkan dan jumlah barang telah diperbarui.');
}


    public function show(Pengadaan $id)
    {
        return view('dashboard.pengadaan.show', [
            'tittle' => 'Detail Pengadaan',
            'active_menu' => 'pengadaan',
            'pengadaan' => $id
        ]);
    }

    public function edit($id)
    {
        // Temukan data pengadaan berdasarkan ID
        $pengadaan = Pengadaan::findOrFail($id);

        $dataBarangs = DataBarang::all();

        return view('dashboard.pengadaan.edit', [
            'tittle' => 'Edit Pengadaan',
            'active_menu' => 'pengadaan',
            'pengadaan' => $pengadaan, // Data pengadaan yang akan diedit
            'dataBarangs' => $dataBarangs // Data barang untuk dropdown
        ]);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'tgl_penerimaan' => 'required|date',
        'kode_barang' => 'required|exists:data_barangs,id',
        'jumlah' => 'required|integer',
    ]);

    // Ambil data pengadaan yang akan diperbarui
    $pengadaan = Pengadaan::findOrFail($id);

    // Ambil data barang yang terkait dengan pengadaan lama
    $barangLama = DataBarang::findOrFail($pengadaan->kode_barang);

    // Kurangi jumlah barang lama dengan jumlah yang sebelumnya disimpan di pengadaan
    $barangLama->jumlah_barang -= $pengadaan->jumlah;
    $barangLama->save();

    // Perbarui data pengadaan
    $pengadaan->update([
        'tgl_penerimaan' => $request->tgl_penerimaan,
        'kode_barang' => $request->kode_barang,
        'jumlah' => $request->jumlah,
    ]);

    // Ambil data barang yang terkait dengan pengadaan baru
    $barangBaru = DataBarang::findOrFail($request->kode_barang);

    // Tambahkan jumlah barang baru dengan jumlah yang diinputkan
    $barangBaru->jumlah_barang += $request->jumlah;
    $barangBaru->save();

    return redirect()->route('pengadaan.index')->with('success', 'Pengadaan berhasil diperbarui dan jumlah barang telah diupdate.');
}


public function destroy(Pengadaan $id)
{
    $barang = DataBarang::findOrFail($id->kode_barang);

    $barang->jumlah_barang -= $id->jumlah;

    $barang->save();
    $id->delete();

    return redirect()->route('pengadaan.index')->with('success', 'Pengadaan berhasil dihapus dan jumlah barang telah diperbarui.');
}



    public function print(Request $request, $sort_by)
    {
        $query = Pengadaan::query();

        // Handle sorting
        if ($sort_by === 'newest') {
            $query->orderBy('tgl_penerimaan', 'desc');
        } elseif ($sort_by === 'oldest') {
            $query->orderBy('tgl_penerimaan', 'asc');
        } else {
            $query->orderBy('tgl_penerimaan', 'desc');
        }

        $dataPengadaans = $query->with('dataBarang')->get(); // Include dataBarang relationship

        $pdf = Pdf::loadView('dashboard.pengadaan.print', compact('dataPengadaans'));
        return $pdf->stream('pengadaan.pdf');
    }
}