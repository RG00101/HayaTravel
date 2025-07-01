<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style2.css">

</head>
<body>

<div class="box-formC">
	
	
		<div class="center" >
        <form action="acc_creation.php" method="post">
		<h1 >Creat Your Account</h1>
		<div class="inputs">
        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
			<input type="text" name="uname" placeholder="user name">
            <br>
			<input type="email"  name="email" placeholder="email">
		    <br>
			<input type="password"  name="password" placeholder="password">
		</div>
			
			<br><br>
				
			
			<br>
			<button>Create</button>
        </form>
	</div>
	
</div>