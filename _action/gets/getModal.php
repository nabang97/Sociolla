<?php require_once('../../_controller/AdminController.php');


if (isset($_POST['modal-detail'])) {
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $start = new AdminController();
    $orders = $start->showSelectedOrder($id);
    echo $orders->order_number;
    //return $orders;
  }
}
