<?php
session_start();
include "koneksi.php";
$username = $koneksi->real_escape_string($_POST['username']); 
$password = $koneksi->real_escape_string(md5($_POST['password']));

$sql=$koneksi->query("SELECT * FROM user1 WHERE username= '$username' and password='$password'");
$row= $sql->fetch_assoc();


if ($sql->num_rows>0)
{	
	$_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username']; 
    $token=md5($username.$password);

    $koneksi->query("UPDATE user1 SET last_login=now(), token='$token' where user_id=".$row['user_id']);

    header("location:tampil-daftar.php");
    
} else {

     echo"<script>alert('Username atau password salah !');document.location.href='login.php';</script>";

}
?>
