<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $password = md5($_POST['password']);

//Insert query

$sql = "INSERT INTO users(first_name, last_name, phone, email, password) VALUES ('$firstName',' $lastName', '$phone', '$email', '$password')";
//Insert logic here

$result = mysqli_query($conn, $sql);

if($result){
   // echo "User has been inserted";
   header('location:list.php');
}else{
    die(mysqli_error($conn));
}

}



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration form with User List</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
        <header>User Registration Form</header>
        <form method="POST">
            <fieldset>
                <input type="text" name="first_name" class="username" placeholder="first name"/><br/><br/>
                <input type="text" name="last_name" class="username" placeholder="last name"/><br/><br/>
                <input type="tel" name="phone" class="username" placeholder="phone number..."/><br/><br/>
                <input type="email" name="email" class="username" placeholder="email..."/><br/><br/>
                <input type="password" name="password" class="username" placeholder="password..."/><br/><br>
                <input type="submit" name="submit" id="submit" value="Register"/><br/><br/>
                <a href="list.php" type="submit" name="login" id="login">User List</a>
            </fieldset>
        </form>
    </div>
</body>
</html>