<?php

include 'connection.php';

if(isset($_GET['id'])){
$id = $_GET['id'];

$sql = "DELETE FROM users  WHERE id = $id";
$result =  mysqli_query($conn, $sql);

if($result){
    header('location:list.php');
}else{
    die(mysqli_error($conn));
}
}



?>