<?php

$ServerName = "localhost";
$username ="root";
$password = "";
$dbName = "duangjai";
try {
  $con = new PDO("mysql:host=$ServerName;dbname=$dbName", $username, $password);

  $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>