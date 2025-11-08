<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e8ff, #ede9fe);
            color: #4b0082;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: #ffffffcc;
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 30px 35px;
            box-shadow: 0 8px 20px rgba(75, 0, 130, 0.15);
            margin-top: 50px;
            animation: fadeIn 0.8s ease-in-out;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        h1 {
            color: #5b21b6;
            font-size: 22px;
            margin: 0;
        }

        .btn {
            background-color: #8b5cf6;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #7c3aed;
            transform: scale(1.05);
            box-shadow: 0 3px 10px rgba(124, 58, 237, 0.3);
        }

        hr {
            border: none;
            border-top: 2px solid #e9d5ff;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(139, 92, 246, 0.1);
        }

        th {
            background-color: #8b5cf6;
            color: white;
            padding: 10px 12px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 10px 12px;
            border-bottom: 1px solid #f3e8ff;
            font-size: 13.5px;
            color: #4b0082;
        }

        tr:nth-child(even) {
            background: #f9f5ff;
        }

        tr:hover {
            background-color: #f3e8ff;
            transition: 0.3s;
        }

        .no-data {
            text-align: center;
            color: #888;
            font-style: italic;
            margin-top: 10px;
            font-size: 14px;
        }

        footer {
            text-align: center;
            color: #aaa;
            margin-top: 25px;
            font-size: 12.5px;
        }

        footer span {
            color: #6d28d9;
            font-weight: 600;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>📘 Data Mahasiswa</h1>
            <a href="tambah.php" class="btn">+ Tambah Data</a>
        </header>
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
            <p>© 2025 <span>Sistem Data Mahasiswa</span> | Politeknik Negeri Lampung 💜</p>
        </footer>
    </div>
</body>
</html>
