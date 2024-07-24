<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f3f3;
        }
        .todo-container {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #b2ebf2;
        }
        .add-button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="todo-container">
        <h2>Todo List</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="todo-body">
                <?php
                // Koneksi ke database
                $conn = new mysqli("localhost", "root", "", "pwpb");
                
                // Memeriksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }
                
                // Mengambil data dari tabel
                $sql = "SELECT * FROM tb_list";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 1) {
                    $no = 1; // Inisialisasi nomor urut
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row["kegiatan"] . "</td>";
                        echo "<td>" . $row["tanggal"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "</tr>";
                        $no++; // Increment nomor urut
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
                
                $conn->close();
                ?>
            </tbody>
        </table>
        <button class="add-button" onclick="window.location.href='tambah12.php'">Tambah</button>
    </div>
</body>
</html>
