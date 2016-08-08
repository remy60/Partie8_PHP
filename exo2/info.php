<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Info.php</title>
</head>
<body>
  <?php
  session_start();
  ?>
  <p>Re-bonjour !</p>
  <p>
    Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br/>
    Et ton âge hummm... Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D
  </p>
</body>
</html>
