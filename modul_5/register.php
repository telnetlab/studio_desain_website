<?php
include('config.php');
session_start();

if (isset($_POST['submit'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $email = $conn->real_escape_string($_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Cek username/email sudah ada
  $check = $conn->query("SELECT * FROM users WHERE username='$username' OR email='$email'");
  
  if ($check->num_rows > 0) {
    $error = "Username atau email sudah terdaftar!";
  } else {
    // Simpan ke database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
      $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
      header("Location: login.php");
      exit();
    } else {
      $error = "Error: " . $conn->error;
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5" style="max-width: 400px">
    <h2 class="mb-4">Registrasi</h2>
    <?php if(isset($error)): ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
      <p class="mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </form>
  </div>
</body>
</html>