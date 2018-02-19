<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
</html>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'mydatabase';
$table = 'calls';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");


    if(isset($_POST['submit']))
    {
         $fname = $_FILES['sel_file']['name'];
         echo 'upload file name: '.$fname.' ';
         $chk_ext = explode(".",$fname);

         if(strtolower(end($chk_ext)) == "csv")
         {

             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");

             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
             {
                $sql = "INSERT into calls (Account,Phonenumber,DialledNumber,Destination,DateofCall,TimeofCall,UsageType,UsageSub, TransmissionType,Duration,UplinkBytes,DownlinkBytes,TotalDataVolume,Cost,BundleType,RoamedCategory,CountryofOrigin,Network,UsageDirection,BillSeq,InvoiceNumber )
                   values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]','$data[18]','$data[19]','$data[20]')";
                mysql_query($sql) or die(mysql_error());
             }
       ?>
            <h4 class="text-center"> <?php echo "Successfully Imported"; ?></h4>
            <?php
             fclose($handle);


         }
         else
         {
             echo "Invalid File";
         }
    }



    ?>
    <h1 class="text-center">Import CSV file</h1>
    <div class="col-md-6 col-md-offset-5">
    <form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post' enctype="multipart/form-data">
       <p><input type='file' name='sel_file' size='20'></p>
        <input type='submit' name='submit' value='submit'>
        <h4>Data of All Records</h4>
    </form>
         <form action ="data.php" method="post" enctype="multipart/form-data">
        <input type='submit' name='submit' value='Please Click'>
        </form>
    </div>
