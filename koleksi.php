<?php 
session_start();
include 'config/koneksi.php';
if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit();
}

$query="SELECT * FROM users WHERE username ='$username'";
$result= mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);
$query_buku = "SELECT * FROM koleksi";
$result_buku = mysqli_query($koneksi, $query_buku);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity=" sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Kategori</th>
                <th scope="col">Stok</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($buku = mysqli_fetch_assoc($result_buku)) {?>
            <tr>
                <td> <?php echo $buku['id'];?> </td>
                <td> <?php echo $buku[''];?> </td>
                <td> <?php echo $buku['id'];?> </td>
                <td> <?php echo $buku['id'];?> </td>
                <td> <?php echo $buku['id'];?> </td>
                <td> <?php echo $buku['id'];?> </td>
                <td> <?php echo $buku['id'];?> </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

</html>