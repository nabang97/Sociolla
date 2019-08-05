<?php

require_once('../../_controller/AddressController.php');

$start = new AddressController();

if (isset($_POST['show-provinces'])) {
  $id = $_POST['selected'];
  $provinces = $start->showProvinces($id);
  foreach($provinces as $province){
    echo "<option value='". $province->province_id ."'>". $province->name."</option>";
  }
}

if (isset($_POST['show-cities'])) {
  $id = $_POST['selected'];
  $provinces = $start->showCities($id);
  foreach($provinces as $city){
    echo "<option value='". $city->city_id ."'>". $city->name."</option>";
  }
}

if (isset($_POST['show-subdistrict'])) {
  $id = $_POST['selected'];
  $provinces = $start->showSubdistricts($id);
  foreach($provinces as $city){
    echo "<option value='". $city->id_subdistrict ."'>". $city->name."</option>";
  }
}
?>
