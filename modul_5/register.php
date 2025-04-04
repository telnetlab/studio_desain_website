<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Akun</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars($_POST['username']);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $koneksi->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);
            
            if ($stmt->execute()) {
                echo "<p class='success'>Registrasi berhasil! Silakan login.</p>";
            } else {
                echo "<p class='error'>Error: " . $stmt->error . "</p>";
            }
        }
        ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>