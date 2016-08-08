<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Exercice 2</title>
</head>
<body>
  <?php
  session_start();
  $_SESSION['prenom'] = 'Rémy';
  $_SESSION['nom'] = 'Dumoulin';
  $_SESSION['age'] = 22;
  ?>
  <p>
    Salut <?php echo $_SESSION['prenom']; ?> !<br/>
    Tu es à l'accueil de mon site. Tu veux aller sur une autre page ?
  </p>
  <a href="info.php">Lien vers la page info.php</a>
</body>
</html>
