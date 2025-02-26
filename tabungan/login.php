<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Style yang sama dengan daftar.php */
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7e0; /* Warna latar belakang hijau muda */
            color: #2c6e2f; /* Warna teks hijau gelap */
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c6e2f; /* Warna hijau gelap untuk judul */
        }

        .input-field {
            margin-bottom: 15px;
        }

        .input-field label {
            display: block;
            margin-bottom: 5px;
            color: #2c6e2f;
        }

        .input-field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #2c6e2f;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .input-field input[type="submit"] {
            background-color: #2c6e2f;
            color: white;
            cursor: pointer;
        }

        .input-field input[type="submit"]:hover {
            background-color: #236c2f;
        }

        .message {
            text-align: center;
            margin-top: 15px;
        }

        .message a {
            color: #2c6e2f;
            text-decoration: none;
        }

        .message a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }

        .back-button {
            margin-top: 15px;
            display: block;
            text-align: center;
        }

        .back-button a {
            padding: 10px 15px;
            background-color: #2c6e2f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button a:hover {
            background-color: #236c2f;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <h2>Jawa dilarang login!</h2>

    <?php
    // Menampilkan pesan error atau sukses
    if (isset($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
    ?>

    <form action="welcome.php" method="POST">
        <div class="input-field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-field">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-field">
            <input type="submit" value="Login">
        </div>
    </form>

    <div class="back-button">
        <a href="javascript:history.back()">Kembali</a>
    </div>
</div>

</body>
</html>
