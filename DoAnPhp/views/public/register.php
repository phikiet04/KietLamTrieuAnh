<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="header">
        <a href="#">
            <img src="./images/logo.png" class="logo" alt="">
        </a>
        <div>
            <ul id="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="shop.html">shop</a>
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
                <li><a class="active" href="login.html">Login</a></li>
                <li><a href="cart.html"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="search.html"><i class="fas fa-search"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <section class="customer__login">
        <div class="container customer">
            <h2> Sign In</h2>
            <form action="../register_submit.php" class="login" method="POST">
                <p class="form__row">
                    <label for="username">
                        Username address 
                        <span class="required">*</span>
                    </label>
                    <input type="text" class="input__text" name="usename" id="usename">
                </p>
                <p class="form__row">
                    <label for="email">
                        email address 
                        <span class="required">*</span>
                    </label>
                    <input type="email" class="input__text" name="email" id="email">
                </p>
                <p class="form__row">
                    <label for="password">
                        Password
                        <span class="required">*</span>
                    </label>
                    <input type="password" class="input__text" name="password" id="password">
                </p>
                <p class="form__row">
                    <label for="password">                   
                       Re-enter the password
                        <span class="required">*</span>
                    </label>
                    <input type="password" class="input__text" name="repassword" id="password">
                </p>
                <p class="form__row">
                    <label class="label__checkbox">
                        <input type="checkbox" class="checkbox" name="rememberme" id="rememberme" value="forever">
                        <span> Remember me </span>
                    </label>
                </p>
                <button class="button submit" type="submit" name="submit" value="Sign In">
                    Sign Up
                </button>
                <div class="form__divider">
                    <span>or</span>
                </div>
                <a href="login.html" class="button border">Sign In</a>
            </form>
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
</body>

</html>