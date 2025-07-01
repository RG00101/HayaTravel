<?php 

session_start();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>packages</title>
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
  <div class="heading" style="background:url(./images/photo_2024-01-07_10-01-14.jpg); background-size: cover;background-position: center;background-attachment: fixed;color: var(--white);">
    <h1>packages</h1>
  </div>
  
<section class="packages">

<h1 class="heading-title">top destinations</h1>

<div class="box-container">

    <div class="box">

        <div class="image">
            <img src="./images/distination-1.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>


    <div class="box">

        <div class="image">
            <img src="./images/distination-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">

        <div class="image">
            <img src="./images/distination-3.png" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">

        <div class="image">
            <img src="./images/distination-4.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-5.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-6.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-7.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-8.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-9.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-10.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
    <div class="image">
            <img src="./images/distination-11.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./images/distination-12.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sint!</p>
        
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    

</div>
<div class="load-more"><span class="btn">load more</span></div>

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
<script src="./script.js"></script>


</body>
</html>

