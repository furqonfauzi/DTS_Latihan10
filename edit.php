<?php 

include 'koneksi.php'; 
 
         $id_siswa=$_GET['id_siswa'];
         $username = $_GET['username'];
         $nama = $_GET['nama'];
         $umur = $_GET['umur'];
         $notlp = $_GET['notlp'];
         $jk = $_GET['jk'];
         $alamat = $_GET['alamat'];
         $jurusan = $_GET['jurusan'];


            $sql="UPDATE `siswa` SET `alamat` = '$alamat', `nama` = '$nama', `username` = '$username', `jk` = '$jk', `jurusan` = '$jurusan', `no_tlp` = '$notlp', `umur` = '$umur' WHERE `siswa`.`id_siswa` = $id_siswa;";
          

            $hasil=mysqli_query($koneksi,$sql);

            if($hasil){
                echo '<script>alert("Berhasil Mengubah Data."); document.location="index.php";</script>';
            }else{
             echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }   
 ?>