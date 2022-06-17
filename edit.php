<?php

include 'connection.php';

$id = $_GET['id'];

$editSql = "SELECT * FROM users WHERE id = $id";
$editResult = mysqli_query($conn, $editSql);

$row = mysqli_fetch_assoc($editResult);

$firstName = $row['first_name'];
$lastName = $row['last_name'];
$phone    = $row['phone'];
$email    = $row['email'];



if(isset($_POST['submit'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $password = ($_POST['password']);

//SQL query
$sql = "UPDATE users set id = '$id',
 first_name = '$firstName', 
 last_name = '$lastName',
 phone = '$phone',
 email = '$email' WHERE id = $id";

$result =  mysqli_query($conn, $sql);

 if($result){
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
    <title>User registration Update Form</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
        <header>User Registration Update Form</header>
        <form method="POST">
            <fieldset>
                <input type="text" name="first_name" value="<?php echo $firstName;?>" class="username" placeholder="first name"/><br/><br/>
                <input type="text" name="last_name" value="<?php echo $lastName;?>" class="username" placeholder="last name"/><br/><br/>
                <input type="tel" name="phone" value="<?php echo $phone;?>" class="username" placeholder="phone number..."/><br/><br/>
                <input type="email" name="email" value="<?php echo $email;?>" class="username" placeholder="email..."/><br/><br/>
                <input type="submit" name="submit" id="update" value="Update"/><br/><br/>
                <a href="list.php" type="submit" name="login" id="login">User List</a>
            </fieldset>
        </form>
    </div>
</body>
</html>



?>