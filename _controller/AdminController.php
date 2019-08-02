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
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    header('Location: ../admin/input/input_brand.php');
    exit();
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
    header('Location: ../admin/input/input_brand.php');
    exit();
  }

  function insertCategory($id_category,$name,$id_type){
    $stmt = $this->pdo->prepare("INSERT INTO product_categories SET id_category=:id_category, name=:name, id_type=:id_type");
    $stmt->execute(['id_category' => $id_category, 'name' => $name, 'id_type'=>$id_type]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    header('Location: ../../admin/input/category.php');
    exit();
  }

  // --------------------GET ALL DATA------------------//
  function showBrand(){
    $stmt = $this->pdo->prepare("SELECT * FROM brands");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $brands = $stmt->fetchAll();
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
    $product_categories = $stmt->fetchAll();
    return $product_categories;
  }
  function showProductSubCategoriesAll(){
    $stmt = $this->pdo->prepare("SELECT ps.*, pc.name as kategori FROM product_subcategories as ps LEFT JOIN product_categories as pc ON ps.id_category = pc.id_category");
    $stmt->execute();
    // $brands = $stmt->fetch(PDO::FETCH_OBJ);
    $product_subcategories = $stmt->fetchAll();
    return $product_subcategories;
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


}
