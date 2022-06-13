<?php
    require_once 'root/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books.kg</title>

    <link rel="stylesheet" href="css/swiper.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        <?php include_once 'css/style.css'?>
    </style>

</head>
<body>
    
<!-- header section starts  -->

<?php require_once 'pages/assets/header.php'?>

<div class="header-2">
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#bestsellers">Bestsellers</a>
            <a href="#library"> Library</a>
            <a href="#reviews">Reviews</a>
            <a href="#blogs">Blogs</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Up to 75% off</h3>
            <p>Hurry up to buy goods at a special price! To check availability, click on a product!</p>
            <a href="#library" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <?php
                    $books_lists_query = mysqli_query($connect, "SELECT * FROM `books_lists`");

                    while ($bks_lst = mysqli_fetch_assoc($books_lists_query)) {
                        ?>
                            <a href="#library" class="swiper-slide"><img src="<?php echo $bks_lst['book_image']?>" alt=""></a>
                        <?php
                    }
                ?>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over $100</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100 secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days returns</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="bestsellers">

    <h1 class="heading"> <span>Bestsellers</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
        <?php
            $bestseller_query = mysqli_query($connect, "SELECT * FROM `bestsellers`");

            while ($bstr = mysqli_fetch_assoc($bestseller_query)) {
                ?>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="<?php echo $bstr['best_image']?>" class="fas fa-search" target="_blank"></a>
                            <a href="pages/bestsellers.php?id=<?php echo $bstr['best_id']?>" class="fas fa-eye"></a>
                        </div>
                        <form action="root/cart.php?add=<?php echo $bstr['best_id']?>" method="post">
                        <input type="hidden" name="best-id" value="<?php echo $bstr['best_id']?>">
                        <div class="image">
                            <img src="<?php echo $bstr['best_image']?>" alt="">
                        </div>
                        <div class="content">
                            <input type="hidden" name="best-name" value="<?echo $bstr['best_name']?>">
                            <h3><?php echo $bstr['best_name']?></h3>
                            <input type="hidden" name="best-price" value="<?echo $bstr['best_price']?>">
                            <input type="hidden" name="best-price-discount" value="<? echo $bstr['book_price_discount']?>">
                            <div class="price">
                            <p>
                                <?php
                                    if($bstr['book_price_discount'] !== null) {
                                    ?>
                                        <s style="color: #666; font-size: 15px; text-decoration: line-through; display: block"><?php echo $bstr['best_price']?> KGS</s>
                                    <?
                                        echo $bstr['book_price_discount'];
                                    } else {
                                        echo $bstr['best_price'];
                                    }
                                ?>
                                KGS
                                </p>
                            </div>
                                <button type="submit" name="submit" class="btn">add to cart</button>
                            </form>
                        </div>
                    </div>
                <?php
            }
        ?>


        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>




<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>



<!-- newsletter section ends -->

<!-- arrivals section starts  -->



