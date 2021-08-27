<!DOCTYPE html>
<html>
<head>
<title>User Database</title>
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
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Usertype</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "clean_sweep");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID, username, password, user_type FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>"
. $row["user_type"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>