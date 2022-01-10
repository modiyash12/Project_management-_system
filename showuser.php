<!DOCTYPE html>
<html>
<head>
  <title>Fetch DATA</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

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
  background-image: url(".jpg");
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
  box-shadow: 0 0 0 darkblue;
  color: white;
  margin-right: 20px;
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
        <a class="active" href="adduser.php">ADD USER</a>
          <a class="active" href="export.php">EXPORT</a>


        </div>
  </div>

  <h2 align="center" style="background-color:#0283c9" >User Details</h2>

  <div style="overflow-x: auto;">
<table >
  <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>Password</th>
    <th>PIU</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
 <?php
include('config.php');
     $sql= "SELECT * FROM user_login";
     $result = $conn->query($sql);

     if($result -> num_rows > 0){
      while($row = $result ->fetch_assoc()){
        echo "<tr>  <td>" . $row["id"]. "</td><td>" .$row["username"]. "</td> <td>".$row["password"]."</td> <td>" . $row["piu"]. "</td> <td> <a href=\"edituser.php?id=$row[id]\">EDIT</a> </td>  <td> <a href=\"deleteuser.php?id=$row[id]\">DELETE</a> </td>
         </tr>";
      }
      echo "</table>";
     }else{echo "0 result";}
     $conn->close();
 ?>
  
  </table>
</div>

<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
     "processing": true,
         "sAjaxSource":"response.php",
     "dom": 'lBfrtip',
     "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
        });
});
</script>

</body>
</html>