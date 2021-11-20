<?php
    $Koneksi = new mysqli("localhost", "root", "", "sistem_sekolah");

    if($Koneksi->connect_error)
    {
        echo"Koneksi database gagal";
    }
    else{
        // echo "Koneksi database berhasil";
        $query= "SELECT * FROM siswa";
        $hasil= $Koneksi-> query($query);

        if($hasil->num_rows > 0){
            while($row= $hasil->fetch_assoc()){
                echo $row['nama_siswa']. "====". $row["NIM"]. "====". $row["tanggal-lahir"]. "====". $row["tempat_lahir"]. "<br>";

            }
        }
    }