<?php
include 'koneksi.php';
$username   = $_POST['username'];
$password   = $_POST['password'];
$cek        = mysqli_query($connect, "select * from login where username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
if($result>0){
    $user = mysqli_fetch_array($cek);
    session_start();
    $_SESSION['username'] = $user['username'];
    header("location:indexkuy.php");
}else{
    echo '<h1>Username atau Kata Sandi Salah!</h1>';
    header("location:login.php");
}
?>
