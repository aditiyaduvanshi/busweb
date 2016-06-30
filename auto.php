<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$a=trim($_GET["stop"]);

$sql = "SELECT * FROM route";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "[";
 $first_item = true;
 while($row = $result->fetch_assoc()) {
    if(stripos($row["route"], $a)!==false){
       if($first_item){
       	$first_item = false;
       }
       else{
       	echo ",";
       }
       echo '"'.$row["route"].'"';
    }
 }
 echo "]";
}
	?>