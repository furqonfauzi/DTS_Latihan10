<?php 
include 'koneksi.php';

     $username = $_POST['username'];
		 $nama = $_POST['nama'];
		 $umur = $_POST['umur'];
		 $notlp = $_POST['notlp'];
		 $jk = $_POST['jk'];
		 $alamat = $_POST['alamat'];
		 $jurusan = $_POST['jurusan'];

	
        

     
     //Query input menginput data kedalam tabel anggota
        $sql="insert into siswa (id_siswa,alamat,nama,username,jk,jurusan,no_tlp,umur) values
      ('','$alamat','$nama','$username','$jk','$jurusan','$notlp','$umur')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($koneksi,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
      

        	if($hasil){
          		echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
       		}else{
          	 echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }	

?>

