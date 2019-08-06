<?php require_once('../../_controller/AdminController.php');
require_once('../../_controller/PaymentController.php');


if (isset($_POST['modal-detail'])) {
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $start = new AdminController();
    $orders = $start->showSelectedOrder($id);
    echo json_encode($orders);
    //return $orders;
  }
}
if (isset($_POST['modal-verify-detail'])) {
  if (isset($_POST['id']) && isset($_POST['date'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $start = new PaymentController();
    $payment = $start->showSelectedPayment($id,$date);
    echo json_encode($payment);
    //return $orders;
  }
}
