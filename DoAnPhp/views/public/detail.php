<?php
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
                <li><a href="home.html">Home</a></li>
                <li><a class="active" href="shop.html">shop</a>
                    <div class="sub-menu">
                        <a href="#">T-Shirts</a>
                        <a href="#">Shirts</a>
                        <a href="#">Jacket</a>
                        <a href="#">Pants & Shorts</a>
                        <a href="#">Dress</a>
                    </div>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="cart.html"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="search.html"><i class="fas fa-search"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>

            </div>
        </div>
        <div class="single-pro-details">
            <img src="images/products/f1.jpg" width="100%" id="MainImg" alt="">
            <h6>Home / T-Shirt</h6>
            <h3>Men's Fashion T Shirt</h3>
            <h2>$139.00</h2>
            <select>
                <option>Select Size</option>
                <option>Xl</option>
                <option>XXl</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. sq. yd. fabric constructed from 100% cotton, t
                his classic fit preshrunk jersey knit provides unmatched comfort with each wear. 
                Featuring a taped and shoulder, and a seamless double-needle collar, and available in a ram 
                of colors, it offers it all in the ultimate head-turning package.</span>
        </div>

    </section>
    <section id="cart" class="section-p1" value>
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <!-- <input type="hidden" id="productId" value="1" />
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td><span>$118.19</span></td>
                    <td><input type="number" value="1"></td>
                    <td>$118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="images/products/n1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.19</td>
                </tr> -->

            </tbody>
        </table>
    </section>


    <section id="products1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design </p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="images/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" onclick="addToCart()"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='detail.html';">
                <img src="images/products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" onclick="addToCart()"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='detail.html';">
                <img src="images/products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" onclick="addToCart()"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='detail.html';">
                <img src="images/products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" onclick="addToCart()"><i class="fas fa-shopping-cart"></i></a>
            </div>
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
            <a href="about.html">About us</a>
            <a href="">Delivery Information</a>
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
            <a href="">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="login.html">Sigh In</a>
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
    <script>
        var MainImg = document.getElementById("MainImg")
        var smallimg = document.getElementsByClassName("small-img")

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>



    <script src="js/addtocart.js"></script>
</body>

</html>