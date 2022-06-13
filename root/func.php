<?php

  session_start();
  require_once 'connect.php';
  require_once 'cart.php';

  function get_product(int $id):array|false {
    global $connect;

    $stmt = $connect->prepare("SELECT * FROM `bestsellers` WHERE `best_id` = ".$_GET['b_id']);
    $stmt->execute([$id]);
    return $stmt->fetch();
  }

  function add_to_cart($product):void {
    if (isset($_SESSION['cart'][$product['b_id']])) {
      $_SESSION['cart'][$product['b_id']]['qty'] += 1;
    } else {
      $_SESSION['cart'][$product['b_id']] = [
        'title' => $product['best_name'],
        'slug' => $product['slug'],
        'price' => $product['best_price'],
        'qty' => 1,
        'img' => $product['best_image']
      ];
    }

    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++ $_SESSION['cart.qty'] : 1;
    $_SESSION['cart.qty'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];

  }


?>