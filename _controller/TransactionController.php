<?php

/**
 *
 */
class TransactionController
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

  public function storeToBag($request)
  {
    session_start();
    // Cek dulu table ordernya, apakah punya nilai order_number sebelumnya atau nggak
    $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE customer=:customer AND status=:status");
    $stmt->execute(['customer' => $_SESSION['auth']->email, 'status' => 'Still Shopping']);
    $current = $stmt->fetch(PDO::FETCH_OBJ);

    if ($current) {
      $rand = $current->order_number;
    }else{
      $rand = rand(10000000, 1000000000);
      $stmt = $this->pdo->prepare("INSERT INTO orders SET order_number = :od, customer = :c, shipping_address = :sa");
      $stmt->execute(['od' => $rand, 'c' => $_SESSION['auth']->email, 'sa' => 0]);
      $data = $stmt->fetch();
    }

    // Cek lagi table bag nya, apakah sebelumnya sudah ada barang yg sama atau nggak
    $stmt = $this->pdo->prepare("SELECT * FROM bags WHERE id_detail_product=:idp AND order_number=:od");
    $stmt->execute(['idp' => $request['code'], 'od' => $rand]);
    $current = $stmt->fetch(PDO::FETCH_OBJ);

    if ($current) {
      $stmt = $this->pdo->prepare("UPDATE bags SET quantity=:q WHERE order_number=:od AND id_detail_product=:idp");
      $stmt->execute(['q' => $request['quantity'], 'od' => $current->order_number, 'idp' => $current->id_detail_product]);
      $stmt->fetch(PDO::FETCH_OBJ);
    }else{
      $description = "size:" . $request['size'] . ";shade:" . $request['shade'] . ";weight:" . $request['weight'];
      $stmt = $this->pdo->prepare("INSERT INTO bags SET id_detail_product=:idp, order_number = :od, quantity = :q, subtotal=:st, description=:des");
      $stmt->execute([
        'idp' => $request['code'],
        'od' => $rand,
        'q' => $request['quantity'],
        'st' => $request['price'],
        'des' => $description
      ]);
      $stmt->fetch();
    }

    $count = $stmt = $this->pdo->prepare("SELECT COUNT(*) as count FROM bags WHERE order_number=:od");
    $stmt->execute(['od' => $rand]);
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    return $data->count;
  }

  public function countBag()
  {
    $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE customer=:customer AND status=:status");
    $stmt->execute(['customer' => $_SESSION['auth']->email, 'status' => 'Still Shopping']);
    $current = $stmt->fetch(PDO::FETCH_OBJ);

    if ($current) {
      $count = $stmt = $this->pdo->prepare("SELECT COUNT(*) as count FROM bags WHERE order_number=:od");
      $stmt->execute(['od' => $current->order_number]);
      $data = $stmt->fetch(PDO::FETCH_OBJ);
      return $data->count;
    }else{
      return 0;
    }
  }

  public function getBagItem()
  {
    $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE customer=:customer AND status=:status");
    $stmt->execute(['customer' => $_SESSION['auth']->email, 'status' => 'Still Shopping']);
    $current = $stmt->fetch(PDO::FETCH_OBJ);
    if ($current) {
      $count = $stmt = $this->pdo->prepare(
      "SELECT * FROM bags WHERE bags.order_number = :od");
      $stmt->execute(['od' => $current->order_number]);
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }else{
      return false;
    }
  }

  public function getDetailProductFromBag($id_detail_product)
  {
    $count = $stmt = $this->pdo->prepare(
    "SELECT products.name, brands.name as brand FROM products
    INNER JOIN detail_products ON products.code_product = detail_products.code_product
    INNER JOIN brands ON products.brand_id = brands.brand_id
    WHERE detail_products.id_detail_product = :id");
    $stmt->execute(['id' => $id_detail_product]);
    return $stmt->fetch(PDO::FETCH_OBJ);
  }

  public function getDetailVariantFromBag($id, $size, $shade, $weight)
  {
    $count = $stmt = $this->pdo->prepare(
    "SELECT * FROM detail_variants
    WHERE id_detail_product = :id AND size_id = :size AND shade_id = :shade AND weight_id = :weight");
    $stmt->execute(['id' => $id, 'size' => $size, 'shade' => $shade, 'weight' => $weight]);
    return $stmt->fetch(PDO::FETCH_OBJ);
  }
}
