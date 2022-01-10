
<?php

include('config.php'); 
include('function.php'); 
session_start();

$username="";
$password="";

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql="SELECT `id` FROM `admin_login` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);  
       if($result -> num_rows > 0){
        while($row = $result ->fetch_assoc()){
             $_SESSION["id"] = $row["id"];
            header('location:admin_dashboard.php');
        }  
    }
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>

