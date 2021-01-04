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

$_barcode = $_GET["string"] ;

$sql="SELECT * FROM barcode WHERE barcode_string='$_barcode' ";

$res = mysqli_query($conn,$sql);

$result = array();

while($row = mysqli_fetch_array($res)){
	array_push($result,
	array('barang'=>$row[2],
	'date'=>$row[3],
	'stock'=>$row[4]

	));
}

echo json_encode(array("result"=>$result));

mysqli_close($conn);

?>
