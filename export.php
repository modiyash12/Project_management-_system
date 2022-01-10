<?php
include('config.php');
$sql="SELECT * FROM `addinfo`";
$result=mysqli_query($conn,$sql);

$html='<table><tr> 
		<td>ID</td>
		<td>Agreement NO</td>
		<th>Project Name</th>
		<th>District</th>
		<th>Villages</th>
		<th>Source</th>
        <th>Capacity Of Water Treatment Plant(in LMD)</th>
		<th>Project Population</th>
		<th>No of Household</th>
        <th>FHCP</th>
		<th>Project Cost (Rs in Cr)</th>
		<th>Project Cost after up to date variation(Rs in Cr)</th>
        <th>Funding Agency</th>
		<th>Project Duaration</th>
         <th>Project Start Date</th>
		<th>Project Completion Date (As per agreement)</th>
		<th>Expected date of Completion After Time Extension</th>
		<th>Agency Name</th>
		<th>Project Manager Name/Contact No</th>
		<th>Financial Progress(in %)</th>
		<th>Physical Progress(in %)</th>
    <th>PIU</th>
    <th>Status</th>
		<th>Water Supply Start Date</th>
		<th>Date&Time</th></tr>';

     	while($row = $result ->fetch_assoc()){
$html.='<tr>  <td>' . $row['id']. '</td><td>' .$row['agreementno']. '</td> <td>'.$row['projectname'].'</td> <td>'.$row['district'].'</td> <td>'.$row['villages'].'</td> <td>'.$row['source'].'</td> <td>'.$row['capacity'].'</td> <td>'.$row['projectpopulation'].'</td> <td>'.$row['noofhousehold'].'</td> <td>'.$row['fhtc'].'</td> <td>'.$row['projectcost'].'</td> <td>'.$row['projectcost2'].'</td> <td>'.$row['funding_agency'].'</td> <td>'.$row['projectduaration'].'</td><td>'.$row['projectstartdate'].'</td>  <td>'.$row['dateofcompletion'].'</td> <td>'.$row['expecteddate'].'</td> <td>'.$row['agencyname'].'</td><td>'.$row['projectmanagername'].'</td><td>'.$row['financialprogress'].'</td> <td>'.$row['physicalprogress'].'</td> <td>' .$row['piu']. '</td> <td>'.$row['status'].'</td> <td>'.$row['watersupplystart'].'</td> <td>'.$row['added_on'].'</td>  </tr>';
}

$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;

?>