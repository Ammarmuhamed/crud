<?php
$servername = "localhost";
$database_name = "crud";
$username = "root";
$password = "123";



try{
$conn = new PDO("mysql:host=$servername;dbname:$database_name",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "Connected successfully";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}

?>