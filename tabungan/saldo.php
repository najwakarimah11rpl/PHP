<?php
session_start();

// Cek apakah saldo dan riwayat transaksi sudah ada di session
if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 0.0;
}

if (!isset($_SESSION['transaction_history'])) {
    $_SESSION['transaction_history'] = [];
}

// Menangani proses tambah saldo atau tarik saldo
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
    $date = date('Y-m-d H:i:s');  // Mendapatkan tanggal dan waktu saat transaksi
    if ($amount > 0) {
        if (isset($_POST['deposit'])) {
            $_SESSION['saldo'] += $amount;
            $_SESSION['transaction_history'][] = [
                'date' => $date,
                'type' => 'Deposit',
                'amount' => $amount
            ];
        } elseif (isset($_POST['withdraw']) && $amount <= $_SESSION['saldo']) {
            $_SESSION['saldo'] -= $amount;
            $_SESSION['transaction_history'][] = [
                'date' => $date,
                'type' => 'Withdraw',
                'amount' => $amount
            ];
        } else {
            $error = "Saldo tidak cukup!";
        }
    } else {
        $error = "Masukkan jumlah uang yang valid!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabungan Anda</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F4F9F4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            color: #388E3C;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .saldo {
            font-size: 28px;
            font-weight: bold;
            color: #388E3C;
            margin-bottom: 30px;
            text-align: center;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border: 2px solid #388E3C;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            width: 48%;
            padding: 12px;
            margin: 15px 1%;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .deposit {
            background-color: #388E3C;
            color: white;
        }

        .withdraw {
            background-color: #D32F2F;
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }

        .transaction-history {
            margin-top: 40px;
            padding: 20px;
            background-color: #E8F5E9;
            border-radius: 8px;
        }

        .transaction-history h3 {
            color: #388E3C;
            margin-bottom: 10px;
        }

        .transaction-history table {
            width: 100%;
            border-collapse: collapse;
        }

        .transaction-history th, .transaction-history td {
            padding: 10px;
            border: 1px solid #388E3C;
            text-align: left;
        }

        .error {
            color: #D32F2F;
            font-weight: bold;
            text-align: center;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
            color: #388E3C;
            text-decoration: none;
            padding: 8px 16px;
            border: 1px solid #388E3C;
            border-radius: 6px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .back-button:hover {
            background-color: #388E3C;
            color: white;
        }

    </style>
</head>
<body>

<div class="container">
    <h1 class="header">Selamat Menabung!!</h1>

    <div class="saldo">
        Saldo Tabungan: Rp <?php echo number_format($_SESSION['saldo'], 0, ',', '.'); ?>
    </div>

    <form method="post">
        <input type="number" name="amount" placeholder="Masukkan jumlah uang" required>
        <div class="error"><?php echo isset($error) ? $error : ''; ?></div>
        <button type="submit" name="deposit" class="deposit">Tambah Saldo</button>
        <button type="submit" name="withdraw" class="withdraw">Tarik Saldo</button>
    </form>

    <div class="transaction-history">
        <h3>Riwayat Transaksi</h3>
        <?php if (empty($_SESSION['transaction_history'])): ?>
            <p>Tidak ada riwayat transaksi.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jenis Transaksi</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['transaction_history'] as $transaction): ?>
                        <tr>
                            <td><?php echo $transaction['date']; ?></td>
                            <td><?php echo $transaction['type']; ?></td>
                            <td>Rp <?php echo number_format($transaction['amount'], 0, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <a href="welcome.php" class="back-button">Kembali</a>
</div>

</body>
</html>
