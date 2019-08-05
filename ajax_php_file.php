<?php
require_once('_controller/UserController.php');
$start = new UserController();

$bank = $_POST['bank'];
$rekening = $_POST['rekening'];
$pemilik = $_POST['pemilik'];
$order=$_POST['nomor-order'];
var_dump($order);
var_dump($bank);
var_dump($pemilik);
var_dump($rekening);
// die();
if(isset($_FILES["file"]["type"]))
{
  $validextensions = array("jpeg", "jpg", "png");
  $temporary = explode(".", $_FILES["file"]["name"]);
  $file_extension = end($temporary);
  if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
  ) //Approx. 100kb files can be uploaded.
  && in_array($file_extension, $validextensions)) {
    if ($_FILES["file"]["error"] > 0)
  {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
  }
  else
  {
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
    }
    else
    {
      $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
      $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
      move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
      echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
      echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
      echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
      echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
      echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";

      $start->uploadProof($order,$rekening,$pemilik,$bank,$targetPath);
    }
  }
}
  else
  {
  echo "<span id='invalid'>***Invalid file Size or Type***<span>";
  }
}
?>
