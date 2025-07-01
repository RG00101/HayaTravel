<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
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
        <a href="account.php">hello,<?php echo $_SESSION['user_name']; ?></a>
        <a href="logout.php">log out</a>
    </nav>
     
    <div id="menu-btn" class="fas fa-bars"></div>

   </section>
  <div class="heading" style="background:url(./images/photo_2024-01-07_10-00-20_2.jpg); background-size: cover;background-position: center;background-attachment: fixed;color: var(--white);">
    <h1>book now</h1>
  </div>
  
<section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

       <div class="flex">
            <div class="inputbox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputbox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputbox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputbox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputbox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputbox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
       </div> 

       <input type="submit" value="submit" class="btn" name="send">

    </form>

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
<?php }
else{ 

    header("Location: login_page.php");

    exit();

} ?>