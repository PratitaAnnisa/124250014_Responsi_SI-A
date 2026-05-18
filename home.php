<?php 
session_start();
include 'config/koneksi.php';
if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="#" style="color: blue;">Pusdigif</a></div>
            <div class="me-3"><a href="home.php" class="btn">Home</a></div>
            <div class="me-3"><a href="koleksi.php" class="btn">Koleksi</a></div>
            <div class="me-3"><a href="peminjaman.php" class="btn">peminnjaman</a></div>
            <div class="navbar-nav ms-auto"><a href="logout.php" class="btn btn-light">LOGOUT</a></div>
        </div>
    </nav>
    <div>
        <h1>PERPUSTAKAAN DIGITAL INFORMATIKA</h1>
        <p>Selamat datang kembali Admin</p><br>
        <p>Klik salah satu tombol untuk memulai</p>
    </div>
</body>

</html>