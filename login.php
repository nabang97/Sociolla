<?php require_once('_auth/RedirectIfAuth.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="_action/LoginUser.php" method="post">
      <input type="text" name="username" placeholder="Username"><br>
      <input type="password" name="password" placeholder="Password"><br>
      
      <?php if (isset($_SESSION['flash'])): ?>
        <?= $_SESSION['flash'] ?>
        <?php $_SESSION['flash'] = null ?>
      <?php endif; ?>

      <input type="submit" value="Login">
    </form>
  </body>
</html>
