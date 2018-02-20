<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>


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
?>
<h1 class="text-center">Report</h1>

<div class="text-center" style="margin-top:30px; border:1px solid #000;">
<h3>TotalCalls</h3>
<?php
$query1 = "select count(Phonenumber) as TotalCalls from calls;";
$result = mysqli_query($connection,$query1);

while($row = mysqli_fetch_assoc($result)) {

    echo $row['TotalCalls'];

}

?>

<h3>AverageDuration</h3>
<?php
$query2 = "select AVG(Duration) as AverageDuration from calls";
$result = mysqli_query($connection,$query2);

while($row = mysqli_fetch_assoc($result)) {

    echo $row['AverageDuration'];

}

?>

<h3>TotalCost</h3>
<?php
$query3 = "select SUM(Cost) as TotalCost from calls";
$result = mysqli_query($connection,$query3);

while($row = mysqli_fetch_assoc($result)) {

    echo $row['TotalCost'];

}

?>

</div>
</html>
