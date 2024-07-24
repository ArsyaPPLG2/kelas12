<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan</title>
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
            width: 300px;
            
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        .submit-button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="todo-container">
        <h2>Tambah Kegiatan</h2>
        <form action="save_todo.php" method="POST">

            <label for="no">Nomor:</label></br>
            <input type="Number" id="nomor" name="nomor" required></br>

            <label for="kegiatan">Kegiatan:</label>
            <input type="text" id="kegiatan" name="kegiatan" required>
            
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>
            
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="penting">Penting</option>
                <option value="menengah">Menengah</option>
                <option value="tidak penting">Tidak Penting</option>
            </select>
            
            <button type="submit" class="submit-button">Simpan</button>
        </form>
    </div>
</body>
</html>
