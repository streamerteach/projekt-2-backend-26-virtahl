<?php

//samla användardata
if (! empty($_REQUEST['username']) && ! empty($_REQUEST['password'])&& isset($_REQUEST["register"])) {
    $username = test_input($_REQUEST['username']);

//Registrering: Hasha lösenordent och spara i databasen
    $hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
    print("<p>Du försöker logga in som " . $username . "</p>");
    print("<p>Du försöker logga med lösenhash" . $hashed_password . "</p>");
// ToDo: spara Hashen i databasen
    $sql = "INSERT INTO `profiles` (`id`, `username`, `realname`, `zipcode`, `bio`, `salary`, `preference`, `email`, `likes`, `role`, `passhash`)
VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
// Prepare the SQL query template
    $stmt = $conn->prepare($sql);
//Execute with values

    $stmt->execute([$username, "Matti Virtanen", "00160", "Jag är en snyggare man", 1000, 2, "matti@arcada.fi", 124, 4, $hashed_password]);
    print("<p>Skapade en ny användare</p>");

    print("<p>Hashed password stored in database: " . $hashed_password . "</p>");
}

//hantera login requesten: Verifiera inmatat lösenord med hash från db
if (! empty($_REQUEST['password'])&& isset($_REQUEST["login"])) {
    //toDo: Hämta sparade hashen från databasen
    $username = test_input($_REQUEST['username']);
    $sql    = "SELECT * FROM profiles WHERE username = ?";
    $result = $conn->prepare($sql);
    $result->execute([$username]);
    $row = $result->fetch();
    //hämta passhash
    $hash_from_db = $row["passhash"];
    print("<p>Hashen som finns i databasen: " . $hash_from_db . "</p>");

    //Verifying login
    if (password_verify($_REQUEST['password'], $hash_from_db)) {
        print("<p>password matches the hash, logging in...");
        // SKAPA SESSION
        $_SESSION['username'] = test_input($_REQUEST['username']);

    } else {
        print("<p>Fel lösenord, försök igen!");
    }
}
