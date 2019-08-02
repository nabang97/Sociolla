<?php require_once('../../_controller/AdminController.php');
  $start = new AdminController();

  if (!empty($_POST['selected'])) {
    $data = $_POST['selected'];
    $categories = $start->showSelectedProductCategories($data);
    foreach($categories as $category){
      echo "<option value='".$category->id_category."'>".$category->name."</option>";
    }
  }else {
    echo "salah";
  }

 ?>
