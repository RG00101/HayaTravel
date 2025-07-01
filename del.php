<?php
session_start();

$connection = mysqli_connect('localhost','root','','book_db');

$usrn = $_SESSION['user_name'];

if(isset($_POST['send'])){
 $id =  $_POST['id'];
$query="DELETE FROM book_form WHERE id = $id ;";
mysqli_query($connection, $query);
header('location: account.php');
}else{
    echo 'something went wrong try again';
}
?>