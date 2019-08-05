<?php

/**
 *  class untuk login user dan admin
 */
class AddressController
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

  function showUserAddress($id){
    $query = $this->pdo->prepare("SELECT * FROM shipping_address WHERE customer = '".$id."'");
     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

  function showSubdistrict($id){
    $query = $this->pdo->prepare("SELECT * FROM subdistricts WHERE id_subdistrict = '".$id."'");
     $query->execute();
     $products= $query->fetch(PDO::FETCH_OBJ);
     return $products;
  }
  function showCity($id){
    $query = $this->pdo->prepare("SELECT * FROM cities WHERE city_id= '".$id."'");
     $query->execute();
     $products= $query->fetch(PDO::FETCH_OBJ);
     return $products;
  }
  function showProvince($id){
    $query = $this->pdo->prepare("SELECT * FROM provinces WHERE province_id= '".$id."'");
     $query->execute();
     $products= $query->fetch(PDO::FETCH_OBJ);
     return $products;
  }

  function setDefaultAddress($id,$user){
    $query = $this->pdo->prepare("UPDATE shipping_address SET default_address = 0 WHERE customer ='".$user."'");
    $query->execute();
    $products= $query->fetch(PDO::FETCH_OBJ);

    $set = $this->pdo->prepare("UPDATE shipping_address SET default_address = 1 WHERE id_address ='".$id."'");
    $set->execute();
    $default= $query->fetch(PDO::FETCH_OBJ);
  }

  function unsetDefaultAddress($id,$user){
    $set = $this->pdo->prepare("UPDATE shipping_address SET default_address = 0 WHERE id_address ='".$id."'");
    $set->execute();
    $default= $query->fetch(PDO::FETCH_OBJ);
  }

  function addAddress($id,$user,$firstname,$lastname,$subdistrict,$postal_code,$address,$phone,$title,$default){
    $set = $this->pdo->prepare("INSERT INTO
      shipping_address (customer, firstname, lastname, subdistrict, postal_code, address, phone_number, address_title, default_address) VALUES ('".$user."',
        '".$firstname."',
        '".$lastname."',$subdistrict,$postal_code,'".$address."','".$phone."','".$title."',$default)");
    $set->execute();
    $default= $query->fetch(PDO::FETCH_OBJ);
  }

  function showCountry(){
    $query = $this->pdo->prepare("SELECT * FROM countries");
     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

  function showProvinces($id){
    $query = $this->pdo->prepare("SELECT * FROM provinces WHERE country_id = '".$id."'");
     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

  function showCities($id){
    $query = $this->pdo->prepare("SELECT * FROM cities WHERE province_id = '".$id."'");
     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

  function showSubdistricts($id){
    $query = $this->pdo->prepare("SELECT * FROM subdistricts WHERE id_city = '".$id."'");
     $query->execute();
     $products= $query->fetchAll(PDO::FETCH_OBJ);
     return $products;
  }

}
