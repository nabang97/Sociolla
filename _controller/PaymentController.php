<?php

/**
 *  class untuk login user dan admin
 */
class PaymentController
{
  public $pdo;

  public function __construct()
  {
    $host = '127.0.0.1';
    $dbname = 'sociolla';
    $username = 'root';
    $password = '';
    $charset = 'utf8mb4';
    $collate = 'utf8mb4_unicode_ci';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
    ];

    $this->pdo = new PDO($dsn, $username, $password, $options);
    // session_start();
  }
  function showAllPayment(){
    $stmt = $this->pdo->prepare("SELECT * FROM payment_confirmation as pc
    LEFT JOIN orders as o ON pc.order_number = o.order_number
    WHERE o.status = 'Awaiting Payment Verification'");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $payments = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $payments;

  }

  function showSelectedPayment($id,$date){
    $stmt = $this->pdo->prepare("SELECT * FROM payment_confirmation as pc
    LEFT JOIN orders as o ON pc.order_number = o.order_number
    WHERE pc.order_number = '".$id."' AND pc.confirm_date = '".$date."'");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $payments = $stmt->fetch(PDO::FETCH_OBJ);
    return $payments;

  }

}
