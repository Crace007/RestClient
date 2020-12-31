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
		<div class="container">
			<div class="row align-items-lg-center">
				<div class="col-sm-8">
					<h1 style="font-family:'Monotype Corsiva'">Perpustakaan Online</h1>
					<p style="font-family:'verdana'">Membaca ialah upaya merekuk makna ikhtiar untuk memahami alam semesta. Itulah mengapa buku disebut jendela dunia, yang merangsang pikiran agar terus terbuka.</p>
					<p style="font-family:'Courier New'">- Mata Najwa</p>
					<a href="<?= base_url();?>Perpustakaan/data_buku/1" class="btn btn-info" role="button">GET START >></a>
					
				</div>
				<div class="col-sm-4" a>

				</div>
			</div>
			</div>
		</div>
</body>
</html>