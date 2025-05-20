<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      background:#1690A7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    form {
      width: 400px;
      border: 2px solid #ccc;
      padding: 30px;
      background-color: #fff;
      border-radius: 15px;
    }

    h2 {
      text-align: center;
      margin-bottom: 40px;
      color: #333;
    }

    input {
      display: block;
      border: 2px solid #ccc;
      width: 95%;
      padding: 10px;
      margin: 10px auto;
      border-radius: 5px;
    }

    label {
      color: #888;
      font-size: 18px;
      padding: 10px;
      display: block;
      text-align: left;
      margin-left: 15px;
    }

    button {
      float: right;
      background: #555;
      padding: 10px 15px;
      color: #fff;
      border-radius: 5px;
      margin-right: 10px;
      border: none;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.7;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <form action="login.php" method="POST">
    <h2>Giriş Yap</h2>
    <?php
    if (isset($_GET['error'])) {
      echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>
    <label for="email">Kullanıcı Adı (SAÜ Mail)</label>
    <input type="text" id="email" name="email" placeholder="b2412100001@sakarya.edu.tr" required>

    <label for="password">Şifre</label>
    <input type="password" id="password" name="password" placeholder="b2412100001" required>

    <button type="submit">Giriş</button>
  </form>

</body>
</html>
