<?php

    //Visa upp profilbild, hämta profildata från db
    include "model_account.php";

    $strunt_variabel = "Hej jag är en trevlig man";
    print($strunt_variabel);

    // Shorthand är alltså <?=$strunt_variabel
?>


    <h3> Här kan du editera din priofil</h3>
    <form action="profile.php" method ="GET">
    Namn:<input type="text" name="realname" value=  "<?=$row["realname"]?>" 
     ><br>
    Bio:<input type="text" name="bio" value=    "<?=$row["bio"]?>"> 
     <br>
    Lösenord:<input type="password" name="password"><br>
    <input type="submit" value="Uppdatera profil">
</form>

<!-- ToDo: Visa upp login/registreringsinformation