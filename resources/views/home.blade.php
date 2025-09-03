<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #F2F5ED;
            text-align: center;
        }
        nav {
            margin-bottom: 20px;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #7a9c57;
            font-weight: bold;
        }
        nav a:hover {
            color: #afcfa3;
        }
        h1 {
            color: #7a9c57;
        }
        h2{
            color: #7a9c57
        }
        p{
            text-align: justify;
            margin: 15px auto;
            max-width: 800px;
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

    <h1>Framework Web</h1>
    <p>Framework web adalah <b>kerangka kerja</b> yang membantu developer membangun website atau aplikasi web dengan lebih cepat, terstruktur, dan mudah dipelihara ibaratnya seperti pondasi dan peralatan siap pakai, sehingga tidak perlu membuat semuanya dari nol.</p>

    <h2>Manfaat Framework Web</h2>
    <ul>
        <li><b>Mempercepat pengembangan</b> — sudah ada fitur dasar seperti routing, autentifikasi, dan koneksi database.</li>
        <li><b>Kode lebih terstruktur</b> — mudah dibaca, dipahami, dan dipelihara.</li>
        <li><b>Keamanan lebih baik</b> — banyak framework melindungi dari SQL injection, XSS, CSRF, dll.</li>
        <li><b>Mendukung kerja tim</b> — standar penulisan kode jelas sehingga memudahkan kolaborasi.</li>
    </ul>

    <h2>Contoh Framework Web Populer</h2>
    <ul>
        <li>Laravel (PHP)</li>
        <li>Django (Python)</li>
        <li>Express.js (Node.js)</li>
        <li>Spring Boot (Java)</li>
        <li>React.js (JavaScript - Frontend)</li>
    </ul>

    <!-- JavaScript -->
    <script>
        console.log("Selamat Datang di halaman Home");
    </script>
</body>
</html>
