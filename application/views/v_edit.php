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
            <h2>UBAH DATA BUKU</h2>
            <p></p>
            </center>
        </section>
        </div>
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url();?>Perpustakaan/ubah_data/<?=$buku['id']?>" method="post">  
                        <input type="hidden" name="id" value="<?= $buku['id']; ?> ">

                        <div class="form-group">
                            <label for="nama">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $buku['Judul'] ?>" >
                        </div>
                        <div class="form-group">
                            <label for="daerah">Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="penulis" value="<?= $buku['Penulis'] ?>">               
                        </div>
                        <div class="form-group">
                            <label for="stok">Edisi</label>
                            <input type="text" name="edisi" class="form-control" id="edisi" value="<?= $buku['Edisi'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= $buku['Penerbit'] ?>">
                        </div> 
                        <div class="form-group">
                            <label for="harga">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $buku['Tahun'] ?>">
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