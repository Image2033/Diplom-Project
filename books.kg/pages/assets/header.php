<header class="header">

    <div class="header-1">

        <a href="/" class="logo"> <i class="fas fa-book"></i> books.kg </a>


        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="../pages/basket.php" class="fas fa-shopping-cart total-basket">
                <?php

                    $amount = mysqli_query($connect, "SELECT COUNT(*) as `amount` FROM `basket`");

                    if (mysqli_num_rows($amount) > 0):
                        while ($amt = mysqli_fetch_assoc($amount)):
                ?>
                <span class="basket-total"><?php echo $amt['amount']?></span>
                <?php endwhile; endif;?>
            </a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>
