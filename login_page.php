<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style2.css">

</head>
<body>

<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>HAYE Travel</h1>
		<p>connect now</p>
		<span>
			<p>visit our social media</p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>  our facebook</a>
			<a href="https://www.instagram.com/haye_travel/"><i class="fa fa-instagram" aria-hidden="true"></i>  our instagram</a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
        <form action="login.php" method="post">
		<h5>Login</h5>
		<p>Don't have an account? <a href="create_account.php">Creat Your Account</a> it takes less than a minute</p>
        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p><?php } ?>
		<div class="inputs">
			<input type="text" name="uname" placeholder="user name">
			<br>
			<input type="password"  name="password" placeholder="password">
		</div>
			
			<br><br>
			
				
			
			<br>
			<button>Login</button>
        </form>
	</div>
	
</div>

  
</body>
</html>
