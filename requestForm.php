<?php
$username = filter_input(INPUT_POST, 'username');
$location_name = filter_input(INPUT_POST, 'location_name');
$description = filter_input(INPUT_POST, 'description');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "clean_sweep";


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO jobrequest (Username, Location_Name,  Description)
values ('$username','$location_name','$description')";
if ($conn->query($sql)){
echo "New request submitted";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}



?>