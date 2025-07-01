<?php
session_start();

$connection = mysqli_connect('localhost','root','','book_db');

$usrn = $_SESSION['user_name'];

if(isset($_POST['send'])){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    $location = $_POST['location'];

    $guests = $_POST['guests'];

    $arrivals = $_POST['arrivals'];

    $leaving = $_POST['leaving'];


    $request = "insert into book_form(name,email,phone,address,location,guests,arrivals,leaving,user_name) values
    ('$name','$email','$phone','$address','$location',$guests,'$arrivals','$leaving','$usrn');";
    
    
    
    mysqli_query($connection, $request);


    header('location: account.php');

}
else{
    echo 'something went wrong try again';
}


?>