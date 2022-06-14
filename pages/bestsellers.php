<?php
  require_once '../root/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>books.kg - Bestsellers</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script type="text/javascript" src="<?php include_once 'js/jquery-3.6.0.js'?>"></script>

    <!-- custom css file link  -->
  <style>
    <?php include_once '../css/style.css'?>
  </style>
</head>
<body>
  
<?php require_once '../pages/assets/header.php'?>

<div class="header-2">
        <nav class="navbar">
          <div style="font-size: 25px; color: #fff; padding: 5px">Bestsellers</div>
        </nav>
    </div>

</header>

<div class="bestsellers">
  <div class="bestseller-wrapper">
    <div class="bestseller-content">
      <?php
      
        $bestsellers = mysqli_query($connect, "SELECT * FROM `bestsellers` WHERE `best_id` = ".$_GET['id']);

        while ($bstr = mysqli_fetch_assoc($bestsellers)) {
          ?>
          <form action="../root/cart.php?add=<?php echo $bstr['best_id']?>" method="post">
          <input type="hidden" name="best-id" value="<?php echo $bstr['best_id']?>">
            <div class="bestsellers-content-image"><img src="../<?php echo $bstr['best_image']?>" alt=""></div>
            <div class="bestsellers-content-content">
            <input type="hidden" name="best-name" value="<?echo $bstr['best_name']?>">
              <div class="bestsellers-content-title"><h1><?php echo $bstr['best_name']?></h1></div>
              <div class="bestsellers-content-price">
              <input type="hidden" name="best-price" value="<?echo $bstr['best_price']?>">
              <p>
                  <?php
                    if($bstr['book_price_discount'] !== null) {
                      ?>
                        <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bstr['best_price']?> KGS</s>
                      <?
                      echo $bstr['book_price_discount'];
                    } else {
                      echo $bstr['best_price'];
                    }
                  ?>
                  KGS
                </p>
              </div>
              <div class="books-content-stock"><p><i class="fas fa-check" style="margin-right: 5px; margin-bottom: 30px; color: #27ae60"></i>in stock</p></div>
                <button type="submit" name="submit" class="btn">add to cart</button>
              </form>
            </div>
          <?php
        }
      
      ?>
    </div>
  </div>
</div>

<?php require_once 'assets/footer.php'?>

<!-- footer section ends -->

<!-- loader  -->

<!-- <div class="loader-container">
  <img src="image/loader-img.gif" alt="">
</div> -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>