<form action="login.php" method="GET">
    <label for="username">Användarnamn</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Lösenord</label>
    <input type="password" id="password" name="password" required>

    <!-- two buttons – the value tells the model what to do -->
    <input type="submit" value="Logga in" name="login">
    <input type="submit" value="Registrera" name="register">
</form>
<?php include "model_login.php" ?>

<!-- ToDo: Visa upp login/registreringsinformation -->
 