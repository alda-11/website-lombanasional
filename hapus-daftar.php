

<?php
session_start();
if (!isset($_SESSION['user_id']))
{
    headder("location:../login.php");
    exit();
}
?>
<?php
  session_start();
  if (empty($_SESSION['ID_PESERTA'])){
    header("location:../login.php");
  }
?>
<?php

$ID_PESERTA=$_GET['ID_PESERTA'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from daftar where ID_PESERTA='$ID_PESERTA'");

if($hapus==true){

    header("location:submite_lomba.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>