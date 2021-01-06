<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jewzzz_hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO reservation( CustomerName, CustomerEmail, ContactNumber, RoomType, CheckinDate, CheckOutDate)
 VALUES  
 ('$_POST[fullname]',' $_POST[email]' , '$_POST[phone]', '$_POST[roomType]', '$_POST[checkIn]', '$_POST[checkOut]')";


if (mysqli_query($conn, $sql)) {
    echo "Your Request is success....!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>