<section class="arrivals" id="library">

    <h1 class="heading"> <span>Library</span> </h1>
    <div class="contribution">
        <div class="contribution-wrapper">
            <div class="contribution-content__button">
                <div>5th grade</div>
            </div>
        </div>
    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">
        <?php 
                
            $books_5_query = mysqli_query($connect, "SELECT * FROM `books_5`");

            while ($bks_5 = mysqli_fetch_assoc($books_5_query)) {
                ?>
                    
                    <a href="pages/books-5.php?id=<?php echo $bks_5['book_id']?>" class="swiper-slide box">
                    <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_5['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_5['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_5['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_5['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<? echo $bks_5['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                        <div class="image">
                            <img src="<?php echo $bks_5['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_5['book_name']?></h3>
                            <div class="price">
                                <?php
                                    if($bks_5['book_price_discount'] !== null) {
                                    ?>
                                        <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_5['book_price']?> KGS</s>
                                    <?
                                        echo $bks_5['book_price_discount'];
                                    } else {
                                        echo $bks_5['book_price'];
                                    }
                                ?>
                                KGS
                            </div>
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

    <div class="contribution">
        <div class="contribution-wrapper">
            <div class="contribution-content__button">
                <div>6th grade</div>
            </div>
        </div>
    </div>
    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
        <?php

            $books_6_query = mysqli_query($connect, "SELECT * FROM `books_6`");

            while ($bks_6 = mysqli_fetch_assoc($books_6_query)) {
                ?>
                
                    <a href="pages/books-6.php?id=<?php echo $bks_6['book_id']?>" class="swiper-slide box">
                    <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_6['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_6['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_6['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_6['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<?echo $bks_6['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                        <div class="image">
                            <img src="<?php echo $bks_6['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_6['book_name']?></h3>
                            <div class="price">
                            <?php
                                if($bks_6['book_price_discount'] !== null) {
                                ?>
                                    <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_6['book_price']?> KGS</s>
                                <?
                                    echo $bks_6['book_price_discount'];
                                } else {
                                    echo $bks_6['book_price'];
                                }
                                ?>
                                KGS
                            </div>
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

    <div class="contribution">
        <div class="contribution-wrapper">
            <div class="contribution-content__button">
                <div>7th grade</div>
            </div>
        </div>
    </div>
    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">

        <?php 
        
            $books_7_query = mysqli_query($connect, "SELECT * FROM `books_7`");

            while ($bks_7 = mysqli_fetch_assoc($books_7_query)) {
                ?>
                    <a href="pages/books-7.php?id=<?php echo $bks_7['book_id']?>" class="swiper-slide box">
                    <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_7['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_7['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_7['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_7['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<?echo $bks_7['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                        <div class="image">
                            <img src="<?php echo $bks_7['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_7['book_name']?></h3>
                            <div class="price">
                            <?php
                                if($bks_7['book_price_discount'] !== null) {
                                ?>
                                    <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_7['book_price']?> KGS</s>
                                <?
                                    echo $bks_7['book_price_discount'];
                                } else {
                                    echo $bks_7['book_price'];
                                }
                                ?>
                                KGS
                            </div>
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
                    <a href="pages/books-8.php?id=<?php echo $bks_8['book_id']?>" class="swiper-slide box">
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
                            <img src="<?php echo $bks_8['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_8['book_name']?></h3>
                            <div class="price">
                            <?php
                                if($bks_8['book_price_discount'] !== null) {
                                ?>
                                    <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_8['book_price']?> KGS</s>
                                <?
                                    echo $bks_8['book_price_discount'];
                                } else {
                                    echo $bks_8['book_price'];
                                }
                                ?>
                                KGS
                            </div>
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
    <div class="contribution">
        <div class="contribution-wrapper">
            <div class="contribution-content__button">
                <div>9th grade</div>
            </div>
        </div>
    </div>

    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">

        <?php
        
            $books_9_query = mysqli_query($connect, "SELECT * FROM `books_9`");
            
            while ($bks_9 = mysqli_fetch_assoc($books_9_query)) {
                ?>
                    <a href="pages/books-9.php?id=<?php echo $bks_9['book_id']?>" class="swiper-slide box">
                    <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_9['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_9['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_9['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_9['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<?echo $bks_9['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                        <div class="image">
                            <img src="<?php echo $bks_9['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_9['book_name']?></h3>
                            <div class="price">
                            <?php
                                if($bks_9['book_price_discount'] !== null) {
                                ?>
                                    <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_9['book_price']?> KGS</s>
                                <?
                                    echo $bks_9['book_price_discount'];
                                } else {
                                    echo $bks_9['book_price'];
                                }
                                ?>
                                KGS
                            </div>
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

    <div class="contribution">
        <div class="contribution-wrapper">
            <div class="contribution-content__button">
                <div>10th grade</div>
            </div>
        </div>
    </div>
    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">

        <?php
        
            $books_10_query = mysqli_query($connect, "SELECT * FROM `books_10`");
            
            while ($bks_10 = mysqli_fetch_assoc($books_10_query)) {
                ?>
                    <a href="pages/books-10.php?id=<?php echo $bks_10['book_id']?>" class="swiper-slide box">
                    <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_10['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_10['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_10['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_10['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<?echo $bks_10['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                        <div class="image">
                            <img src="<?php echo $bks_10['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_10['book_name']?></h3>
                            <div class="price">
                            <?php
                                if($bks_10['book_price_discount'] !== null) {
                                ?>
                                    <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_10['book_price']?> KGS</s>
                                <?
                                    echo $bks_10['book_price_discount'];
                                } else {
                                    echo $bks_10['book_price'];
                                }
                                ?>
                                KGS
                            </div>
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

    <div class="contribution">
        <div class="contribution-wrapper">
            <div class="contribution-content__button">
                <div>11th grade</div>
            </div>
        </div>
    </div>
    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">

        <?php
        
            $books_11_query = mysqli_query($connect, "SELECT * FROM `books_11`");
            
            while ($bks_11 = mysqli_fetch_assoc($books_11_query)) {
                ?>
                    <a href="pages/books-11.php?id=<?php echo $bks_11['book_id']?>" class="swiper-slide box">
                    <div class="book-add-form">
                        <form action="root/cart.php?add=<?php echo $bks_11['book_id']?>" method="post">
                            <input type="hidden" name="best-id" value="<?php echo $bks_11['book_id']?>">
                            <input type="hidden" name="best-name" value="<?php echo $bks_11['book_name']?>">
                            <input type="hidden" name="best-price" value="<?php echo $bks_11['book_price']?>">
                            <input type="hidden" name="best-price-discount" value="<?echo $bks_11['book_price_discount']?>">
                            <button type="submit" name="submit" class="book-add-to-cart"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                        <div class="image">
                            <img src="<?php echo $bks_11['book_image']?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $bks_11['book_name']?></h3>
                            <div class="price">
                            <?php
                                if($bks_11['book_price_discount'] !== null) {
                                ?>
                                    <s style="color: #666; font-size: 18px; text-decoration: line-through; display: block"><?php echo $bks_11['book_price']?> KGS</s>
                                <?
                                    echo $bks_11['book_price_discount'];
                                } else {
                                    echo $bks_11['book_price'];
                                }
                                ?>
                                KGS
                            </div>
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

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>deal of the day</h3>
        <h1>Up to 50% off</h1>
        <a href="pages/bestsellers.php?id=3" class="btn">shop now</a>
    </div>

    <div class="image" style="flex:1 1 10rem;">
        <a href="pages/bestsellers.php?id=3"><img style="width: 300px;" src="image/books/bestsellers/bestseller-4.jpg" alt=""></a>
    </div>
</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>Our blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box" style="height: 412px;">
                <div class="image">
                    <img src="image/blogs/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Expansion in progress</h3>
                    <p>In the future, it is planned to open branches in all regions of Kyrgyzstan</p>
                </div>
            </div>

            <div class="swiper-slide box" style="height: 412px;">
                <div class="image">
                    <img src="image/blogs/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>On a note</h3>
                    <p>When reading for a long time, the muscles tense up, which causes fatigue.</p>
                </div>
            </div>

            <div class="swiper-slide box" style="height: 412px;">
                <div class="image">
                    <img src="image/blogs/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Interesting Facts</h3>
                    <p>  It turned out that the total number of books on Earth is 129,864,880. The so-called Priss papyrus is considered the most ancient book on Earth.</p>
                </div>
            </div>

            <div class="swiper-slide box" style="height: 412px;">
                <div class="image">
                    <img src="image/blogs/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>State of books of schoolchildren of the Kyrgyz Republic</h3>
                    <p>Textbooks in schools in Kyrgyzstan. Books in terrible condition or missing</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<?php require_once 'pages/assets/footer.php'?>

<!-- footer section ends -->

<!-- loader  -->

<!-- <div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div> -->
















<script src="js/swiper.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
