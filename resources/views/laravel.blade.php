<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            text-align: center;
        }
        nav {
            margin-bottom: 20px;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        nav a:hover {
            color: #e67e22;
        }
        h1 {
            color: #e74c3c;
        }
        ul {
            text-align: left;
            display: inline-block;
        }
        img {
            margin-top: 20px;
            width: 200px;
        }
    </style>
</head>
<body>
    <!-- Navigasi -->
    <nav>
        <a href="/home">Home</a> | 
        <a href="/laravel">Laravel</a>
    </nav>

    <!-- Gambar -->
    <img src="{{ asset('framework.png') }}" alt="Logo Laravel" width="200">

    <h1>Laravel Framework</h1>
    <p>
        <b>Laravel</b> adalah salah satu framework PHP paling populer untuk membangun aplikasi web modern.
        Laravel menggunakan arsitektur <b>MVC (Model-View-Controller)</b> sehingga kode lebih rapi, terstruktur, dan mudah dipelihara.
    </p>

    <h2>Fitur Utama Laravel</h2>
    <ul>
        <li><b>Routing Sederhana</b> — mudah dalam membuat URL untuk halaman.</li>
        <li><b>Blade Template</b> — sistem template bawaan yang memudahkan membuat tampilan dinamis.</li>
        <li><b>Eloquent ORM</b> — menghubungkan database dengan sintaks yang mudah dipahami.</li>
        <li><b>Artisan CLI</b> — command line tool untuk mempercepat pekerjaan developer.</li>
        <li><b>Middleware</b> — lapisan pengaman untuk mengatur akses pengguna.</li>
    </ul>

    <h2>Kelebihan Laravel</h2>
    <ul>
        <li>Kode lebih rapi dengan konsep MVC.</li>
        <li>Mempercepat proses development aplikasi.</li>
        <li>Memiliki sistem autentikasi dan keamanan bawaan.</li>
        <li>Dukungan komunitas besar dan dokumentasi lengkap.</li>
    </ul>


    <!-- JavaScript -->
    <script>
        console.log("Selamat datang di Halaman Laravel");
    </script>
</body>
</html>
