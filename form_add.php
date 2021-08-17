<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>Form Daftar </title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<?php 

include 'koneksi.php';

 ?>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">DIGITAL TALENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programming
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">PHP</a>
          <a class="dropdown-item" href="#">ASP</a>
          <a class="dropdown-item" href="#">AJAX</a>
          <a class="dropdown-item" href="#">jQuery</a>
          <a class="dropdown-item" href="#">MySQL</a>
          <a class="dropdown-item" href="#">CSS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Software
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Notpade</a>
          <a class="dropdown-item" href="#">SublimText</a>
          <a class="dropdown-item" href="#">VS Code</a>
          <a class="dropdown-item" href="#">PageBreeze</a>
          <a class="dropdown-item" href="#">Bluefish Editor</a>
          <a class="dropdown-item" href="#">Dreamweaver</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container">
      <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
        <h1> DIGITAL TALENT  |<small> Form Tambah Peserta Digitalen ( POLITEKNIK BATAM )</small> </h1>
          <div class="alert alert-none" role="alert">
			<form action="add.php" method="post">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="username">Username</label>
			      <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Anda" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="nama">Nama </label>
			      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" required>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="umur">Umur</label>
			      <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukan Umur Anda" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="notlp">No Telp </label>
			      <input type="number" class="form-control" id="notlp" name="notlp" placeholder="Masukan Nomer Telpon Anda" required>
			    </div>
			  </div>
			  <div class="form-row">
			   <div class="col-sm-6">
	              <label>Gender</label>
	                 <select  name='jk' class="form-control select2bs4" required>
	                      <option value="">Pilih</option>
	                      <option value="L">Laki-Laki</option>
	                       <option value="P">Perempuan</option>
	                 </select>
	          		</div>
	          		<div class="form-group col-md-6">
			      <label for="inputState">Pelatihan</label>
			      <select  name="jurusan" class="form-control select2bs4" required>
			        <option value="">Pilih Jurusan Anda</option>
			        <option value="junior_web_programing"> Junior Web Programing</option>
			        <option value="junior_mobile_programing"> Junior Mobile Programing</option>
			        <option value="junior_grapics_designer"> Junior Grapics Designer</option>
			        <option value="intermediate_multimedia_designer"> Intermediate Multimedia Designer</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-row">			    
			  	<div class="form-group col-md-12">
			      <label for="alamat">Alamat</label>
			    <textarea class="form-control" id="alamat" name="alamat" required> </textarea>
			    </div>
			  </div>
			  <button type="submit" name="add" value="cek" class="btn btn-primary">Daftar</button>
			   <a href="index.php" type="button" class="btn btn-warning">Kembali</a>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>