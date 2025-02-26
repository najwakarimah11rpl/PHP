<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Tabungin</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #00bcd4, #4caf50);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Header Styles */
        header {
            width: 100%;
            padding: 15px 40px;
            background-color: #ffffff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo img {
            width: 80px; /* Adjusted size for the logo */
            height: auto;
        }

        header .logo span {
            font-size: 26px;
            color: #4caf50; /* Green color for the logo text */
            font-weight: bold;
            letter-spacing: 1px;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #333;
            font-size: 18px;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            color: #ff5722;
            transform: scale(1.05);
        }

        /* Main Content Styles */
        .container {
            text-align: center;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.1);
            padding: 50px 40px;
            max-width: 800px;
            margin-top: 120px; /* Adjusted for fixed header */
            animation: fadeIn 1.5s ease-in-out;
            margin: 120px auto 50px;
        }

        h1 {
            font-size: 42px;
            font-weight: bold;
            color: #4caf50;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .welcome-btn {
            background-color: #ff5722;
            color: #fff;
            padding: 15px 30px;
            font-size: 20px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .welcome-btn:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }

        /* Footer Styles */
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #795548;
            font-size: 14px;
        }

        .footer a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .footer a:hover {
            color: #ff5722;
        }

        /* Animation for fadeIn */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 10px;
            }

            header .logo img {
                width: 70px; /* Slightly smaller on mobile */
            }

            header .logo span {
                font-size: 22px;
            }

            nav {
                justify-content: center;
                width: 100%;
            }

            nav a {
                margin: 0 10px;
                font-size: 16px;
            }

            .container {
                margin-top: 160px;
                padding: 40px 30px;
            }

            .welcome-btn {
                padding: 12px 25px;
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png" alt="Tabungin Logo">
        <span>Tabungin</span>
    </div>
    <nav>
        <a href="user.php">Saya</a>
        <a href="saldo.php">Saldo</a>
        <a href="read.php">Tentang</a>
    </nav>
</header>

<div class="container">
    <h1>Selamat Datang di Tabungin!</h1>
    <p>Selamat datang di platform pengelolaan tabungan kami. Kami menawarkan cara mudah, cepat, dan aman untuk mengatur tabungan Anda. Ayo mulai perjalanan tabungan Anda!</p>
    <a href="saldo.php" class="welcome-btn">Mulai Tabungan</a>
    <a href="withdraw.php" class="welcome-btn" style="margin-top: 20px;">Tarik Tabungan</a>
    <a href="transfer.php" class="welcome-btn" style="margin-top: 20px;">Transfer Tabungan</a>
</div>

<div class="footer">
    <p>© 2025 Tabungin - Semua Hak Dilindungi | <br><a href="#" onclick="confirmLogout()">Logout</a></p>
</div>

<!-- JavaScript for Logout Confirmation -->
<script>
    function confirmLogout() {
        var userConfirmation = confirm("Apakah Anda yakin ingin logout?");
        if (userConfirmation) {
            window.location.href = "home.php"; // Redirect to the home page or logout URL
        }
    }
</script>

</body>
</html>
