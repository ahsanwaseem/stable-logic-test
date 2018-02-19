<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
</html>


<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "mydatabase";

foreach($db as $key => $value)

{

    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


$query = "SELECT * FROM calls LIMIT 10";
$result = mysqli_query($connection,$query);

   if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>Account ID</th>
                          <th>Account</th>
                          <th>PhoneNumber</th>
                          <th>DialledNumber</th>
                          <th>Destination</th>
                          <th>DateofCalls</th>
                          <th>TimeofCalls</th>
                          <th>UsageType</th>
                          <th>UsageSub</th>
                          <th>TransmissionType</th>
                          <th>Duration</th>
                          <th>UplinkBytes</th>
                          <th>DownlinkBytes</th>
                          <th>TotalDataVolume</th>
                          <th>Cost</th>
                          <th>BundleType</th>
                          <th>RoamedCategory</th>
                          <th>CountryofOrigin</th>
                          <th>Network</th>
                          <th>UsageDirection</th>
                          <th>BillSeq</th>
                          <th>InvoiceNumber</th>
                        </tr></thead><tbody>";


     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>" . $row['AccountID']."</td>
                   <td>" . $row['Account']."</td>
                   <td>" . $row['PhoneNumber']."</td>
                   <td>" . $row['DialledNumber']."</td>
                   <td>" . $row['Destination']."</td>
                   <td>" . $row['DateofCalls']."</td>
                   <td>" . $row['TimeofCalls']."</td>
                   <td>" . $row['UsageType']."</td>
                   <td>" . $row['UsageSub']."</td>
                   <td>" . $row['TransmissionType']."</td>
                   <td>" . $row['Duration']."</td>
                   <td>" . $row['UplinkBytes']."</td>
                   <td>" . $row['DownlinkBytes']."</td>
                   <td>" . $row['TotalDataVolume']."</td>
                   <td>" . $row['Cost']."</td>
                   <td>" . $row['BundleType']."</td>
                   <td>" . $row['RoamedCategory']."</td>
                   <td>" . $row['CountryofOrigin']."</td>
                   <td>" . $row['Network']."</td>
                   <td>" . $row['UsageDirection']."</td>
                   <td>" . $row['BillSeq']."</td>
                   <td>" . $row['InvoiceNumber']."</td></tr>";
     }

     echo "</tbody></table></div>";

} else {
     echo "you have no records";
}


?>
