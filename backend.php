<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  
</head>
<body>

<div class="container">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>

    <li><a data-toggle="tab" href="#menu1">Customer</a></li>
    <li><a data-toggle="tab" href="#menu2">Orders</a></li>
    <li><a data-toggle="tab" href="#menu3">Contact Deatails</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Welcome to the Navinka Hotel System.....</p>
    </div>

    <div id="menu1" class="tab-pane fade in">
      <h3>Customer Deatails</h3>
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jewzzz_hotel";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM customer";

        $result = $conn->query($sql);
//`customer`(`customerID`, `CUstomerName`, `CustomerEmail`, `CustomerContactNumber`
        echo "<table class='table table-hover'>";
        

        if ($result->num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["customerID"] . "<td>";
                    echo "<td>" . $row["CUstomerName"] . "<td>";
                    echo "<td>" . $row["CustomerEmail"] . "<td>";
                    echo "<td>" . $row["CustomerContactNumber"] . "<td>";

                echo"</tr>";
    }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    
    ?>




    </div>
    
    <div id="menu2" class="tab-pane fade">
      <h3>Orders</h3>
      

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jewzzz_hotel";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM reservation";

        $result = $conn->query($sql);
// `CustomerName`, `CustomerEmail`, `ContactNumber`, `RoomType`, `CheckinDate`, `CheckOutDate`
        echo "<table class='table table-hover'>";
        echo "<tr>";
        echo "<th>Order ID</th>"; 
        echo "<th>Customer Full Name</th>";
        echo "<th>G-mail</th>";
        echo "<th>Contact Number</th>"; 
        echo "<th>Room Type</th>"; 
        echo "<th>Check-In Date</th>"; 
        echo "<th>Check-Out Date</th>"; 
        echo "</tr>";

        if ($result->num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["ReservationID"] . "<td>";
                    echo "<td>" . $row["CustomerName"] . "<td>";
                    echo "<td>" . $row["CustomerEmail"] . "<td>";
                    echo "<td>" . $row["ContactNumber"] . "<td>";
                    echo "<td>" . $row["RoomType"] . "<td>";
                    echo "<td>" . $row["CheckinDate"] . "<td>";
                    echo "<td>" . $row["CheckOutDate"] . "<td>";

                echo"</tr>";
    }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    
    ?>



    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Contact Deatails</h3>
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jewzzz_hotel";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM contact";

        $result = $conn->query($sql);

        echo "<table class='table table-hover'>";
       //`ContactID`, `FullName`, `Email`, `ContactNumber`, `Messages`

        if ($result->num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["ContactID"] . "<td>";
                    echo "<td>" . $row["FullName"] . "<td>";
                    echo "<td>" . $row["Email"] . "<td>";
                    echo "<td>" . $row["ContactNumber"] . "<td>";
                    echo "<td>" . $row["Messages"] . "<td>";

                echo"</tr>";
    }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    
    ?>
    </div>
  </div>


</div>

</body>
</html>
