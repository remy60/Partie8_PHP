<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Exercice 1</title>
</head>
<body>
  <?php
  // départ de la session
  session_start();
  // On donne a l'utilisateur son adresse ip / le nom du serveur et son UserAgent
  echo $_SERVER['REMOTE_ADDR'].' '. $_SERVER['SERVER_NAME'].' '. $_SERVER['HTTP_USER_AGENT'];
  ?>
</body>
</html>
