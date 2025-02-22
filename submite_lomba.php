<?php include "index.php"; ?>
<div class="container-fluid pt-5 pb-5 SUBMIT LOMBA">
<div class="container">
<h2 class="display-3 text-center" id ="SUBMIT LOMBA">isi form daftar lomba</h2>
<p class="text-center">isi dengan baik</p>
<div class="row pb-3">
<div class="col-md-6">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-daftar.php" method="POST">
                    <div class="form-group">
                        <label for="ID_PESERTA">ID_PESERTA</label>
                        <input type="number" name="ID_PESERTA" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="NAMA">NAMA</label>
                        <input type="text" name="NAMA" class="form-control">
                    </div>
                       
                    </div>

                    <div class="form-group">
                        <label for="JENIS_KELAMIN">JENIS_KELAMIN</label>
                         <select   name="JENIS_KELAMIN" class="form-control">

                                    <option value=" p">p </option>
                                     <option value=" l">l </option>
                                 </select>


                    <div class="form-group">
                        <label for="UMUR">UMUR</label>
                        <textarea name="UMUR" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="JENIS_PERLOMBAAN">JENIS_PERLOMBAAN</label>
                        <input type="text" name="JENIS_PERLOMBAAN" class="form-control">
                    </div>
                     

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>


<div class="col-md-8">
	<textarea class="form-control  form-control-lg" rows="5"></textarea>
</div>

<div class="col-md-2 mx-auto text-center">
	<button type="button" class="btn btn-danger btn-lg">KIRIM PESAN</button>
</div>
</div>
</div>



?>
<div class="container text-center pt-5 pb-5">ALL RIGHT Reserved @Copy; 2021</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
 