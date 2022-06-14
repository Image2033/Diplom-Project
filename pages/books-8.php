<?php
  require_once '../root/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>books.kg - Books 8th grade</title>
  <link rel="stylesheet" href="../css/swiper.css" />

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

    <div class="header-2" style="padding: 5px">
        <nav class="navbar">
            <div style="font-size: 25px; color: #fff;">Books 8th grade</div>
        </nav>
    </div>

</header>

<div class="books">
  <div class="books-wrapper">
    <div class="books-content">
      <?php
      
        $books = mysqli_query($connect, "SELECT * FROM `books_8` WHERE `book_id` = ".$_GET['id']);

        while ($bks = mysqli_fetch_assoc($books)) {
          ?>
          <div class="books-content-image"><img src="../<?php echo $bks['book_image']?>" alt=""></div>
            <div class="books-content-content">
              <div class="books-content-title"><h1><?php echo $bks['book_name']?></h1></div>
              <div class="books-content-price">
              <p>
                  <?php
                    if($bks['book_price_discount'] !== null) {
                      ?>
                        <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks['book_price']?> KGS</s>
                      <?
                      echo $bks['book_price_discount'];
                    } else {
                      echo $bks['book_price'];
                    }
                  ?>
                  KGS
                </p>
              </div>
              <div class="books-content-stock"><p><i class="fas fa-check" style="margin-right: 5px"></i>in stock</p></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <a href="#" class="btn">add to cart</a>
          </div>
          <?php
        }
      
      ?>
    </div>
  </div>
</div>

<section class="arrivals" id="arrivals">

  <h1 class="heading"> <span>Library</span> </h1>
  <div class="contribution">
      <div class="contribution-wrapper">
          <div class="contribution-content__button">
              <div>8th grade</div>
          </div>
      </div>
  </div>

  <div class="swiper arrivals-slider">

      <div class="swiper-wrapper">
      <?php 
              
          $books_8_query = mysqli_query($connect, "SELECT * FROM `books_8`");

          while ($bks_8 = mysqli_fetch_assoc($books_8_query)) {
              ?>
                  
                  <a href="books-6.php?id=<?php echo $bks_8['book_id']?>" class="swiper-slide box" style="width: 410px;">
                  <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_8['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_8['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_8['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_8['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<?echo $bks_8['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                      <div class="image">
                          <img src="../<?php echo $bks_8['book_image']?>" alt="">
                      </div>
                      <div class="content">
                          <h3><?php echo $bks_8['book_name']?></h3>
                          <div class="price"><?php echo $bks_8['book_price']?> KGS</div>
                          <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                          </div>
                      </div>
                  </a>
                  
              <?php
          }
      ?>
      </div>
  </div>
</section>

<?php require_once 'assets/footer.php'?>

<!-- footer section ends -->

<!-- loader  -->

<!-- <div class="loader-container">
  <img src="image/loader-img.gif" alt="">
</div> -->

<script src="../js/swiper.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>
<script type="text/javascript">

var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 7,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});


</script>

</body>
</html>