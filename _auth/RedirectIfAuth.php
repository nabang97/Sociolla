<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SESSION['auth'])) {
  echo '<script type="text/javascript">window.location.replace("index.php");</script>';
}
?>
