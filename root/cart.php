<?php
  require_once 'connect.php';

  $best_id = $_POST['best-id'];
  $best_name = $_POST['best-name'];
  $best_price = $_POST['best-price'];
  $best_price_discount = $_POST['best-price-discount'];

  if (isset($_POST['submit'])) {
    mysqli_query($connect, "INSERT INTO `basket`(`book_name`, `book_price`, `basket_id`) VALUES('$best_name', '$best_price', '$best_id')");
    header('location: ../pages/basket.php?add='.$best_id);
    header('location: ../');
  }
?>