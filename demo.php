

<!DOCTYPE html>
<html>
<head>
	<title>view</title>

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  	<link rel="stylesheet" type="text/css" href="https:stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>
<body>

<div class="box">
	<h1>AGREEMENT NO</h1>
</div>

</body>
</html>

<?php
include("config.php");
 
 if (isset($_GET["id"])) {
    $id = $_GET['id'];

 
	$sql= "SELECT * FROM addinfo WHERE id=$id";
     $result = $conn->query($sql);
$row=mysqli_fetch_array($result)
?>