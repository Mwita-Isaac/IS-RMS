<?php
require 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE user_id ='$id' ";

if(mysqli_query($db, $sql)){
     
    header("location:admin.php");
}else{
  echo "fail";
}
 ?>
