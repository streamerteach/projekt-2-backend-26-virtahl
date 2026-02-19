<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elliot dejtar</title>
    <link rel="stylesheet" href="./style.css">
  
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <h2>Din dejtingannons</h2>
                <?php include "./view_account.php" ?>
                <!-- Eller "./view_register.php -->
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Virpi<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>