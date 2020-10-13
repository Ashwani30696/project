 <?php

$siteurl = "http://localhost/traning/php/";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234567";
$dbname = "store";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  //echo "Connected successfully"; 
