<?php

/**
 *  class untuk login user dan admin
 */
class AdminController
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
    session_start();
  }

// ------------------- INPUT DATA ------------------//

  function insertBrand($brand_id,$name){
    $stmt = $this->pdo->prepare("INSERT INTO brands SET brand_id=:brand_id, name=:name");
    $stmt->execute(['brand_id' => $brand_id, 'name' => $name]);
    $brands = $stmt->fetch(PDO::FETCH_OBJ);
    return $brands;
  }

  function insertProductType($id_type,$name){
    $stmt = $this->pdo->prepare("INSERT INTO product_types SET id_type=:id_type, name=:name");
    $stmt->execute(['id_type' => $id_type, 'name' => $name]);
    $product_type = $stmt->fetch(PDO::FETCH_OBJ);
    return $product_type;

  }

  function insertSubCategory($id_subcategory,$name,$id_category){
    $stmt = $this->pdo->prepare("INSERT INTO product_subcategories SET id_subcategory=:id_subcategory, name=:name, id_category=:id_category");
    $stmt->execute(['id_subcategory' => $id_subcategory, 'name' => $name, 'id_category'=> $id_category]);
    $stmt->fetch(PDO::FETCH_OBJ);
  }

  function insertCategory($id_category,$name,$id_type){
    $stmt = $this->pdo->prepare("INSERT INTO product_categories SET id_category=:id_category, name=:name, id_type=:id_type");
    $stmt->execute(['id_category' => $id_category, 'name' => $name, 'id_type'=>$id_type]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
  }

  function insertProduct($id,$name,$desc,$brand,$subcategory){
    try {

      $stmt = $this->pdo->prepare("INSERT INTO products
      SET code_product=:id, name=:name, description=:description, brand_id=:brand, id_subcategory=:subcategory ");
      $stmt->execute(['id' => $id, 'name' => $name, 'description'=>$desc, 'brand'=>$brand,'subcategory'=>$subcategory]);
      $user = $stmt->fetch(PDO::FETCH_OBJ);

      $insertDetailProduct = $this->pdo->prepare("INSERT INTO detail_products
      SET id_detail_product=:detailproduct, code_product=:code");
      $insertDetailProduct->execute(['detailproduct'=>$id, 'code'=>$id]);

    } catch (Exception $e) {
      throw $e;
      die('query erro');

    }



  }

  function insertVariantSize($name,$value){
    $stmt = $this->pdo->prepare("INSERT INTO variant_size
    SET name=:name, value=:value ");
    $stmt->execute(['name' => $name, 'value' => $value]);
    $size = $stmt->fetch(PDO::FETCH_OBJ);
  }

  function insertVariantShades($name){
    $stmt = $this->pdo->prepare("INSERT INTO variant_shades
    SET name=:name");
    $stmt->execute(['name' => $name]);
    $size = $stmt->fetch(PDO::FETCH_OBJ);
  }

  function insertVariantColors($name,$value){
    $stmt = $this->pdo->prepare("INSERT INTO variant_colors
    SET name=:name, value=:value ");
    $stmt->execute(['name' => $name, 'value' => $value]);
    $size = $stmt->fetch(PDO::FETCH_OBJ);
  }

  function insertProductVariant($code,$color,$shade,$size,$weight,$disc,$price,$stock,$photo){
    $stmt = $this->pdo->prepare("INSERT INTO detail_variants
    SET id_detail_product=:detailproduct, color_id=:color, shade_id=:shade, size_id=:size, weight_id=:weight, discount=:disc, price=:price, stock=:stock, photo_url=:photo");
    $stmt->execute(['detailproduct'=>$code, 'color'=>$color, 'shade'=>$shade,'size'=>$size,'weight'=>$weight,'disc'=>$disc,'price'=>$price,'stock'=>$stock,'photo'=>$photo]);
    $size = $stmt->fetch(PDO::FETCH_OBJ);
  }

  function insertVariantWeight($name,$value){
    $stmt = $this->pdo->prepare("INSERT INTO variant_weight
    SET name=:name, value=:value ");
    $stmt->execute(['name' => $name, 'value' => $value]);
    $size = $stmt->fetch(PDO::FETCH_OBJ);
  }

  // --------------------GET ALL DATA------------------//
  function showBrand(){
    $stmt = $this->pdo->prepare("SELECT * FROM brands");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $brands = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $brands;
  }

  function showProductTypes(){
    $stmt = $this->pdo->prepare("SELECT * FROM product_types");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $product_types = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $product_types;
  }

  function showProductCategories(){
    $stmt = $this->pdo->prepare("SELECT pc.*, pt.name as tipe_produk FROM product_categories as pc LEFT JOIN product_types as pt ON pc.id_type = pt.id_type");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $product_categories = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $product_categories;
  }
  function showProductSubCategoriesAll(){
    $stmt = $this->pdo->prepare("SELECT ps.*, pc.name as kategori, pt.name as tipe_produk FROM product_subcategories as ps
      LEFT JOIN product_categories as pc ON ps.id_category = pc.id_category
      LEFT JOIN product_types as pt ON pc.id_type = pt.id_type");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $product_subcategories = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $product_subcategories;
  }
  function showProducts(){
    $stmt = $this->pdo->prepare("SELECT p.*, b.name as brand, ps.name as subcategory FROM products as p
      LEFT JOIN brands as b ON p.brand_id = b.brand_id
      LEFT JOIN product_subcategories as ps ON p.id_subcategory = ps.id_subcategory");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $products= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }
  function showVariantColors(){
    $stmt = $this->pdo->prepare("SELECT * FROM variant_colors");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $colors= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $colors;
  }
  function showVariantSizes(){
    $stmt = $this->pdo->prepare("SELECT * FROM variant_size");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $sizes= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $sizes;
  }
  function showVariantShades(){
    $stmt = $this->pdo->prepare("SELECT * FROM variant_shades");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $sizes= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $sizes;
  }
  function showVariantWeights(){
    $stmt = $this->pdo->prepare("SELECT * FROM variant_weight");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $weights= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $weights;
  }
  function showAllProductVariants(){
    $stmt = $this->pdo->prepare(
     "SELECT p.code_product as code, p.name as produk, vs.name as shade, vc.value as color, vw.value as weight, vsz.value  as size, dv.price as price, dv.stock as stock, dv.photo_url as photo
      FROM detail_variants as dv
      LEFT JOIN variant_colors as vc ON dv.color_id = vc.color_id
      LEFT JOIN detail_products as dp ON dv.id_detail_product = dp.id_detail_product
      LEFT JOIN products as p ON dp.code_product = p.code_product
      LEFT JOIN variant_shades as vs ON dv.shade_id=vs.shade_id
      LEFT JOIN variant_weight as vw ON dv.weight_id=vw.weight_id
      LEFT JOIN variant_size as vsz ON dv.size_id=vsz.size_id
    ");
    $stmt->execute();
    $products= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  function showOrders(){
    $stmt = $this->pdo->prepare(
     "SELECT O.*,
      sa.firstname as firstname,
      sa.lastname as lastname,
      sa.subdistrict as kelurahan,
      sa.postal_code as pos,
      sa.address as address,
      sa.phone_number as phone
      FROM orders as O
      LEFT JOIN shipping_address as sa ON O.shipping_address = sa.id_address
      LEFT JOIN users as c ON O.customer = c.email
    ");
    $stmt->execute();
    $orders= $stmt->fetchAll(PDO::FETCH_OBJ);
    return $orders;
  }
// ------------------------GET SELECTED DATA ----------------

  function showSelectedProductCategories($product_type){
    $stmt = $this->pdo->prepare("SELECT * FROM product_categories WHERE id_type=:product_type");
    $stmt->execute(['product_type' => $product_type]);
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $product_categories = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $product_categories;
  }

  function showProductSubCategories($product_category){
    $stmt = $this->pdo->prepare("SELECT * FROM product_subcategories WHERE id_category=:product_category");
    $stmt->execute(['product_category' => $product_category]);
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $product_subcategories = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $product_subcategories;
  }

  function showSelectedProduct($subcategory,$brand){
    $stmt = $this->pdo->prepare("SELECT p.code_product as code, p.name as name FROM products as p WHERE p.id_subcategory=:subcategory AND p.brand_id=:brand");
    $stmt->execute(['subcategory' => $subcategory, 'brand' => $brand]);
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $products = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  function showSelectedOrder($id){
    $stmt = $this->pdo->prepare("SELECT O.*,sa.firstname as firstname,
      sa.lastname as lastname,
      sa.subdistrict as kelurahan,
      sa.postal_code as pos,
      sa.address as address,
      sa.phone_number as phone
      FROM orders as O
      LEFT JOIN shipping_address as sa ON O.shipping_address = sa.id_address
      LEFT JOIN users as c ON O.customer = c.email
      WHERE O.order_number = '".$id."'");
    $stmt->execute();
    $orders = $stmt->fetch(PDO::FETCH_OBJ);
    return $orders;
  }


}
