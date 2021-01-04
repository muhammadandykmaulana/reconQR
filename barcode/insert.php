<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progress 1";

$string = $_POST["barcode_string"];
$barang=$_POST["nama_barang"];
$stock=$_POST["stock"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO barcode(barcode_string, nama_barang, stock)
VALUES ('$string', '$barang', '$stock')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
