 

<?php
   include("conec.php");
   
   date_default_timezone_set('Asia/Kolkata');
 
 
$temp = $_GET['temp'];
$hum = $_GET['hum'];
$gas = $_GET['gas'];
$date = date("Y-m-d h:i:s");
$sql = "INSERT INTO iottable1 SET time = '$date'";
$sql = "INSERT INTO iottable1 (time,temp,hum,gas) VALUES ('$date','$temp','$hum','$gas')";
if ($connection->query($sql) === TRUE) {
    echo "Data Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$connection->close();
?>

