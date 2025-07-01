<?php
session_start(); 

include "db_conn.php";



if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['email'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: create_account.php?error=User Name is required");

        exit();

    }else if(empty($email)){

        header("Location: create_account.php?error=Email is required");

        exit();

    }else if(empty($pass)){

        header("Location: create_account.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            
                header("Location: create_account.php?error=User already exists!");

                exit();

            }else{


    $name = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $request = "insert into users(user_name,email,password) values
    ('$name','$email','$pass')";

    mysqli_query($conn, $request);

    header('location:login.php');

}

}

}



?>