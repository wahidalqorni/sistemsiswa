<html>
    <head>
        <title>Penambahan siswa mesin dan elekro</title>
    </head>

    <body>
    <?php
    $Koneksi = new mysqli("localhost", "root", "", "sistem_sekolah");
    ?>
    <b>Form Pendaftaran siswa mesin dan elektro</b>
    <br>
    <form action="" method="POST">
    Nama          : <input type="text" id="nama" name="nama"><br>
    NIM           : <input type="text" id="nim" name="nim"><br>
    Tempat Lahir  : <input type="text" id="tempat" name="tempat"><br>
    Tanggal Lahir : <input type="text" id="tanggal" name="tanggal"><br>
    <button type="submit">Simpan</button>
    </form>
    <?php
    if(count($_POST) > 1){
        // var_dump($_POST);
        $query="INSERT INTO siswa (nama_siswa, tanggal_lahir, NIM, tempat_lahir) VALUES('"
                                            .$_POST['nama']. "','"
                                            .$_POST['tanggal']. "','"
                                            .$_POST['nim']. "','"
                                            .$_POST['tempat']. "')";
    if($Koneksi->query($query) === true){
        header('Location: read.php');

    }
    else{
        echo"data gagal ditambahkan". "<br>". $Koneksi->error;
    }
    }
    ?>
    </body>
</html>