<?php
    $Koneksi = new mysqli("localhost", "root", "", "sistem_sekolah");

    $id_data = $_GET['id'];
    $query= "DELETE FROM siswa WHERE id=". $id_data;

   if($Koneksi->query($query) === true){
       header ('Location:read.php');
   }
   else{
       echo"data gagal dihapuskan". $Koneksi->error;
   }