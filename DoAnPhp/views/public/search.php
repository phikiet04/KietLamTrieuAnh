<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                    </div>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="cart.html"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a class="active" href=""><i class="fas fa-search"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <nav class="navbar navbar-light bg-light p-0">
        <form action="search.html" class="d-flex form-inline" id="search">
            <input name="key" class=" border-secondary form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn border-secondary my-2 my-sm-0" type="submit">     <i class=" fas fa-search text-justify text-primary text-decoration-none"></i></button>
        </form>
    </nav>
    <section id="products1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='detail.html';">
                <img src="images/products/f1.jpg" alt="">
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
                <a href="detail.html"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </section>

    <footer class="section-p1 ">
        <div class="col ">
            <img class="logo " src="images/logo.png " alt=" ">
            <h4>contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco
            </p>
            <p><strong>Phone:</strong>+01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong>10:00-18:00, Mon - Sat</p>
            <div class="follow ">
                <h4>follow us</h4>
                <div class="icon ">
                    <i class="fab fa-facebook-f "></i>
                    <i class="fab fa-twitter "></i>
                    <i class="fab fa-instagram "></i>
                    <i class="fab fa-pinterest "></i>
                    <i class="fab fa-youtube "></i>

                </div>

            </div>
        </div>
        <div class="col ">
            <h4>About</h4>
            <a href=" ">About us</a>
            <a href=" ">Delivery Information</a>
            <a href=" ">Privacy Policy</a>
            <a href=" ">Terms & Conditions</a>
            <a href=" ">Contact Us</a>
        </div>
        <div class="col ">
            <h4>My Account</h4>
            <a href=" ">Sigh In</a>
            <a href=" ">View Cart</a>
            <a href=" ">My Wishlist</a>
            <a href=" ">Track My Order</a>
            <a href=" ">Help</a>
        </div>
        <div class="col intall ">
            <h4>Intall App</h4>
            <p>From App Store of Goole Play</p>
            <div class="row ">
                <img src="./images/pay/app.jpg " alt=" " width="50px ">
                <img src="./images/pay/play.jpg " alt=" ">
            </div>
            <p>Secrured Payment Gateways</p>
            <img src="./images/pay/pay.png " alt=" ">
        </div>
        <div class="copyright ">
            <p>@ 2023, Kiet Lam Anh</p>
        </div>
    </footer>



    <script src="js/search.js "></script>
</body>

</html>