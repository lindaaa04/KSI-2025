<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mahasiswa (nama, prodi) VALUES ('$nama', '$prodi')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='success'>✅ Data berhasil ditambahkan! <a href='index.php'>Lihat Data</a></div>";
    } else {
        echo "<div class='error'>❌ Error: " . $query . "<br>" . mysqli_error($conn) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e8ff, #ede9fe);
            color: #4b0082;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffffcc;
            backdrop-filter: blur(8px);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(75, 0, 130, 0.15);
            text-align: center;
            width: 85%;
            max-width: 700px;
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            margin-bottom: 20px;
            color: #5b21b6;
            font-size: 24px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
            font-weight: 500;
            color: #6d28d9;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #c4b5fd;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #a78bfa;
            box-shadow: 0 0 8px #c4b5fd;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #8b5cf6;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #7c3aed;
            transform: scale(1.05);
        }

        a {
            color: #6d28d9;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .success, .error {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 12px;
            color: white;
            font-weight: 500;
            animation: fadeIn 0.5s ease;
        }

        .success {
            background-color: #8b5cf6;
        }

        .error {
            background-color: #dc2626;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✨ Tambah Data Mahasiswa ✨</h1>
        <form method="POST" action="">
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap..." required>

            <label>Program Studi:</label>
            <input type="text" name="prodi" placeholder="Masukkan prodi..." required>

            <input type="submit" name="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>
