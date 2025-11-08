<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        /* === Reset & Font === */
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #d3b7f3, #e8defc, #f5ecff);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* === Card Utama === */
        .container {
            width: 90%;
            max-width: 850px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(120, 70, 170, 0.2);
            padding: 40px 50px;
            animation: fadeIn 0.8s ease;
        }

        h1 {
            text-align: center;
            color: #673ab7;
            font-size: 30px;
            letter-spacing: 0.8px;
            margin-bottom: 25px;
        }

        /* === Tombol Tambah === */
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #7e57c2, #9575cd);
            color: #fff;
            text-decoration: none;
            padding: 12px 26px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(126, 87, 194, 0.3);
        }

        .btn:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #6a1b9a, #8e24aa);
            box-shadow: 0 6px 15px rgba(106, 27, 154, 0.3);
        }

        hr {
            border: none;
            border-top: 2px solid #e1cfff;
            margin: 25px 0;
        }

        /* === Tabel === */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 20px rgba(160, 120, 220, 0.1);
        }

        th {
            background: linear-gradient(135deg, #8e24aa, #ab47bc);
            color: white;
            text-align: left;
            padding: 15px;
            font-size: 15px;
        }

        td {
            padding: 13px 15px;
            color: #444;
            border-bottom: 1px solid #eee;
        }

        tr:nth-child(even) {
            background: #faf5ff;
        }

        tr:hover {
            background: #f3e5f5;
            transform: scale(1.01);
        }

        .no-data {
            text-align: center;
            color: #777;
            font-style: italic;
            margin-top: 20px;
        }

        /* === Footer === */
        footer {
            text-align: center;
            color: #999;
            margin-top: 30px;
            font-size: 14px;
        }

        footer span {
            color: #8e24aa;
            font-weight: 600;
        }

        /* === Animasi === */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
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
            <p>© 2025 <span>Sistem Data Mahasiswa</span> | Politeknik Negeri Lampung 💜</p>
        </footer>
    </div>
</body>
</html>
