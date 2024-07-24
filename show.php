<html>
<head>
<meta http-equiv="refresh" content="15">
</head> 
<body>
<?php
$servername = "localhost";
$username = "id7216992_iotuser";
$password = "password";
$dbname = "id7216992_iotdata";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM iottable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	echo "<table border='1'><th>Time</th><th>TEMP(deg F)</th><th>Humidity</th>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['temp']."</td>";
		echo "<td>".$row['hum']."</td>";
 		echo "</tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
