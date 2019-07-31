<?php

require_once('../_controller/LoginController.php');

$logout = new LoginController();
$logout->logoutUser();
