<?php

/**
 *  class untuk login user dan admin
 */
class SystemController
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

  function showAllProductVariants(){
    $stmt = $this->pdo->prepare(
     "SELECT
     p.code_product as code,
     p.name as produk,
     b.name as brand,
     dv.shade_id as shade_id, vs.value as shade,
     dv.weight_id as weight_id, vw.value as weight,
     dv.size_id as size_id,vsz.value  as size,
     vs.color_id as color_id,
     dv.price as price,
     dv.stock as stock,
     dv.photo_url as photo
      FROM detail_variants as dv

      LEFT JOIN detail_products as dp ON dv.id_detail_product = dp.id_detail_product
      LEFT JOIN products as p ON dp.code_product = p.code_product
      LEFT JOIN variant_shades as vs ON dv.shade_id=vs.shade_id
      LEFT JOIN variant_colors as vc ON vs.color_id = vc.color_id
      LEFT JOIN variant_weight as vw ON dv.weight_id=vw.weight_id
      LEFT JOIN variant_size as vsz ON dv.size_id=vsz.size_id
      LEFT JOIN brands as b ON p.brand_id = b.brand_id
    ");
    $stmt->execute();
    $products= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  function showSelectedProduct($code){
    $query = $this->pdo->prepare(
     "SELECT
     p.code_product as code,
     p.name as produk,
     b.name as brand,
     dv.shade_id as shade_id, vs.value as shade,
     dv.weight_id as weight_id, vw.value as weight,
     dv.size_id as size_id,vsz.value  as size,
     vs.color_id as color_id, vc.value as color,
     dv.price as price,
     dv.stock as stock,
     dv.photo_url as photo
      FROM detail_variants as dv

      LEFT JOIN detail_products as dp ON dv.id_detail_product = dp.id_detail_product
      LEFT JOIN products as p ON dp.code_product = p.code_product
      LEFT JOIN variant_shades as vs ON dv.shade_id=vs.shade_id
      LEFT JOIN variant_colors as vc ON vs.color_id = vc.color_id
      LEFT JOIN variant_weight as vw ON dv.weight_id=vw.weight_id
      LEFT JOIN variant_size as vsz ON dv.size_id=vsz.size_id
      LEFT JOIN brands as b ON p.brand_id = b.brand_id
      WHERE dv.id_detail_product = '".$code."'");

     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

  function showSelectedProductBrand($code){
    $query = $this->pdo->prepare(
     "SELECT p.name as name, p.description as deskripsi, b.name as brand, b.description as description FROM products as p LEFT JOIN brands as b ON p.brand_id=b.brand_id WHERE p.code_product = '".$code."'");
     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

  function showSelectedvariant($code,$shade,$size,$weight){
    $query = $this->pdo->prepare(
     "SELECT
     p.code_product as code,
     p.name as produk,
     b.name as brand,
     dv.shade_id as shade_id, vs.value as shade,
     dv.weight_id as weight_id, vw.value as weight,
     dv.size_id as size_id,vsz.value  as size,
     vs.color_id as color_id, vc.value as color, vc.name as color_name,
     dv.price as price,
     dv.stock as stock,
     dv.photo_url as photo
      FROM detail_variants as dv

      LEFT JOIN detail_products as dp ON dv.id_detail_product = dp.id_detail_product
      LEFT JOIN products as p ON dp.code_product = p.code_product
      LEFT JOIN variant_shades as vs ON dv.shade_id=vs.shade_id
      LEFT JOIN variant_colors as vc ON vs.color_id = vc.color_id
      LEFT JOIN variant_weight as vw ON dv.weight_id=vw.weight_id
      LEFT JOIN variant_size as vsz ON dv.size_id=vsz.size_id
      LEFT JOIN brands as b ON p.brand_id = b.brand_id
      WHERE dv.id_detail_product = '".$code."' AND dv.shade_id = ".$shade." AND dv.size_id=".$size." AND dv.weight_id=".$weight."");

     $query->execute();
     $products= $query->fetch(PDO::FETCH_OBJ);
     return $products;
  }

  // ---------------------------- Untuk mengambil data varian disini ----------------------------------

  public function getOneDataColor($id)
  {
    $query = $this->pdo->prepare("SELECT * FROM variant_colors WHERE id=:id");
    $query->execute(['id' => $id]);
    $data= $query->fetch(PDO::FETCH_OBJ);
    return $data;
  }
}
