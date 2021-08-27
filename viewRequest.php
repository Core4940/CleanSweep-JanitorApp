<!DOCTYPE html>
<html>
<head>
<title>Job Request Database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: lightgreen;
color: white;
}
tr:nth-child(even) {background-color: orange}
</style>
</head>
<body>
<table>
<tr>
<th>Job ID</th>
<th>Name</th>
<th>Location</th>
<th>Time</th>
<th>Description</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "clean_sweep");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT job_ID, username, location_name, time, description FROM jobrequest";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["job_ID"]. "</td><td>" . $row["username"] . "</td><td>" . $row["location_name"] . "</td><td>"
. $row["time"]. "</td><td>" . $row["description"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>