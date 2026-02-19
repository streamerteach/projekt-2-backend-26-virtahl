<?php
$username = $_SESSION['username'];
//Hämta användardata från db
$sql = "SELECT * FROM profiles WHERE username = ?";
$result = $conn->prepare($sql);
$result->execute(["$username"]);
$row = $result->fetch();
