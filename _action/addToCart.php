<?php

session_start();

addToCart();
// removeCart();
function addToCart()
{
  for ($i=0; $i < 1000; $i++) {
    if (!isset($_SESSION['cart_item'][$i])) {

      $cart = new stdClass();
      $cart->code = $_POST['code'];
      $cart->brand = $_POST['brand'];
      $cart->product = $_POST['product'];
      $cart->price = $_POST['price'];
      $cart->photo = $_POST['photo'];
      $cart->shade = $_POST['shade'];
      $cart->weight = $_POST['weight'];
      $cart->size = $_POST['size'];
      $cart->color = $_POST['color'];
      $cart->url = $_POST['url'];

      $_SESSION['cart_item'][$i] = $cart;
      echo sizeOf($_SESSION['cart_item']);
      break;
    }
  }
}

function removeCart(){
  unset($_SESSION['cart_item']);
}
