<?php
    session_start();
?>
<!doctype html>
<html lang="en">
    <head><title>See</title></head>
    <body>
        <p>Login: <?= $_SESSION['login']?> is <?php  
            if($_SESSION['admin'] == 0) { 
            echo("isn't an admin");
            } else if ($_SESSION['admin'] == 1) { 
                echo("an admin");
            } 
        ?></p>
    </body>
</html>