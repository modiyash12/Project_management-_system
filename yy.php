 <?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "jalnigam2");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Agreement No', 'Project Name', 'DISTRICT', 'Villages', 'Source','Capacity Of Water Treatment Plant(in LMD)','Project Population','No of Household','FHTC','Project Cost (Rs in Cr)','Project Cost after up to date variation(Rs in Cr)','Funding Agency','Project Duaration','Project Start Date','Project Completion Date (As per agreement)','Expected date of Completion After Time Extension','Agency Name','Project Manager Name/Contact No','Financial Progress(in %)','Physical Progress(in %)','PIU','Status','Water Supply Start Date','Date&Time'));  
      $query = "SELECT * from addinfo ORDER BY id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  
