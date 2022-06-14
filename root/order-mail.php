<?php

  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $phone_number = $_POST['phone-number'];
  $street_adress = $_POST['street-adress'];
  $city = $_POST['city'];
  $region = $_POST['region'];
  $postal_zip_code = $_POST['postal-zip-code'];
  $country = 'Kyrgyzstan';

  if (isset($_POST['order-mail'])) {
    if (mail("aidarbakytbekov2002@gmail.com", "Application for order", "Firts name: ".$first_name."\nLast name ".$last_name."\nPhone number ".$phone_number."\nCountry ".$country."\nRegion ".$region."\nCity ".$city."\nStreet adress ".$street_adress."\nPostal / Zip code ".$postal_zip_code."From: aidarbakytbek2002@mail.ru \r\n")) {
      header('location: ../pages/basket.php');
    }
  }

?>