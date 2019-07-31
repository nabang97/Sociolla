<?php

require_once('../_controller/LoginController.php');

$login = new LoginController();
$login->loginUser($_POST['username'], $_POST['password']);
