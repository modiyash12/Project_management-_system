<!DOCTYPE html>
<html>
<head>
	<title>User View</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no>

    <meta charset="utf-8">

</head>
<style type="text/css">
	table{
		margin-top: 10px;
		border:4px solid black;
		width: 100%;
		font-family: monospace;
		font-size: 15px;
		text-align: center;
		text-orientation: flex;
    background-color: #BBDEFB;
	}
function function_alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
 
	th{
		border: 3px solid black;
	}
	td{
		border: 1px solid black;
	}

	@media screen and (max-width: 500px){
		table{
			width: 100%;
			text-orientation: flex;
		}
	}


      * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("img/background.jpg");
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  background-color: #0283c9 ;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 30px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
  padding-right: 5px;
  box-shadow: 0 0 0 darkblue;
  color: white;
}

.header-right a{
  margin-left: 10px;
}

.header-right a:hover{
    background-color: #1A237E;
}

.header-right a:active {
  box-shadow: none;
  top: 5px;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

  .bt{
  	text-align: center;
  }


</style>
<body>

	<div class="header">
  		<a href="#default" class="logo">Madhya Pradesh Jal Nigam Maryadit</a>
  			<div class="header-right">
    		<a class="active" href="Logout.php">Logout</a>

  			</div>
	</div>

	<h2 align="center" style="background-color:#0283c9" >DETAILS</h2>

	<div style="overflow-x: auto;">
<table >
	<tr>
    <th></th>
		<th>ID</th>
		<th>Agreement NO</th>
		<th>Project Name</th>
		<th>District</th>
		<th>Villages</th>
		<th>Source</th>
		<th>Project Population</th>
		<th>No of Household</th>
		<th>Project Cost (Rs in Cr)</th>
		<th>Project Cost after up to date variation(Rs in Cr)</th>
		<th>Project Duaration</th>
		<th>Date of Completion as per agreement</th>
		<th>Expected date of Completion After Time Extension</th>
		<th>Agency Name</th>
		<th>Project Manager Name/Contact No</th>
		<th>Financial Progress(in %)</th>
		<th>Physical Progress(in %)</th>
		<th>Remark</th>
		<th>Date</th>
	</tr>

	<?php
  include('config.php');

   session_start();

    $piu= $_SESSION["piu"];

     $sql= "SELECT * FROM addinfo WHERE `piu`='$piu'";
     $result = $conn->query($sql);

     if($result -> num_rows > 0){
     	while($row = $result ->fetch_assoc()){
     		echo "<tr> <td> <a href=\"demo.php?id=$row[id]\">view</a> </td> <td>" . $row["id"]. "</td><td>" .$row["agreementno"]. "</td> <td>".$row["projectname"]."</td> <td>".$row["district"]."</td> <td>".$row["villages"]."</td> <td>".$row["source"]."</td> <td>".$row["projectpopulation"]."</td> <td>".$row["noofhousehold"]."</td> <td>".$row["projectcost"]."</td> <td>".$row["projectcost2"]."</td> <td>".$row["projectduaration"]."</td> <td>".$row["dateofcompletion"]."</td> <td>".$row["expecteddate"]."</td> <td>".$row["agencyname"]."</td><td>".$row["projectmanagername"]."</td><td>".$row["financialprogress"]."</td> <td>".$row["physicalprogress"]."</td> <td>".$row["remark"]."</td> <td>".$row["added_on"]."</td> 
         </tr>";
     	}
     	echo "</table>";
     }else{echo "0 result";}
     $conn->close();
	?>
</table>
</div>
</body>
</html>