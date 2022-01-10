

<?php  
include('config.php');
 $query ="SELECT * FROM addinfo ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
 ?>  

 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Export Data Into CSV</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Data Into CSV</h2>  
                <h3 align="center">DATA</h3>                 
                <br />  
                <form method="post" action="exportcsv.php" align="center">  
                     <input type="submit" name="export" value="Confirm Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                         
                               <th width="5%">ID</th>
		<th width="5%">Agreement NO</th>
		<th width="15%">Project Name</th>
		<th width="25%">District</th>
		<th width="35%">Villages</th>
		<th width="15%">Source</th>
        <th width="25%">Capacity Of Water Treatment Plant(in LMD)</th>
		<th width="35%">Project Population</th>
		<th width="5%">No of Household</th>
        <th width="10%">FHTC</th>
		<th width="5%">Project Cost (Rs in Cr)</th>
		<th width="5%">Project Cost after up to date variation(Rs in Cr)</th>
        <th width="5%">Funding Agency</th>
		<th width="5%">Project Duaration</th>
         <th width="5%">Project Start Date</th>
		<th width="5%">Project Completion Date (As per agreement)</th>
		<th width="5%">Expected date of Completion After Time Extension</th>
		<th width="5%">Agency Name</th>
		<th width="5%">Project Manager Name/Contact No</th>
		<th width="5%">Financial Progress(in %)</th>
		<th width="5%">Physical Progress(in %)</th>
    <th width="5%">PIU</th>
    <th width="5%">Status</th>
		<th width="5%">Water Supply Start Date</th>
		<th width="5%">Date&Time</th>
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["agreementno"]; ?></td>  
                               <td><?php echo $row["projectname"]; ?></td>  
                               <td><?php echo $row["district"]; ?></td>  
                               <td><?php echo $row["villages"]; ?></td>  
                               <td><?php echo $row["source"]; ?></td> 
                               <td><?php echo $row["capacity"]; ?></td> 
                              <td><?php echo $row["projectpopulation"]; ?></td>   
                               <td><?php echo $row["noofhousehold"]; ?></td>  
                               <td><?php echo $row["fhtc"]; ?></td>  
                               <td><?php echo $row["projectcost"]; ?></td>  
                               <td><?php echo $row["projectcost2"]; ?></td>  
                               <td><?php echo $row["funding_agency"]; ?></td> 
                               <td><?php echo $row["projectduaration"]; ?></td>  
                                <td><?php echo $row["projectstartdate"]; ?></td>  
                               <td><?php echo $row["dateofcompletion"]; ?></td>  
                               <td><?php echo $row["expecteddate"]; ?></td> 
                                                             <td><?php echo $row["agencyname"]; ?></td> 
                               <td><?php echo $row["projectmanagername"]; ?></td>  
                               <td><?php echo $row["financialprogress"]; ?></td>  
                               <td><?php echo $row["physicalprogress"]; ?></td>  
                               <td><?php echo $row["piu"]; ?></td>  
                               <td><?php echo $row["status"]; ?></td>  
                               <td><?php echo $row["watersupplystart"]; ?></td>  
                               <td><?php echo $row["added_on"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  