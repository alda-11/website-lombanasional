<?php
$ID_PESERTA=$_POST['ID_PESERTA'];
$NAMA=$_POST['NAMA'];
$JENIS_KELAMIN=$_POST['JENIS_KELAMIN'];
$UMUR=$_POST['UMUR'];
$JENIS_PERLOMBAAN=$_POST['JENIS_PERLOMBAAN'];

include "koneksi.php";

$simpan=$koneksi->query("insert into daftar(ID_PESERTA,NAMA,JENIS_KELAMIN,UMUR,JENIS_PERLOMBAAN) 
                        values ('$ID_PESERTA', '$NAMA', '$JENIS_KELAMIN', '$UMUR','$JENIS_PERLOMBAAN')");

if($simpan==true){

    header("location:tampil-daftar.php?pesan=inputBerhasil");
} else{
    echo "Error";
}
 