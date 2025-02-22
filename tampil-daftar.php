<?php
session_start();
if (!isset($_SESSION['user_id']))
{
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>DAFTAR LOMBA</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>DAFTAR LOMBA</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>ID_PESERTA</th><th>NAMA</th><th>JENIS_KELAMIN</th><th>UMUR</th><th>JENIS_PERLOMBAAN</th>
                <th>
                    <a href="input-daftar.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from daftar order by ID_PESERTA ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['ID_PESERTA']?></td>
                <td><?php echo $row['NAMA']?></td>
                <td><?php echo $row['JENIS_KELAMIN']?></td>
                <td><?php echo $row['UMUR']?></td>
                <td><?php echo $row['JENIS_PERLOMBAAN']?></td>
               
                <td>

                <td><a href="edit-daftar.php?id=<?php echo $row['ID_PESERTA']?>">edit
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-daftar.php?id=<?php echo $row['ID_PESERTA']?>" onclick=" return confirm('Anda yakin menghapus data?')">hapus
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a></td>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>