<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        /* === Reset dan Font === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        body {
            background: linear-gradient(135deg, #ffdde1, #ee9ca7);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 0;
        }

        /* === Card Container === */
        .container {
            width: 90%;
            max-width: 850px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(238, 156, 167, 0.3);
            padding: 40px;
            animation: fadeIn 0.8s ease-in-out;
        }

        /* === Judul === */
        h1 {
            text-align: center;
            color: #e91e63;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        h1::after {
            content: "";
            display: block;
            width: 70px;
            height: 3px;
            background: #f48fb1;
            margin: 10px auto;
            border-radius: 2px;
        }

        /* === Tombol Tambah === */
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #f06292, #ec407a);
            color: white;
            text-decoration: none;
            padding: 12px 26px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(240, 98, 146, 0.3);
            margin-bottom: 25px;
        }

        .btn:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ec407a, #f48fb1);
            box-shadow: 0 6px 15px rgba(233, 30, 99, 0.4);
        }

        hr {
            border: none;
            border-top: 2px solid #f8bbd0;
            margin: 15px 0 25px;
        }

        /* === Tabel === */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
        }

        th {
            background: linear-gradient(135deg, #ec407a, #f48fb1);
            color: white;
            text-align: left;
            padding: 15px;
            font-size: 15px;
        }

        td {
            padding: 13px 15px;
            border-bottom: 1px solid #ffe0ec;
            color: #555;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #fff0f6;
        }

        tr:hover {
            background-color: #ffe3eb;
        }

        .no-data {
            text-align: center;
            color: #999;
            font-style: italic;
            margin-top: 15px;
            font-size: 15px;
        }

        /* === Footer === */
        footer {
            text-align: center;
            color: #999;
            margin-top: 35px;
            font-size: 14px;
        }

        footer span {
            color: #e91e63;
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
        <h1>💖 Data Mahasiswa Polinela 💖</h1>

        <a href="tambah.php" class="btn">+ Tambah Mahasiswa</a>
        <hr>

        <?php
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nama</th><th>Program Studi</th></tr>";
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
            <p>© 2025 <span>Sistem Data Mahasiswa</span> | Politeknik Negeri Lampung 🌸</p>
        </footer>
    </div>
</body>
</html>
