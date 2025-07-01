<?php
$mysqli =  mysqli_connect("localhost","root","","");


if (!$mysqli ) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
}
else{
    echo"connected";
}


$query= "CREATE DATABASE book_db";

 if (mysqli_query($mysqli,$query)){echo "<br>database created";}

 else{echo"<br>already created". mysqli_connect_error();}


 mysqli_select_db($mysqli,"book_db");

$query="CREATE TABLE if not exists users(
  id int(2) primary key not null AUTO_INCREMENT,
  user_name varchar(120) ,
  email varchar(120) ,
  password varchar(120)  
);";


if (mysqli_query($mysqli,$query)){echo "<br>table created";}



$insert="INSERT INTO users(user_name, email, password) VALUES  ('admin','','admin');";

if (mysqli_query($mysqli,$insert)){echo "<br>inserted";}



$query="CREATE TABLE if not exists book_form(
  id int(2) primary key not null AUTO_INCREMENT,
  user_name varchar(120) ,
  name varchar(120) ,
  email varchar(120) ,
  phone varchar(120) ,
  address varchar(120) ,
  location varchar(120) ,
  guests int(2) ,
  arrivals date ,
  leaving date 
 
);";

if (mysqli_query($mysqli,$query)){echo "<br>table created";}

?>