<?php

  require_once 'connect.php';

  $basket_id = $_POST['basket-id'];

  if (isset($_POST['del-cart'])) {
    mysqli_query($connect, "DELETE FROM `basket` WHERE basket_id = ".$basket_id);
    header('location: ../pages/basket.php');
  }

  if (isset($_POST['clear-basket'])) {
    mysqli_query($connect, "DELETE FROM `basket`");
    header('location: ../pages/basket.php');
  }

?>