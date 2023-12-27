<?php
 ob_start();
 if(isset($_SESSION['role'])&&($_SESSION['role']==1)){}
 include_once "../../dbconnect.php";
 include_once "../../funcitions.php";
 $categories = showAllCategories();
 $products = showAllProducts();
 include_once "../inclues/header.php";

?>

<body>
    <section class="header">
        <a href="#">
            <img src="./images/logo.png" class="logo" alt="">
        </a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="home.html">Home</a></li>
                <li><a href="shop.php">shop</a>
                    <?php
                        foreach($categories as $cat){
                    ?>
                    <div class="sub-menu " value="<?php echo $cat['id']?>">
                        <a href="#"><?php echo $cat['name']?></a>
                    </div>
                    <?php }?>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="search.php"><i class="fas fa-search"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <section class="hero">
        <h4>trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>save more with coupons& up to 70% off!</p>
        <button>shop now</button>

    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/features/f1.png" alt="">
            <h6>Free Shipping</h6>

        </div>
        <div class="fe-box">
            <img src="images/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f4.png" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <section id="products1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design </p>
        <div class="pro-container">
            <?php
               foreach($products as $cat){
            ?>
            <div class="pro" onclick="window.location.href='detail.php';">
                <form action="cart.php" method="post"></form>
                <img src="<?php echo $cat['image']?>" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5><?php echo $cat['name']?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$<?php echo $cat['price']?></h4>
                </div>
                <a href="#" onclick="addToCart()" id="addtocart"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <?php } ?>
        </div>

    </section>
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span>-All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deal</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learh More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/sumer</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learh More</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
    </section>
    <section id="newseletter" class="section-p1 section-m1">
        <div class="newtext">
            <h4>Sign Up For Newseletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email address">
            <button class="normal">Sign up</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="images/logo.png" alt="">
            <h4>contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco
            </p>
            <p><strong>Phone:</strong>+01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong>10:00-18:00, Mon - Sat</p>
            <div class="follow">
                <h4>follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>

                </div>

            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="">About us</a>
            <a href="">Delivery Information</a>
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
            <a href="">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="">Sigh In</a>
            <a href="">View Cart</a>
            <a href="">My Wishlist</a>
            <a href="">Track My Order</a>
            <a href="">Help</a>
        </div>
        <div class="col intall">
            <h4>Intall App</h4>
            <p>From App Store of Goole Play</p>
            <div class="row">
                <img src="./images/pay/app.jpg" alt="" width="50px">
                <img src="./images/pay/play.jpg" alt="">
            </div>
            <p>Secrured Payment Gateways</p>
            <img src="./images/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>@ 2023, Kiet Lam Anh</p>
        </div>
    </footer>



    <script src="js/category.js"></script>
</body>

</html>