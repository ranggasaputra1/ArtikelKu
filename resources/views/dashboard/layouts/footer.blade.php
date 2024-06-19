<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: inherit;
            padding: 0.5rem 1rem;
            text-decoration: none;
        }

        .nav-link button {
            background: none;
            border: none;
            color: inherit;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }

        .nav-link button:hover {
            color: #007bff;
        }

        footer {
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>

<br><br>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <center>
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="assets/img/artikelku.png" alt="" width="25" height="30">
                ArtikelKu
                <small class="d-block mb-3 text-body-secondary">&copy; 2024</small>
                <div class="credits">
                    Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> oleh <a href="#">Kelompok
                        Rangga Saputra</a>
                </div>
            </div>
        </div>
    </center>
</footer>

<script src="path/to/your/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
</body>

</html>
