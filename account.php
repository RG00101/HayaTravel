<?php 
session_start();
$usrn = $_SESSION['user_name'];
include "db_conn.php";


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
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
        <a href="book.php">book</a><?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>
        <a href="account.php">hello,<?php echo $_SESSION['user_name']; ?></a>
        <a href="logout.php">log out</a><?php }else{ 
            header("Location: login_page.php"); } ?>
    </nav>
     
    <div id="menu-btn" class="fas fa-bars"></div>

   </section>
  <div class="heading" style="background:url(./images/photo_2024-01-07_10-00-20_2.jpg); background-size: cover;background-position: center;background-attachment: fixed;color: var(--white);">
    <h1>account</h1>
  </div>

    
  <?php if ($usrn=="admin") { 
    
$query="select * from book_form"; 

$result=mysqli_query($conn,$query);?>
 


  <h1 class="heading-title">admin page</h1>

       
<?php  if (mysqli_num_rows($result) === 0) {
    ?>


    <h1 class="heading-title">no booking</h1>
    
    <?php }else{?>
  <section class="account">
  <h2 class="heading-title">booking Record</h2>
    <div class="flex">
        <table  style="align=center; border=1px; line-height:40px;" class="table" >

       
            
       
		<tr> 
			  <td class="menu-title" > ID </td> 
			  <td class="menu-title" > Name </td> 
			  <td class="menu-title" > Email </td> 
			  <td class="menu-title" > phone </td>
			  <td class="menu-title" > address </td>
			  <td class="menu-title" > location </td>
			  <td class="menu-title" > number of guests </td>
			  <td class="menu-title" > arrivals </td>
			  <td class="menu-title" > leaving </td>
        </tr> 
        
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr><td style="align=center;padding: 2rem;"><?php echo $rows['id']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['name']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['email']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['phone']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['address']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['location']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['guests']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['arrivals']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['leaving']; ?></td> 
		</tr> 
	<?php 
               }?>
        </table>

         </div>

        <?php }}else{ 

$query="select * from book_form where user_name='$usrn'"; 

$result=mysqli_query($conn,$query);?>

<?php  if (mysqli_num_rows($result) === 0) {
    ?>


    <h1 class="heading-title">no booking</h1>
    
    <?php }else{?>

            <section class="account">
  <h2 class="heading-title">booking Record</h2>
    <div class="flex">
        <table  style="align=center; border=1px; line-height:40px;" class="table" >

       
            
       
		<tr> 
			  <td class="menu-title" > ID </td> 
			  <td class="menu-title" > Name </td> 
			  <td class="menu-title" > Email </td> 
			  <td class="menu-title" > phone </td>
			  <td class="menu-title" > address </td>
			  <td class="menu-title" > location </td>
			  <td class="menu-title" > number of guests </td>
			  <td class="menu-title" > arrivals </td>
			  <td class="menu-title" > leaving </td>
        </tr> 
        
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr><td style="align=center;padding: 2rem;"><?php echo $rows['id']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['name']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['email']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['phone']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['address']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['location']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['guests']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['arrivals']; ?></td> 
		<td style="align=center;padding: 2rem;"><?php echo $rows['leaving']; ?></td> 
		</tr> 
	<?php 
               }?>
        </table>


        <?php  }} ?>
  </section>





  <?php




?>















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