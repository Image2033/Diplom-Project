<?php
  
  $localhost = 'localhost';
  $login = 'root';
  $DB = 'books_kg';

  $connect = mysqli_connect($localhost, $login, '', $DB);

  if ($connect == false) {
    echo mysqli_connect_error();
  }
  
?>