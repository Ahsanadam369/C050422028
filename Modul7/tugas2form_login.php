<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #006400;
            color: #fff; /* Warna teks diubah menjadi putih */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 300px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #000000;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
            font-weight: bold;
            text-align: left;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #006400;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #7FFF00;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #fff; /* Warna teks diubah menjadi putih */
        }
    </style>
</head>
<body>
    <form action="tugas2proses_login.php" method="post">
        <h2>Login</h2>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>

</body>
</html>
