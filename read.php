<html>
    <head>
        <title>MESIN VS ELEKTRO</title>
        <style>
            table, td, tr, th {
                border: 1px solid black
            }
        </style>
    </head>
    <body>
    <?php
    $Koneksi = new mysqli("localhost", "root", "", "sistem_sekolah");
    ?>
    <b> Daftar seluruh siswa mesin dan elektro </b> <br>
    <a href='create.php'>Tambah</a>
    <table>
            <tr>
                <td>Nomor</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Aksi</td>
                <td>Update</td>
            </tr>
        <?Php
         $query= "SELECT * FROM siswa";
         $hasil= $Koneksi-> query($query);
         $nomor=10;
         if($hasil->num_rows > 0){
             while($row= $hasil->fetch_assoc()){
                 echo "<tr>";
                 echo "<td>". $nomor++ ."</td>";
                 echo "<td>". $row["nama_siswa"]. "</td>";
                 echo "<td>". $row["NIM"]. "</td>";
                 echo "<td>". $row["tanggal_lahir"]. "</td>";
                 echo "<td>". $row["tempat_lahir"]. "</td>";
                 echo "<td><a href='delete.php?id=". $row['id']. "'>Delete</a</td>";
                 echo "<td><a href='update.php?id=". $row['id']. "'>Update</a</td>";
                echo "</tr>";
             }
         }else{
             echo "<tr><td>Tidak ada data yang akan ditampilkan</td></tr>";
         }
         ?>
    </table>
    </body>
</html>