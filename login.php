<?php 
session_start();
include 'config/koneksi.php';
if($_SERVER ['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h2 class=" card-tittle text-center">Pusdigif</h2>
            <p class="card-text text-center">Sistem Perpustakaan Informatika</p>
            <form action=" " method="POST">
                <?php if(isset($result) && mysqli_num_rows ($result)>0){
                    $_SESSION ['login'] = true;
                    header("location: koleksi.php");
                    exit();          
                }else if(isset($result)){
                    echo "<div class='alert alert-danger mt-3 text-center' role='alert'> Gagal Login <div>";
                }?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">masuk</button>
            </form>
        </div>
    </div>
</body>

</html>