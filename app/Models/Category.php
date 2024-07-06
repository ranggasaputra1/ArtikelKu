<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable, HasFactory;

    // protected $fillable = ['name','slug'];

    protected $guarded = [''];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    // Fungsi Sluggable agar ketika form title diinputkan otomatis slug tertulis

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
