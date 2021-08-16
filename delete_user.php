<?php
require 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM info WHERE id ='$id' ";
if(mysqli_query($db, $sql)){
  $page =$_GET['page'];
    header("location:kaya1.php?id=$page");
}else{
  echo "fail";
}
 ?>


                                               