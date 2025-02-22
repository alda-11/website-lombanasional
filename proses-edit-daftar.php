<?php

include "koneksi.php";

$ID_PESERTA =$_POST['ID_PESERTA'];
$NAMA=$_POST['NAMA'];
$JENIS_KELAMIN=$_POST['JENIS_KELAMIN'];
$UMUR=$_POST['UMUR'];
$JENIS_PERLOMBAAN=$_POST['JENIS_PERLOMBAAN'];


$ubah=$koneksi->query("update daftar set ID_PESERTA='$ID_PESERTA', NAMA='$NAMA',JENIS_KELAMIN='$JENIS_KELAMIN', UMUR='$UMUR',JENIS_PERLOMBAAN= '$JENIS_PERLOMBAAN' ");

if($ubah==true){

    header("location:tampil-daftar.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>