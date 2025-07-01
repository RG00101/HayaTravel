<?php 

session_start();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
  <div class="heading" style="background:url(./images/photo_2024-01-07_10-02-00.jpg); background-size: cover;background-position: center;background-attachment: fixed;color: var(--white);">
    <h1>about us</h1>
  </div>
  

  <section class="about">
    <div class="images">
        <img src="./images/290434586_406169438202261_347300005342737757_n.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Ce qui distingue Haya Travel, c'est notre engagement envers le service personnalisé et la qualité exceptionnelle. Nous collaborons avec des partenaires de confiance à travers le monde pour vous garantir des hébergements de premier ordre, des activités captivantes et un service impeccable à chaque étape de votre voyage.
</p>
        <p>Notre équipe passionnée est là pour vous offrir des expériences de voyage sur mesure, adaptées à vos rêves et à vos aspirations. Que vous cherchiez des destinations exotiques, des aventures culturelles, des escapades romantiques ou des voyages en famille mémorables, Haya Travel est là pour donner vie à vos désirs de voyage.</p>
      
        
            <div class="icon-container">
                    <div class="icons">
                            <i class="fas fa-map"></i>
                            <span>top destinations</span>
                    </div>
            

            
                    <div class="icons">
                            <i class="fas fa-hand-holding-usd"></i>
                            <span>affordable price</span>
                    </div>
            

            
                    <div class="icons">
                            <i class="fas fa-headset"></i>
                            <span>24/7 guide service</span>
                    </div>
                    </div>
            

</div>


  </section>



<section class="reviews">

    <h1 class="heading-title">client reviews</h1>

            <div class="swiper reviews-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos nisi veniam adipisci repellat dolore modi error consequatur rem, eveniet molestias eos laboriosam sint quo deleniti hic non perspiciatis sapiente veritatis.</p>
                        <h3>john deo</h3>

                        <span>travler</span>

                        <img src="./images/user.png" alt="">

                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto cumque officiis neque rem dicta laudantium porro aperiam voluptates deserunt qui tenetur vitae quae impedit incidunt hic veniam molestias, quibusdam fuga accusantium. Minus voluptatem natus ex deleniti? Accusamus quidem facilis voluptatem?</p>
                        <h3>john deo</h3>
                        <span>travler</span>
                        <img src="./images/user.png" alt="">
                    </div>

                    
                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos nisi veniam adipisci repellat dolore modi error consequatur rem, eveniet molestias eos laboriosam sint quo deleniti hic non perspiciatis sapiente veritatis.</p>
                        <h3>john deo</h3>
                        <span>travler</span>
                        <img src="./images/user.png" alt="">
                    </div> 
                    

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed recusandae vero laborum. Veniam, voluptatum eum.</p>
                        <h3>john deo</h3>
                        <span>travler</span>
                        <img src="./images/user.png" alt="">
                    </div>


                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione nesciunt aut quis excepturi aperiam voluptates, quas mollitia dolor fugiat libero qui odit laudantium vel voluptatum tempore consectetur quia cumque dignissimos, cum totam quibusdam laboriosam? Rem?</p>
                        <h3>john deo</h3>
                        <span>travler</span>
                        <img src="./images/user.png" alt="">
                    </div>


                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam magnam ipsa? Numquam temporibus soluta amet, sed pariatur porro distinctio.</p>
                        <h3>john deo</h3>
                        <span>travler</span>
                        <img src="./images/user.png" alt="">
                    </div>


                </div>

            </div>
</section>
















<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick lincks</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="packege.php"> <i class="fas fa-angle-right"></i> packege</a>
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
<script src="./script.js">
</script>


</body>
</html>
