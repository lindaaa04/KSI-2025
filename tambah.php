<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mahasiswa (nama, prodi) VALUES ('$nama', '$prodi')";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan! <a href='index.php'>Lihat Data</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>
        <label>Prodi:</label>
        <input type="text" name="prodi" required><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
