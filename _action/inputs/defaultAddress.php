<?php

require_once('../../_controller/AddressController.php');

$start = new AddressController();
if (isset($_POST['set-default'])) {
  $id = $_POST['id'];
  $user = $_POST['user'];
  $start->setDefaultAddress($id,$user);
}

if (isset($_POST['unset-default'])) {
  $id = $_POST['id'];
  $user = $_POST['user'];
  $start->unsetDefaultAddress($id,$user);
}
?>
