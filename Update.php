<html>
    <head>
        <title>Update siswa mesin dan elektro</title>

        <body>
        <?php
    $Koneksi = new mysqli("localhost", "root", "", "sistem_sekolah");
    $id_data =$_GET['id'];
    $query_read = "SELECT * FROM siswa WHERE id=".$id_data;
    $hasil = $Koneksi->query($query_read);
    $data = '';
    if($hasil-> num_rows > 0 ){
        $data = $hasil->fetch_assoc();
    }
    // var_dump($data)
    ?>
     <form action="" method="POST">
    Nama          : <input type="text" id="nama" name="nama" value="<?php echo $data['nama_siswa'];?>"><br>
    NIM           : <input type="text" id="nim" name="nim"value="<?php echo $data['NIM'];?>"><br>
    Tempat Lahir  : <input type="text" id="tempat" name="tempat"value="<?php echo $data['tempat_lahir'];?>"><br>
    Tanggal Lahir : <input type="text" id="tanggal" name="tanggal"value="<?php echo $data['tanggal_lahir'];?>"><br>
    <button type="submit">Simpan</button>
    </form>
    <?php
    if(count($_POST) > 1){
        // var_dump($_POST);
        $query="UPDATE siswa SET 
        nama_siswa= '".$_POST['nama']. "',
        nim='".$_POST['nim']. "',
        tempat_lahir='".$POST['tempat']. "',
        tanggal_lahir='".$POST['tanggal']. "',
        WHERE id=".$id_data;
        
    if($Koneksi->query($query) === true){
        header('Location: read.php');

    }
    else{
        echo"data gagal ditambahkan". "<br>". $Koneksi->error;
    }
    }
    ?>
        </body>
    </head>
</html>