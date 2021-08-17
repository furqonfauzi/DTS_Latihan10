<?php 

include 'koneksi.php'; 

 $id=$_GET['id_siswa'];

	$sql="DELETE FROM siswa WHERE id_siswa='$id'";
          
 	$hasil=mysqli_query($koneksi,$sql);
           if($hasil){
           		echo '<script>alert("Data Berhasil Di Hapus"); document.location="index.php";</script>';
        	}else{
       	   		echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
 ?>