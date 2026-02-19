<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); //on a live server log errors, do NOT display them
// Start the session
session_start();
// Allt möjligt viktigt som vi använder ofta, sessionshantering, form validation etc.

// En funktion som tar bort whitespace, backslashes (escape char) och gör om < till html safe motsvarigheter
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Databaskonfiguration
$servername = "localhost";
$dbname = "bistromd";
$username = "bistromd";
include "hemlis.php";
// hemlis.php ser ut såhär:
// <?php
//  $password = "sup3rh3mlis";
//dbname "virtanee"
//$username = "virtanee"


//vi skapar en instans av PDO klassen som vi kallar $conn 

 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  print "Connected successfully";

?>
