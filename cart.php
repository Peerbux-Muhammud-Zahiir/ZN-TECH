<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ZN TECH</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <section id="header">
            <div class="logo-search"
                <a href="#"><img src="img/ZNlogo-nobg.png" class="logo" alt=""</a>
                <!-- <form class="search-bar">
                    <input type="text" placeholder="Search for products..." id="search-input">
                    <button onclick="searchProducts()"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form> -->


                <form action="search_products.php" method="get">
                  <input type="text" name="query" placeholder="Search for products...">
                  <button type="submit">Search</button>
                </form>


                
            </div>
            <div>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li>  
                        <a href="brands.html">Brands</a>
                        <ul class="dropdown">   
                            <div class="dropdown-content">
                            <a href="apple.html">Apple</a>
                            <a href="asus.html">Asus</a>
                            <a href="dell.html">Dell</a>
                            <a href="google.html">Google</a>
                            <a href="honor.html">Honor</a>
                            <a href="huawei.html">Huawei</a>
                            <a href="nothing.html">Nothing</a>
                            <a href="oneplus.html">OnePlus</a>
                            <a href="oppo.html">Oppo</a>
                            <a href="nothing.html">Nothing</a>
                            <a href="realme.html">Realme</a>
                            <a href="samsung.html">Samsung</a>
                            <a href="xiaomi.html">Xiaomi</a>
                            <a href="lenovo.html">Lenovo</a>
                            </div>
                        </ul>
                    </li>
                    <li>  
                        <a href="#">Categories</a>
                        <ul class="dropdown">   
                            <div class="dropdown-content">
                            <a href="smartphones.html">Smartphones</a>
                            <a href="laptops.html">Laptops</a>
                            <a href="console.html">Consoles & accessories</a>
                            <a href="smartphones.html">Cameras</a>
                            <a href="laptops.html">Home Appliances</a>
                            <a href="console.html">Television & Sound</a>
                            <a href="smartphones.html">Wearables</a>
                            <a href="laptops.html">Computing Accessories</a>
                            </div>
                        </ul>
                    </li>
                   
                    <li><a href="contact.html">Contact</a></li> 
                    <li><a href="about.html">About</a></li>
                    <li><a class="active" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="account.html"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="page-header" class="about-header">
            <div>
            <h2>#contact_us</h2>
            <p>Leave a message. We love to hear from you!</p>
            </div>
        </section>

        <section id="cart" class="section-p1">
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
                    <tr>
                        <td><a href="#"></a><i class="far fa-times-circle"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/ZNlogo-nobg.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address: </strong>Reduit, Mauritius</p>
                <p><strong>Phone: </strong>+230-5708-4622</p>
                <p><strong>Hours: </strong>24/7 online service</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="col"> 
                <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>

            <div class="col"> 
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My wishlist</a>
                <a href="#">Track my order</a>
                <a href="#">Help</a>
            </div>

            <div class="payment">
                <h4>Secured Payment Gateways</h4>
                <img src="img/payment-removebg-preview.png" alt="">
            </div>

            <div class="copyright">
                <p>© 2024 ZN Tech</p>
            </div>

        </footer>
        
        
        <script>
            const swiper = new Swiper('.swiper-container', {
    slidesPerView:8, // Number of products visible in a row
    spaceBetween: 5, // Space between products
    loop: true, // Enables looping
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
   /* autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    }, */
});

        </script>
    </body>
</html>