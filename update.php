<?php
include('config.php');
include('function.php');
  if (isset($_POST['submit'])) {
      
      $agreementno = mysqli_real_escape_string($conn,$_POST['Agreementno']);
      $projectname = mysqli_real_escape_string($conn,$_POST['projectname']);
       $district = mysqli_real_escape_string($conn,$_POST['District']); 
      $villages = mysqli_real_escape_string($conn,$_POST['villages']);
      $source = mysqli_real_escape_string($conn,$_POST['Source']);
      $projectpopulation = mysqli_real_escape_string($conn,$_POST['ProjectPopulation']);
      $noofhousehold = mysqli_real_escape_string($conn,$_POST['noofhousehold']); 
      $projectcost = mysqli_real_escape_string($conn,$_POST['ProjectCost']);
      $projectcost2 = mysqli_real_escape_string($conn,$_POST['ProjectCost2']); 
      $projectduaration = mysqli_real_escape_string($conn,$_POST['Projectduaration']);
      $dateofcompletion = mysqli_real_escape_string($conn,$_POST['Dateofcompletion']);
      $expecteddate = mysqli_real_escape_string($conn,$_POST['Expecteddate']);
      $agencyname = mysqli_real_escape_string($conn,$_POST['Agencyname']);
      $projectmanagername = mysqli_real_escape_string($conn,$_POST['ProjectManagername']); 
       $financialprogress = mysqli_real_escape_string($conn,$_POST['FinancialProgress']); 
       $physicalprogress = mysqli_real_escape_string($conn,$_POST['PhysicalProgress']); 
  

            $sql = "UPDATE `addinfo` SET `district` = '$district',`villages` = $villages,`source` = '$source',
            `projectpopulation` = $projectpopulation,`noofhousehold`= $noofhousehold,`projectcost` = $projectcost,      `projectcost2` = $projectcost2,`projectduaration` = $projectduaration,`dateofcompletion` = '$dateofcompletion',`expecteddate`='$expecteddate',`agencyname`='$agencyname',`projectmanagername` ='$projectmanagername',`financialprogress`=$financialprogress,`physicalprogress`= $physicalprogress WHERE `projectname` ='$projectname' AND `agreementno`=$agreementno";

			if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
          header('location:dashboard.php');
				} else {
    				echo "Error updating record: " . $conn->error;
						}

				$conn->close();
        }

?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no>

    <meta charset="utf-8">


    <title>UPDATE</title>
    <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }
     body{
    margin: 0;
    padding: 0;
    background: url("img/bbbig.jpg");
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
    
.wrap{
    width: 320px;
    height: 420px;
    color: #fff;
    top: 40%;
    left: 38%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    margin-top: 15px;
}

    .login-form{
        width: 350px;
        margin: 0 auto;
        border: 2px solid #ddd;
        padding: 2rem;
        background: #292c2d;
    }
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
    }
    .form-button{
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
        color: #FFFFFF;
    }
    .form-footer{
        text-align: center;
    }


* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("img/bbbbig.jpg");
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 32px;
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
  font-size: 45px;
  font-weight: bold;
  font-style: Karla;
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

.header-right a:active{
  box-shadow: none;
  top: 5px;
}

* {
  box-sizing: border-box;
}

@media screen and (max-width: 800px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

@media screen and (min-width: 800px) {
  .header a.logo{
    font-size: 50px;
  }
}

@media screen and (max-width: 600px){
  .header a.logo {
    font-size: 20px;
  }
}

</style>
</head>
<body>

    <div class="header">
  <a href="#default" class="logo">Madhya Pradesh Jal Nigam Maryadit</a>
  <div class="header-right">
    <a class="active" href="Logout.php">Logout</a>
  </div>
</div>

    <div class="wrap">
        <form class="login-form" action="update.php" method="POST">
            <div class="form-header">

                <h1>UPDATE INFO</h1>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-input" placeholder="Agreement no/Date" name="Agreementno" required>
            </div>
          
            <div class="form-group">
               <input type="text" class="form-input" placeholder="Name of Project" name="projectname" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="District" name="District" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="No of villages" name="villages" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Source" name="Source" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Population" name="ProjectPopulation" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="No of Households" name="noofhousehold" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Cost(RS in Cr)" name="ProjectCost" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Cost after up to date variation(Rs in Cr)" name="ProjectCost2" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Duaration(in Month)" name="Projectduaration" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Date of Completion as per agreement" name="Dateofcompletion" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Expected date of Completion After Time Extension" name="Expecteddate" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Name of Agency" name="Agencyname">
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Name of Project Manager/Contact no" name="ProjectManagername" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Financial Progress in %" name="FinancialProgress" >
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Physical Progress in %" name="PhysicalProgress" >
            </div>

            <div class="form-group">
                <button class="form-button" type="submit" name="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>