<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])){
  setcookie('login' ,$_POST['login'], time() + 365*24*3600, null, null, false, true);
  setcookie('password',$_POST['password'], time() + 365*24*3600, null, null, false, true);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Exercice 3</title>
</head>
<body>
  <form class="" action="exo3.php" method="post">
    <input type="text" name="login" value="" placeholder="login">
    <input type="password" name="password" value="" placeholder="password">
    <input type="submit" name="name" value="Valider">
  </form>
  <?php
  if (isset($_POST['login']) && isset($_POST['password'])){
 echo ($_POST['login']) .' ' . ($_POST['password']);
  }
  else {

  }
  ?>
</body>
</html>
