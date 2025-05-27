<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Ana Sayfa</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">
  <header>
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="home.php" class="link"> Benim Hakkımda</a></li>
        <li><a href="memleket.html" class="link">Memleketim</a></li>
        <li><a href="cv.html" class="link">Öz Geçmiş</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <article class="left_article">
      <h3>Hoşgeldiniz, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h3>
      <p>Bu sayfa giriş yaptıktan sonra görüntülenebilir.</p>
    </article>
  </section>
</div>
</body>
</html>
