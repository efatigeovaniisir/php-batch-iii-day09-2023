<?php
    require_once('conn.php');
 
    if(isset($_POST['submit']))
    {
        $nama_siswa = $_POST['nama_siswa'];
        $usia = $_POST['usia'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $kelas = $_POST['kelas'];

        $query ="INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `usia`, `kelas`, `jk`) VALUES (NULL,'$nama_siswa','$alamat','$usia','$kelas','$jk');";
        $add = mysqli_query($koneksi, $query);

        echo"
        <script>
        alert('Data Berhasil ditambah');
        window.location.href = 'index.php';
        </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nama">Nama Siswa</label>
        <Input id="nama" type="text" name="nama_siswa" placeholder="Masukan Nama" required>

        <br><br>
        <label for="nama">Usia</label>
        <Input id="usia" type="number" name="usia" placeholder="Masukan Usia" required>

        <br><br>
        <label for="nama">Alamat</label>
        <Input id="alamat" type="text" name="alamat" placeholder="Masukan Alamat" required>

        <br><br>
        <label for="nama">Jenis Kelamin</label>
        <Input id="jk" type="text" name="kelas" placeholder="Masukan kelas" required>


        <br><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>