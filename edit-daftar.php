<?php
session_start();
if (!isset($_SESSION['user_id']))
{
    headder("location:../login.php");
    exit();
}
?>
<!doctype HTML>
<html>
<head>
    <title>Form Lomba </title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-daftar.php" method="POST">
                <?php
                $ID_PESERTA=$_GET['ID_PESERTA'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from daftar where ID_PESERTA='$ID_PESERTA'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="ID_PESERTA">ID_PESERTA</label>
                        <input type="text" name="ID_PESERTA" value="<?php echo $row['ID_PESERTA']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="NAMA">NAMA</label>
                        <input type="text" name="NAMA" value="<?php echo $row['NAMA']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="JENIS_KELAMIN">JENIS_KELAMIN</label>
                        <textarea name="JENIS_KELAMIN" class="form-control"><?php echo $row['JENIS_KELAMIN']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="UMUR">UMUR</label>
                        <textarea name="UMUR" class="form-control"><?php echo $row['UMUR']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="JENIS_PERLOMBAAN">JENIS_PERLOMBAAN</label>
                        <input type="text" name="JENIS_PERLOMBAAN" value="<?php echo $row['JENIS_PERLOMBAAN']?>" class="form-control">
                    </div>
                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>