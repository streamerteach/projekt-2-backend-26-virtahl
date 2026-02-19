<div class="landing-page">
    

<h2>Annonser</h2>
<p>Följande annonser finns på dejtingsajten</p>

<?php include "model_profiles.php" ?>

<!-- ToDo: Visa upp annonserna vettigt -->
 <div class="profile">
    <p>Namn: <?= $row["realname"] ?> </p>
     <p>Bio: <?= $row["bio"] ?> </p>
    <p>Användarnamn: <?= $row["username"] ?> </p>
       <p>Postnummer: <?= $row["zipcode"] ?> </p>
       <p>Lön: <?= $row["salary"] ?> </p>

       </div>

       </div>