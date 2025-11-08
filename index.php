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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffffcc;
            backdrop-filter: blur(8px);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(75, 0, 130, 0.15);
            width: 85%;
            max-width: 700px;
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            text-align: center;
            color: #5b21b6;
            font-size: 24px;
            margin-bottom: 25px;
        }

        h1::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #c4b5fd;
            margin: 6px auto 0;
            border-radius: 3px;
        }

        .btn {
            display: inline-block;
            background-color: #8b5cf6;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .btn:hover {
            background-color: #7c3aed;
            transform: scale(1.05);
            box-shadow: 0 3px 10px rgba(124, 58, 237, 0.3);
        }

        hr {
            border: none;
            border-top: 1.8px solid #ddd6fe;
            margin: 15px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(139, 92, 246, 0.1);
            background: white;
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
            background: #f8f5ff;
        }

        tr:hover {
            background-color: #ede9fe;
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
            margin-top: 20px;
            font-size: 12.5px;
        }

        footer span {
            color: #6d28d9;
            font-weight: 600;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✨ Data Mahasiswa ✨</h1>

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
            <p>© 2025 <span>Sistem Data Mahasiswa</span> | Politeknik Negeri Lampung 💜</p>
        </footer>
    </div>
</body>
</html>
