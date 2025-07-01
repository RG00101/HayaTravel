<?php 

session_start();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
   <section class="header">
    <a href="home.php" class="logo"><img src="./images/logo.png" alt=""></a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>
        <a href="account.php">hello,<?php echo $_SESSION['user_name']; ?></a>
        <a href="logout.php">log out</a><?php }else{ ?>
        <a href="login.php">log in</a><?php } ?>
    </nav>
     
    <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide" Style="background:url(./images/photo_2024-01-07_10-01-29.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel arround the world</h3>
                <a href="package.php" class="btn"> dicover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" Style="background:url(./images/photo_2024-01-07_10-00-20_2.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn"> dicover more</a>
            </div>
        </div>
            <div class="swiper-slide slide" Style="background:url(./images/photo_2024-01-07_10-02-00.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn"> dicover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


   </section>
  
  <section class="services">

    <h1 class="heading-title">our services</h1>

    <div class="box-container">

        

        <div class="box">
            <img src="./images/sign.png" style="hight: 90px;width: 90px;" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="./images/tour-guide.png" style="hight: 90px;width: 90px;" alt="">
            <h3>Tour guide</h3>
        </div>

        <div class="box">
            <img src="./images/trekking.png" style="hight: 90px;width: 90px;" alt="">
            <h3>Trekking</h3>
        </div>

        <div class="box">
            <img src="./images/bonfire.png" style="hight: 90px;width: 90px;" alt="">
            <h3>Bonfire</h3>
        </div>
        
        <div class="box">
            <img src="./images/jeep.png" style="hight: 90px;width: 90px;" alt="">
            <h3>Off road</h3>
        </div>

        <div class="box">
            <img src="./images/tent.png" style="hight: 90px;width: 90px;" alt="">
            <h3>Camping</h3>
        </div>
    </div>

  </section>

<section class="home-about">

        <div class="image">
            <img src="./images/photo_2024-01-07_10-04-39.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Bienvenue chez Haye Travel, votre agence de voyage dédiée à l'exploration exceptionnelle du monde. Chez Haye Travel, nous croyons que chaque voyage devrait être une aventure unique, une escapade inoubliable qui va au-delà des attentes.


            Notre équipe passionnée est là pour vous offrir des expériences de voyage sur mesure, adaptées à vos rêves et à vos aspirations. Que vous cherchiez des destinations exotiques, des aventures culturelles, des escapades romantiques ou des voyages en famille mémorables, Haye Travel est là pour donner vie à vos désirs de voyage.
</p>
            <a href="about.php" class="btn">read more</a>
        </div>

</section>


<section class="home-packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

    <div class="box">
        <div class="image">
            <img src="./images/photo_2024-01-07_10-01-14.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure & tour</h3>
            <p>Ce qui distingue Haye Travel, c'est notre engagement envers le service personnalisé et la qualité exceptionnelle.<br> <br> Nous collaborons avec des partenaires de confiance à travers le monde pour vous garantir des hébergements de premier ordre, des activités captivantes et un service impeccable à chaque étape de votre voyage.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="./images/photo_2024-01-07_10-02-42.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure & tour</h3>
            <p>Laissez-nous vous emmener vers de nouveaux horizons avec Haye Travel, où l'aventure commence dès que vous franchissez nos portes.<br><br> <br> Vivez le monde avec passion et découvrez des expériences de voyage extraordinaires avec Haye Travel.
</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="./images/photo_2024-01-07_10-03-04.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure & tour</h3>
            <p>Explorez les coins les plus reculés du monde, goûtez aux saveurs uniques de différentes cultures, et créez des souvenirs qui dureront toute une vie.<br> <br>  Chez Haye Travel, chaque détail est soigneusement planifié pour que vous puissiez vous détendre et profiter pleinement de chaque moment de votre périple.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
        </div>    
    
    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>

</section>

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Magnam recusandae nemo cumque illo voluptatibus voluptate 
            sapiente dolores tempore sit nulla. Quaerat vitae soluta 
            commodi perferendis a, consequatur voluptates aliquam 
            obcaecati!</p>
            <a href="book.php" class="btn"> book now</a>
    </div>
</section>



















<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick lincks</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> packege</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra lincks</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of user</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 06 55953676</a>
            <a href="#"> <i class="fas fa-envelope"></i> sarl.hayee@gmail.com</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
            <a href="https://www.instagram.com/haye_travel/"> <i class="fab fa-instagram"></i> instagram</a>
        </div>

    </div>
    

</section>





<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./script.js"></script>


</body>
</html>




