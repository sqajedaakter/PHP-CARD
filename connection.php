<?php

  $conn = new mysqli('localhost', 'root', '', 'batch_two');

  if($conn){
    echo "Connection success";
  }else{
    die(mysqli_error($conn));
  }



?>