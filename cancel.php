
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";


$conn = mysqli_connect($servername, $username, $password, $database);

$first_name =  $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$registerid = $_REQUEST['registerid']
$mobile_number = $_REQUEST['moboilenumber'];

$sql="DELETE From Booking  where 'Firstname'=$F_name ,'Lastname'=$L_name ,'registerid'=$registerid, 'mobile_num'=$mobile_number ;"

$result =mysqli_connect($conn,$sql)

?>