<?php
include("config.php");
if (isset($_GET["id"])) {

	$id=$_GET['id'];

	$sql=" DELETE FROM `user_login` WHERE `id`=$id";
      if (mysqli_query($conn,$sql)) {
      	header("location:showuser.php");
      }else{
      	echo "ERROR:could not be deleted";
      }
}
?>