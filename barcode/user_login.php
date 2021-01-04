<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progress 1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_login = $_GET["string"] ;

$sql="SELECT * FROM user WHERE password='$_login' ";

$res = mysqli_query($conn,$sql);

$result = array();

while($row = mysqli_fetch_array($res)){
	array_push($result,
	array('password'=>$row[2],
	'username'=>$row[1],


	));
}

echo json_encode(array("result"=>$result));

mysqli_close($conn);

?>
