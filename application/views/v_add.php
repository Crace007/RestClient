<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan onlien</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" href="<?= base_url();?>Perpustakaan">Home</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>Perpustakaan/data_buku/1">Data</a>
	</li>
</div>
</nav>
<p></p>
<main class="container">
    <div class="content-wrapper">
        <section class="content-header">
            <center>
            <h2>TAMBAH DATA BUKU</h2>
            <p></p>
            </center>
        </section>
        </div>
            <div class="card">
                <div class="card-body">
                <form action="<?= base_url();?>Perpustakaan/tambah_data/" method="post">  
                <input type="hidden" name="id" value="">

                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="" >
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="penulis" value="">               
                        </div>
                        <div class="form-group">
                            <label for="edisi">Edisi</label>
                            <input type="text" name="edisi" class="form-control" id="edisi" value="">
                        </div>
                        <div class="form-group">
                            <label for="harpenerbitga">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" value="">
                        </div> 
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="">
                        </div><br>
                        <div class="form-group">
                            <a href="<?= base_url();?>Perpustakaan/data_buku/1" class="btn btn-danger" >Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>