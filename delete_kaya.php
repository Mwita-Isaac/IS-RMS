<?php
require 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM data WHERE data_id ='$id' ";

if(mysqli_query($db, $sql)){
    $sql ="DELETE FROM info WHERE kaya_id ='$id'";
    mysqli_query($db, $sql);
 
    header("location:mtaa.php");
}else{
  echo "fail";
}
 ?>
