<?php

include  'connection.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <a href="index.php" class="btn btn-sm btn-success float-end">Add user</a>
  <table class="table table-primary mt-3">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if($result){
    while($row = mysqli_fetch_assoc(($result))){
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $phone = $row['phone'];
        $email = $row['email'];

echo '<tr>
<td scope="row">'. $id .'</td>
<td>'.$first_name.'</td>
<td>'.$last_name.'</td>
<td>'.$phone.'</td>
<td>'.$email.'</td>
<td>
  <a href="edit.php?id='.$id.'" class="btn btn-sm btn-primary">Edit</a>
  <a href="delete.php?id='.$id.'" class="btn btn-sm btn-danger">Delete</a>
</td>
</tr>';

    }
}



?>

   </tbody>
  </table>
  </div>
  </body>
</html>