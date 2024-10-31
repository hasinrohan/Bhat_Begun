<?php
require_once("config/db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Bhat Begun by Strangers</title>

    <link rel="icon" type="images/icon" href="Images/basket.png">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- linking css with html -->
     <link rel="stylesheet" href="style.css">
     
<!--swiper from cdn, swiperjs.com-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>




     <!--for the media query in css, meta from w3schools-->
     <!--content gets resized with device, initial scale is zoom at 100%-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    
<!-- header -->
 <header class="header">
    <!--basket logo from font awesome icons-->
    <a href="#" class="logo"> <i class="fa fa-shopping-basket" aria-hidden="true"></i> bhat begun
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <!--div is used to contain images or other decorating objects-->
    <div class="icons">
        <!--puts header icons on far right with space between alignment-->
        <div class="fa fa-bars" id="menu-btn"></div>
        <div class="fa fa-search" id="search-btn"></div>
        <div class="fa fa-shopping-cart" id="cart-btn"></div>
        <div class="fa fa-user" id="login-btn"></div>
    </div>

<!--form used to create search button or logins-->
    <form class="search-form">
        <!--seach box created with a icon as label-->
        <input type="search" id="search-box" placeholder="Search Here ....">
        <label for="search-box" class="fa fa-search"></label>
    </form>
       
    
    <!--cart section-->
    <!--images with adjustments-->
    <div class="shopping-cart">
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="Images/potato.png" width="120" height="100">
            <div class="content">
                <h3>potato</h3>
                <span class="price">৳50/-</span>
                <span class="quantity">Qty: 1</span>
            </div>
        </div>

<!--other items in cart-->
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="Images/chicken.png" width="120" height="100">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">৳350/-</span>
                <span class="quantity">Qty: 1</span>
            </div>
        </div>

        
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="Images/watermelon.jpg" width="120" height="100">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">৳350/-</span>
                <span class="quantity">Qty: 1</span>
            </div>
        </div>

    <div class="total"> total: ৳750/- </div>
    <a href="#" class="btn"> Checkout </a>
    </div>

    <!--login section-->
    <form action="#" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="Your email" class="box">
        <input type="password" placeholder="Your password" class="box">

        <p>Password Forgotten! <a href="#"> Click Here </a> </p>
        <p>Don't have an Account! <a href="#"> Create Now </a> </p>

        <input type="submit" value="Login Now" class="btn">
    </form>

 </header>


 <!--banner section-->
 <section class="home" id="home">
    <div class="content">
        <h3>Fresh and <span>Organic</span> Products for You</h3>
        <p>This website is designed by Strangers, to get easy access online grocery more popular</p>
        <a href="#" class="btn">shop now</a>
    </div>
 </section>



 <!--features section-->
<section class="features" id="features">
    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">
        <div class="box">
            <img src="Images/fresh picked.jpg" alt="">
            <h3>fresh and organic</h3>

            <p>Our products come fresh from being picked</p>
            
            <a href="#" class="btn">read more</a>
        </div>
<!--images 2 and 3-->
        <div class="box">
            <img src="Images/free delivery.jpg" alt="">
            <h3>free delivery</h3>

            <p>Delivery without any added expense</p>
            
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="Images/easy-payment.jpg" alt="">
            <h3>easy payment</h3>

            <p>Payments possible through any platforms</p>
            
            <a href="#" class="btn">read more</a>
        </div>
    </div>
</section>


<!--products section-->
<!--swiper prefix added for swiper references from swiperjs-->
<section class="products" id="products">
    <h1 class="heading"> popular <span>products</span></h1>

    
    <div class="swiper product-slider">

        <div class="swiper-wrapper">
        <?php
        while ($row = mysqli_fetch_assoc($product_result)){
        ?>
            <div class="swiper-slide box">
            <img src="Images/oranges.png" alt="">
            <h1><?php echo $row['name'] ?></h1>
            <div class="price"> <?php echo $row['price'] ?> </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            
            <a href="" class="btn">add to cart</a>
        </div>
        <?php }?>

</section>


<!--categories section-->
<section class="categories" id="categories">
    <h1 class="heading"> product <span>categories</span></h1>

    <div class="box-container">

    <?php 
    while ($row = mysqli_fetch_assoc($categories_result)){
        ?>
        <div class="box">
            <img src="<?php echo $row['images'] ?>" >
            <h3><?php echo $row['category_name'] ?> </h3>
            <p>upto 20% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <?php }?>

     
    </div>

</section>

<!--Review Section-->
<section class="review" id="review">
    <h1 class="heading"> customer <span>reviews</span></h1>

    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="Images/Anisur Rahman.webp" alt="">
                <p>Their product is really good</p>
                <h3>anisur rahman</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="Images/Nazmul Shakib.jpg" alt="">
                <p>really friendly user interface</p>
                <h3>Nazmul Shakib</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="Images/Maliha Maisha.jpg" alt="">
                <p>Satisfied with their delivery</p>
                <h3>Maliha Maisha</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="Images/Arif Khan.jpg" alt="">
                <p>valo</p>
                <h3>Arif Khan</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Blogs section-->
<section class="blogs" id="blogs">
    <h1 class="heading"> Our <span>Blogs</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="Images/Alur Dom.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"></i> By Sumiya </a>
                    <a href="#"><i class="fa fa-calendar"></i> 02.07.2024 </a>
                </div>
                <h3>alur dom recipe</h3>
                <p>Although there are different ways to prepare this dish
                     made of potatoes, it continues to be a hit in the regular
                     Bengali household. If there is nothing else in the house,
                    potatoes always come to the rescue. The dish can be 
                    incorporated with many different spices and prepared 
                    in many different ways. It is most commonly eaten with 
                    Luchi, another Bengali delicacy.</p>
                    
                    <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/Ilish macher jhol.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"></i> By Sumiya </a>
                    <a href="#"><i class="fa fa-calendar"></i> 02.10.2024 </a>
                </div>
                <h3>ilish macher jhol recipe</h3>
                <p>AOne of the much-favoured fishes in the region, Hilsa or ilish fish curry is something that you have got to try your hands on. The pungent smelling curry prepared with Nigella seeds and chilli to give it the required balance that makes it so perfect. You have got to try this one as it one of the staple food of West Bengal</p>
                    
                    <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/kosha magsho.webp" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"></i> By Sumiya </a>
                    <a href="#"><i class="fa fa-calendar"></i> 08.07.2024 </a>
                </div>
                <h3>kosha mangsho recipe</h3>
                <p>This dish of mutton with some thick curry is high on spices and richness. This dish is made with mutton and spices such as cloves, cinnamon, onion and garlic are used. This excellent recipe is full of the aroma and sweetness that is surely going to trigger your taste buds.</p>
                    
                    <a href="#" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>

<!--footer section-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> Bhat begun <i class="fa fa-shopping-basket"></i></h3>
            <p>Follow us in social media</p>
            <div class="share">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-whatsapp"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <h3> Contact info </h3>
            <a href="#" class="links"> <i class="fa fa-phone"></i> 01718290345 </a>
            <a href="#" class="links"> <i class="fa fa-phone"></i> 01515230145 </a>
            <a href="#" class="links"> <i class="fa fa-envelope"></i> hasinur.rohan@gmail.com </a>
            <a href="#" class="links"> <i class="fa fa-map-marker"></i> Dhaka, Bangladesh </a>
        </div>
        
                <div class="box">
            <h3> Quick Access </h3>
            <a href="#" class="links"> <i class="fa fa-arrow-right"></i> Home </a>
            <a href="#" class="links"> <i class="fa fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fa fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fa fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fa fa-arrow-right"></i> reviews </a>
            <a href="#" class="links"> <i class="fa fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3> Get Updated </h3>
            <p>Sign up for the latest updates</p>
            <input type="email" placeholder="Your Email" class="email">
            <input type="submit" value="Sign Up" class="btn">
        </div>

    </div>

    <div class="credit"> Created by <span>Team Strangers</span></div>

</section>

<!--script from swiperjs.com-->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="script.js"></script>
</body>
</html>
