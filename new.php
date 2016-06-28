<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "jaipurbus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT haults FROM bus";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
    	$temp=explode(";",$row["haults"]);
    	for ($x = 0; $x < count($temp); $x++){
             $sql = "INSERT IGNORE INTO route (route)
						VALUES ('".$temp[$x]."')";

						if ($conn->query($sql) === TRUE) {
						    echo "New record created successfully";
						} else {
						    echo "Error: " . $sql . "<br>" . $conn->error;
						}
    	}
    }
}

else {
    echo "0 results";
}


$conn->close();
?>
	