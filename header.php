<header>
    <!-- Logo och meny i headern -->
    <img src="../media/logo.svg" alt="Website logo" />
    <div id="logo">VirtApp</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="./">Home</a></li>
           
              
            <?php
            // Hälsa på återkommande användare
            if (isset($_SESSION['username'])) {
                //print("Välkommen tillbaka ". $_SESSION['username']);
                print("<li><a href='./profile.php'>". $_SESSION['username']."'s profile</a></li>");
            } else {
                print("<li><a href='./login.php'>Login</a></li>");
            }
            ?>
        </ul>
    </nav>
</header>