<?php
$servername = "localhost";
$username = "jeremydata";
$password = "b302937ba5";

try {
    $conn = new PDO("mysql:host=$servername;dbname=JEU", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>