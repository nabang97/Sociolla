<?php

/**
 *  class untuk login user dan admin
 */
class UserController
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
  }

// ------------------- INPUT DATA ------------------//

  function showAwaitingPayment($user){
    $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE customer = '".$user."' AND status = 'Awaiting Payment Confirmation'");
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $orders;
  }

  function showOrderHistory($user){
    $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE customer = '".$user."'");
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $orders;
  }

  function showDetailProduct($code){
    $stmt = $this->pdo->prepare("SELECT * FROM products WHERE code_product = '".$code."'");
    $stmt->execute();
    $orders = $stmt->fetch(PDO::FETCH_OBJ);
    return $orders;
  }

  function showDetailBrand($id){
    $stmt = $this->pdo->prepare("SELECT * FROM brands WHERE brand_id = '".$id."'");
    $stmt->execute();
    $orders = $stmt->fetch(PDO::FETCH_OBJ);
    return $orders;
  }

  function showDetailShipping($id){
    $stmt = $this->pdo->prepare("SELECT * FROM shipping_address WHERE id_address = ".$id."");
    $stmt->execute();
    $orders = $stmt->fetch(PDO::FETCH_OBJ);
    return $orders;
  }


  function countOrders($id){
    $stmt = $this->pdo->prepare(
     "SELECT COUNT(*) as count FROM bags WHERE order_number = '".$id."'");
    $stmt->execute();
    $count= $stmt->fetch(PDO::FETCH_OBJ);
    return $count;
  }
  function sumOrders($id){
    $stmt = $this->pdo->prepare(
     "SELECT SUM(subtotal) AS total FROM bags WHERE order_number = '".$id."'");
    $stmt->execute();
    $count= $stmt->fetch(PDO::FETCH_OBJ);
    return $count;
  }
  function showBags($id){
    $stmt = $this->pdo->prepare(
     "SELECT * FROM bags as b WHERE b.order_number = '".$id."'" );
    $stmt->execute();
    $bags= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $bags;
  }

  function uploadProof($ordernum,$rekening,$pemilik,$bank,$photo){
    $stmt = $this->pdo->prepare(
     "INSERT INTO payment_confirmation(order_number,account_number,owner_name,bank_transfer,payment_proof) VALUES ('".$ordernum."','".$rekening."','".$pemilik."','".$bank."','".$photo."')");
    $stmt->execute();
    $bags= $stmt->fetch(PDO::FETCH_OBJ);

    $stmt = $this->pdo->prepare("UPDATE orders
    SET status = 'Awaiting Payment Verification'
    WHERE order_number=:order ");
    $stmt->execute(['order'=> $ordernum]);
    $orders = $stmt->fetch(PDO::FETCH_OBJ);
  }

  function showDetailOrder($ordernum,$size,$shade,$weight){
    $stmt = $this->pdo->prepare("SELECT dv.photo_url as photo, vs.value as shade, vsz.value as size, vw.value as weight, vc.value as color, dv.price as price
    FROM detail_variants as dv
    LEFT JOIN variant_shades as vs ON dv.shade_id = vs.shade_id
    LEFT JOIN variant_size as vsz ON dv.size_id = vsz.size_id
    LEFT JOIN variant_weight as vw ON dv.weight_id = vw.weight_id
    LEFT JOIN variant_colors as vc ON dv.color_id = vc.color_id
    LEFT JOIN detail_products as dp ON dv.id_detail_product = dp.id_detail_product
    LEFT JOIN bags as b ON dp.id_detail_product = b.id_detail_product
    WHERE dv.id_detail_product = '".$ordernum."' AND dv.size_id = ".$size." AND dv.shade_id = ".$shade." AND dv.weight_id = ".$weight."");
    $stmt->execute();
    $photo= $stmt->fetch(PDO::FETCH_OBJ);
    return $photo;
  }

  function showPaymentMethod($id){
    $stmt = $this->pdo->prepare("SELECT ps.name as bank, pt.name as method FROM payment_system as ps LEFT JOIN payment_types as pt ON ps.id_types = pt.id_type WHERE ps.id_payment = '".$id."'");
    $stmt->execute();
    $count= $stmt->fetch(PDO::FETCH_OBJ);
    return $count;
  }

}
