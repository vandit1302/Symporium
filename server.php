<?php

error_reporting(0);
session_start();
$_SESSION["logged"] = false;

//Initializing variables
$username = "";
$email = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','iwp') or die("Could not connect the db");

//Registration
$username = mysqli_real_escape_string($db,$_POST["username"]);
$email = mysqli_real_escape_string($db,$_POST["email"]);
$pass = mysqli_real_escape_string($db,$_POST["password"]);
$email2 = mysqli_real_escape_string($db,$_POST["email2"]);

//Checking for existing users
$user_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

if($user)
{
    array_push($errors,"This email is already in use");
}


//Register if no error
if(!empty($_POST["username"]))
{
    if(count($errors) == 0)
    {
        $password = md5($pass);
        $query = "INSERT INTO users (username,email,password) values ('$username','$email','$password')";

        mysqli_query($db,$query);
        $_SESSION["username"] = $username;
        $_SESSION["success"] = "Logged in";
        $_SESSION["logged"] = true;

        header('location: index.php');
      
    }
}


//Login User
if(isset($_POST["login"]))
{
    $username = mysqli_real_escape_string($db,$_POST["username"]);
    $pass = mysqli_real_escape_string($db,$_POST["password"]);
    if(count($errors)==0)
    {
        $password = md5($pass);
        $query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result))
        {
            $_SESSION["username"] = $username;
            $_SESSION["success"] = "Logged in";
            $_SESSION["logged"] = true;
            header('location:index.php');
        }
        else
        {
            echo("Wrong username / password. Try again");
        }
    }
    
    
}



?>
