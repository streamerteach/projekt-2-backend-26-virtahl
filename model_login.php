<?php 

//Registrering: Hasha lösenordent och spara i databasen
$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
// ToDo: spara Hashen i databasen
$sql = "INSERT INTO `profiles` (`id`, `username`, `realname`, `zipcode`, `bio`, `salary`, `preference`, `email`, `likes`, `role`, `passhash`) 
VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?,?, ?)";
// Prepare the SQL query template
$stmt = $conn->prepare($sql);
//Execute with values

$stmt->execute(["Matti", "Matti Virtanen", "00160", "Jag är en snyggare man", 1000, 2, "matti@arcada.fi", 124, 4, $hashed_password]);
print("<p>Skapade en ny användare</p>");


print("<p>Hashed password stored in database: " . $hashed_password."</p>");




//hantera login requesten: Verifiera inmatat lösenord med hash från db
if (!empty($_REQUEST['password'])) {
    //toDo: Hämta sparade hashen från databasen

    //Verifying login
   if (password_verify($_REQUEST['password'], $hashed_password)) {
        print("<p>password matches the hash, logging in...");
    } else {
        print("<p>Fel lösenord, försök igen!");
    }
}

