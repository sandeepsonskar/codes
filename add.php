 

<?php
   include("conec.php");
   
   date_default_timezone_set('Asia/Kolkata');
 
 
$temp = $_GET['temp'];
$hum = $_GET['hum'];
 
$date = date("Y-m-d h:i:s");
$sql = "INSERT INTO iottable SET time = '$date'";
$sql = "INSERT INTO iottable (time,temp,hum) VALUES ('$date','$temp','$hum')";
if ($connection->query($sql) === TRUE) {
    echo "Data Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$connection->close();
?>

