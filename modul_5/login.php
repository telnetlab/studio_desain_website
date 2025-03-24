<?php
include('config.php');
session_start();

if (isset($_POST['login'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      header("Location: dashboard.php");
      exit();
    } else {
      $error = "Password salah!";
    }
  } else {
    $error = "Username tidak ditemukan!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5" style="max-width: 400px">
    <h2 class="mb-4">Login</h2>
    <?php if(isset($_SESSION['success'])): ?>
      <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
      <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if(isset($error)): ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label>Username/Email</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="login" class="btn btn-primary">Login</button>
      <p class="mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </form>
  </div>
</body>
</html>