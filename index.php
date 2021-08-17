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
        <h1> DIGITAL TALENT  |<small> Daftar Peserta Digitalen ( POLITEKNIK BATAM )</small> </h1>
        <a href="form_add.php" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Peserta</a>
          <div class="alert alert-none" role="alert">
			
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telp</th>
      <th scope="col">Gender</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <?php 
      	$no = 1;
      	$data=mysqli_query($koneksi,"select*from siswa ORDER BY id_siswa ASC");
        		
        		while($i=mysqli_fetch_array($data)){?>

      <td><?=$no++?></td> 			
      <td><?=$i['nama']?></td>
      <td><?=$i['username']?></td>
      <td><?=$i['umur']?></td>
      <td><?=$i['alamat']?></td>
      <td><?=$i['no_tlp']?></td>
      <td><?=$i['jk']?></td>
      <td>
      	<?php 
      		if($i['jurusan']=='junior_web_programing'){
      			echo "Junior Web Programing";
      		}elseif($i['jurusan']=='junior_mobile_programing'){
      			echo "Junior Mobile Programing";
      		}elseif ($i['jurusan']=='junior_grapics_designer') {
      			echo "Junior Grapics Designer";
      		}elseif ($i['jurusan']=='intermediate_multimedia_designer') {
      			echo "Intermediate Mulimedia Designer";
      		}

      	 ?>

      </td>
      <td><?=$i['alamat']?></td>
      <td><a href="form_edit.php?id_siswa=<?= $i['id_siswa']?>" type="button" class="btn btn-success btn-sm">Ubah</a></td>
      <td><a href="hapus.php?id_siswa=<?= $i['id_siswa']?>" onclick="return confirm('yakin Ingin Menghapus?')"
                       class="btn btn-danger btn-sm">Hapus <i class="fa fa-trash"></i></a></td>
      
    </tr>
      <?php } ?>
  </tbody>
</table>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>