<?php

/**
 *  class untuk login user dan admin
 */
class LoginController
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

  function loginUser($username, $password)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND password=:pass LIMIT 1");
    $stmt->execute(['email' => $username, 'pass' => md5($password)]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if ($user) {
      $_SESSION['auth'] = $user;
      header('Location: ../index.php');
      exit();
    }else{
      header('Location: ../login.php');
      $_SESSION['flash'] = "Wrong username or password!";
      exit();
    }
  }

  public function logoutUser()
  {
    if(isset($_SESSION['auth'])){
      $_SESSION['auth'] = null;
      header('Location: ../index.php');
      exit();
    }
  }
}
