<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        /* === Reset dan Umum === */
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #c3aed6, #e6d5f7, #f3e8ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .container {
            width: 90%;
            max-width: 900px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin: 50px 0;
            padding: 40px;
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            text-align: center;
            color: #6a1b9a;
            font-size: 28px;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        /* === Tombol === */
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #8e24aa, #ab47bc);
            color: white;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .btn:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #7b1fa2, #9c27b0);
            box-shadow: 0 4px 10px rgba(156, 39, 176, 0.3);
        }

        hr {
            border: none;
            border-top: 2px solid #f1e4fc;
            margin: 20px 0;
        }

        /* === Tabel === */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            margin-top: 10px;
        }

        th {
            background: #9c27b0;
            color: white;
            text-align: left;
            padding: 14px 16px;
            font-size: 15px;
        }

        td {
            padding: 12px 16px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
            color: #555;
        }

        tr:nth-child(even) {
            background: #f9f5fc;
        }

        tr:hover {
            background: #f3e5f5;
            transition: 0.3s;
        }

        .no-data {
            text-align: center;
            color: #888;
            font-style: italic;
            margin-top: 20px;
            font-size: 15px;
        }

        footer {
            text-align: center;
            color: #aaa;
            margin-top: 35px;
            font-size: 13px;
        }

        /* === Animasi === */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📘 Data Mahasiswa</h1>

        <a href="tambah.php" class="btn">+ Tambah Data</a>
        <hr>

        <?php
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nama</th><th>Prodi</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['prodi']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-data'>Belum ada data mahasiswa 😢</p>";
        }
        ?>

        <footer>
            <p>© 2025 Sistem Data Mahasiswa | Politeknik Negeri Lampung 💜</p>
        </footer>
    </div>
</body>
</html>
