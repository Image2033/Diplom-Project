<?php
  session_start();
  require_once '../root/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>books.kg - Basket</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

    <!-- font awesome cdn link  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- custom css file link  -->
  <style>
    <?php include_once '../css/style.css'?>
  </style>
</head>
<body>
  
<?php require_once '../pages/assets/header.php'?>

    <div class="header-2" style="padding: 5px">
        <nav class="navbar">
            <div style="font-size: 25px; color: #fff;">Basket</div>
        </nav>
    </div>

</header>

<div class="basket">
  <div class="basket-wrapper">
    <?php 
        $basket_query = mysqli_query($connect, "SELECT * FROM `basket`");
        $best_query = mysqli_query($connect, "SELECT bestsellers.best_id, bestsellers.best_name, bestsellers.best_image, bestsellers.best_price, bestsellers.book_price_discount FROM `bestsellers` 
                                      INNER JOIN `basket` ON bestsellers.best_id = basket.basket_id WHERE bestsellers.best_name = basket.book_name 
                                      AND bestsellers.best_price = basket.book_price");

        if (mysqli_num_rows($basket_query) > 0) {
          foreach ($best_query as $bstr):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bstr['best_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bstr['best_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bstr['best_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bstr['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bstr['best_price']?> KGS</s>
                  <?
                  echo $bstr['book_price_discount'];
                } else {
                  echo $bstr['best_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_5.book_id, books_5.book_name, books_5.book_image, books_5.book_price, books_5.book_price_discount FROM `books_5` 
                                      INNER JOIN `basket` ON books_5.book_id = basket.basket_id WHERE books_5.book_name = basket.book_name 
                                      AND books_5.book_price = basket.book_price");

          foreach ($books_query as $bks5):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks5['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks5['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks5['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks5['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks5['book_price']?> KGS</s>
                  <?
                  echo $bks5['book_price_discount'];
                } else {
                  echo $bks5['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_6.book_id, books_6.book_name, books_6.book_image, books_6.book_price, books_6.book_price_discount FROM `books_6` 
                                      INNER JOIN `basket` ON books_6.book_id = basket.basket_id WHERE books_6.book_name = basket.book_name 
                                      AND books_6.book_price = basket.book_price");

          foreach ($books_query as $bks6):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks6['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks6['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks6['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks6['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks6['book_price']?> KGS</s>
                  <?
                  echo $bks6['book_price_discount'];
                } else {
                  echo $bks6['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_7.book_id, books_7.book_name, books_7.book_image, books_7.book_price, books_7.book_price_discount FROM `books_7` 
                                      INNER JOIN `basket` ON books_7.book_id = basket.basket_id WHERE books_7.book_name = basket.book_name 
                                      AND books_7.book_price = basket.book_price");

          foreach ($books_query as $bks7):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks7['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks7['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks7['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks7['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks7['book_price']?> KGS</s>
                  <?
                  echo $bks7['book_price_discount'];
                } else {
                  echo $bks7['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_8.book_id, books_8.book_name, books_8.book_image, books_8.book_price, books_8.book_price_discount FROM `books_8` 
                                      INNER JOIN `basket` ON books_8.book_id = basket.basket_id WHERE books_8.book_name = basket.book_name 
                                      AND books_8.book_price = basket.book_price");

        foreach ($books_query as $bks8):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks8['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks8['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks8['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks8['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks8['book_price']?> KGS</s>
                  <?
                  echo $bks8['book_price_discount'];
                } else {
                  echo $bks8['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_9.book_id, books_9.book_name, books_9.book_image, books_9.book_price, books_9.book_price_discount FROM `books_9` 
                                      INNER JOIN `basket` ON books_9.book_id = basket.basket_id WHERE books_9.book_name = basket.book_name 
                                      AND books_9.book_price = basket.book_price");

          foreach ($books_query as $bks9):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks9['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks9['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks9['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks9['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks9['book_price']?> KGS</s>
                  <?
                  echo $bks9['book_price_discount'];
                } else {
                  echo $bks9['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_10.book_id, books_10.book_name, books_10.book_image, books_10.book_price, books_10.book_price_discount FROM `books_10` 
                                      INNER JOIN `basket` ON books_10.book_id = basket.basket_id WHERE books_10.book_name = basket.book_name 
                                      AND books_10.book_price = basket.book_price");

          foreach ($books_query as $bks10):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks10['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks10['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks10['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks10['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks10['book_price']?> KGS</s>
                  <?
                  echo $bks10['book_price_discount'];
                } else {
                  echo $bks10['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <?php 
        $books_query = mysqli_query($connect, "SELECT books_11.book_id, books_11.book_name, books_11.book_image, books_11.book_price, books_11.book_price_discount FROM `books_11` 
                                      INNER JOIN `basket` ON books_11.book_id = basket.basket_id WHERE books_11.book_name = basket.book_name 
                                      AND books_11.book_price = basket.book_price");

          foreach ($books_query as $bks11):
      ?>
          <div class="basket-content">
          <form action="../root/del-cart.php" method="post">
          <input type="hidden" name="basket-id" value="<?php echo $bks11['book_id']?>">
            <div class="baket-content-image" style="display: inline-block;"><img src="../<?php echo $bks11['book_image']?>" alt="" class="product-img"></div>
            <div class="basket-content-title"><p><?php echo $bks11['book_name']?></p></div>
            <div class="basket-content-price">
              <p>
              <?php 
                if ($bks11['book_price_discount'] !== null) {
                  ?>
                  <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bks11['book_price']?> KGS</s>
                  <?
                  echo $bks11['book_price_discount'];
                } else {
                  echo $bks11['book_price'];
                }
              ?> 
            KGS</p>
          </div>
            <button type="submit" name="del-cart" class="name"><div class="basket-content-delete"><i class="fal fa-times"></i></div></button>
          </form>    
        </div>
    <?php endforeach;?>

    <div class="basket-content-total">
      <div class="content-total-text">
        <?php 
        
          $total_query = mysqli_query($connect, "SELECT SUM(`book_price`) as `sum` FROM basket");
            while ($total = mysqli_fetch_assoc($total_query)):
        ?>
        <p>Total: <?php 
            echo $total['sum'];
          ?> KGS</p>
        <?php endwhile;?>
        <div class="basket-content-clear">
          <div class="content-clear-button">
            <form action="../root/del-cart.php" method="post">
              <button type="submit" name="clear-basket">Clear all</button>
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="basket-content-submit">
      <div class="content-submit-button" style="text-align: center;">
        <button id="submit-btn">Confirm</button>
      </div>
    </div>
    <?php } else {
      ?>
        <div class="basket-content-text">
          <h2>Nothing yet</h2>
        </div>
      <?php
    }
    ?>
  </div>
</div>

<div class="submit-form-container">

    <div id="close-submit-btn" class="fas fa-times"></div>

    <form action="../root/order-mail.php" method="post">
        <h3>Checkout</h3>
        <div class="content-submit-name" style="margin-bottom: 60px">
          <span>Full Name *</span>
          <div class="content-label">
            <input type="text" name="first-name" required>
            <label>First Name</label>
        </div>
        <div class="content-label">
          <input type="text" name="last-name" required>
          <label>Last Name</label>
        </div>
        </div>
        <div class="content-submit-phone" style="margin-bottom: 40px">
          <span style="margin-right: 62px;">Phone Number *</span>
          <div class="content-label">
            <input type="text" name="phone-number" style="width: 270px;" required>
          </div>
        </div>
        <div class="content-submit-adress" style="margin-bottom: 40px">
          <span style="margin-right: 58px;">Delivery Adress *</span>
          <div class="content-label" style="margin-bottom: 40px">
            <input type="text" name="street-adress" style="width: 407px;" required>
            <label>Street Adress</label>
          </div>
          <div class="content-label" style="display: block; margin-bottom: 40px">
            <input type="text" name="city" style="width: 200px; margin-left: 186px">
            <label style="margin-left: 186px">City</label>
            <input type="text" name="region" style="width: 200px;" required>
            <label style="margin-left: 395px">Region</label>
          </div>
          <div class="content-label">
            <input type="text" name="postal-zip-code" style="margin-left: 186px" required>
            <label style="margin-left: 186px">Postal / Zip Code</label>
            <label style="margin-left: 395px; margin-bottom: 20px"><img src="../image/Flag_of_Kyrgyzstan.png" alt="" style="width: 20px; height: 15px"></label>
            <label style="margin-left: 420px; margin-bottom: 23px; color: #444">Kyrgyzstan</label>
            <label style="margin-left: 395px">Country</label>
          </div>
        </div>
        <div class="content-submit-payment-method" style="margin-bottom: 30px">
          <div class="content-label" style="width: 100%;">
            <span>Payment Method *</span>
            <div class="content-labe-cash">
              <input type="checkbox" style="position: absolute;left: 185px;top: 17px; transform: scale(1.5)">
              <label style="position: absolute; left: 205px;top: 13px;">Сash payment</label>
            </div>
            <div class="content-label-cashless">
              <input type="checkbox" id="check-cashless" style="position: absolute;left: 350px;top: 17px; transform: scale(1.5)">
              <label style="position: absolute; left: 370px;top: 13px;">Сashless payment</label>
            </div>
          </div>
        </div>
        <div class="content-button">
          <button type="submit" name="order-mail">Order</button>
        </div>
        <?php 
        
        $total_query = mysqli_query($connect, "SELECT SUM(`book_price`) as `sum` FROM basket");
        
        while ($total = mysqli_fetch_assoc($total_query)):?>
          <div class="content-submit-total">
            <div class="submit-total-content">
              <p>Total: <?php echo $total['sum']?> KGS</p>
            </div>
          </div>
        <?php endwhile;?>
    </form>

</div>

<div class="cash-form-container">

    <form>
      <div class="cash-content-from">
        <h3>Сashless payment</h3>
        <div class="cash-content-vasa">
          <div class="content-visa-content"><img src="../image/VISA-logo.jpg" alt=""></div>
          <label>Card number</label>
          <input type="text" required>
          <label>Cardholder's Name</label>
          <input type="text" required>
          <div class="content-visa-select" style="position: relative;">
          <label style="position: absolute;">Card expiry date</label>
          <label style="position: absolute; left: 200px;">CVV</label>
            <select>
              <option value="Month">Month</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="1">11</option>
              <option value="12">12</option>
            </select>
            <select style="left: 100px">
              <option value="Year">Year</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2026">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
              <option value="2031">2031</option>
              <option value="2032">2032</option>
              <option value="2033">2033</option>
            </select>
            <input type="text" style="position: absolute; width: 100px; top: 25px; left: 200px" required>
          </div>
        </div>
        <div class="content-button" id="close-cash-btn">Done</div>
      </div>
    </form>

</div>

<?php require_once 'assets/footer.php'?>

<!-- footer section ends -->

<!-- loader  -->

<!-- <div class="loader-container">
  <img src="image/loader-img.gif" alt="">
</div> -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.6.0.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>
<script type="text/javascript">

let submitForm = document.querySelector('.submit-form-container');

document.querySelector('#submit-btn').onclick = () =>{
  submitForm.classList.toggle('active');
}

document.querySelector('#close-submit-btn').onclick = () =>{
  submitForm.classList.remove('active');
}

let cashlessForm = document.querySelector('.cash-form-container');

document.querySelector('#check-cashless').onclick = () =>{
  cashlessForm.classList.toggle('active');
}

document.querySelector('#close-cash-btn').onclick = () =>{
  cashlessForm.classList.remove('active');
}

</script>

</body>
</html>