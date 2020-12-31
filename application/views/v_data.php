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
            <h2>DATA BUKU PERPUSTAKAAN</h2>
            <a class = "btn btn-outline-primary" href="<?= base_url();?>Perpustakaan/tambah_data">Tambah Data</a>
            </center>
        </section>
        </div>
        <section class="content">
        <p></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>JUDUL BUKU</th>
                    <th>PENULIS</th>
                    <th>EDISI</th>
                    <th>PENERBIT</th>
                    <th>TAHUN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($buku as $b) :
                    ?>
                <tr>
                    <td><?= $b['id']; ?></td>
                    <td><?= $b['Judul']; ?></td>
                    <td><?= $b['Penulis']; ?></td>
                    <td><?= $b['Edisi']; ?></td>
                    <td><?= $b['Penerbit']; ?></td>
                    <td><?= $b['Tahun']; ?></td>
                    <td>
                    
                    <a class="btn btn-success btn-sm" href="<?= base_url(); ?>Perpustakaan/ubah_data/<?= $b['id']?>">Ubah</a>
                    <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Perpustakaan/hapus/<?= $b['id']?>" onclick="return confirm('hapus data?')">Hapus</a>
                    </td>
                </tr>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Right-aligned -->
            <ul class="pagination justify-content-end" style="margin:20px 0">
            <?php for ($i=1; $i <= $halaman ; $i++) { ?>
                <li class="page-item"><a class="page-link" href="<?= base_url();?>Perpustakaan/data_buku/<?= $i?>"><?= $i?></a></li>
            <?php } ?>
            </ul>
        </section>
</body>
</html>