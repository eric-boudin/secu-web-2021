<?php
    session_id(random_int(0,99));
    session_start();
    if(!isset($_SESSION['admin'])){
        $_SESSION['admin'] = 0;
    }
    if($_GET  && $_GET['xss']) {
        $_SESSION['login'] = $_GET['xss'];
        if($_GET['xss'] == "Bernard") {
            $_SESSION['admin'] = 1;     
        }
        header("Location: http://localhost/Session%20Id/see.php");
    }
?>
<!doctype html>
<html lang="en">
    <head><title>Unprotection test</title></head>
    <body>
        <form><input type="text" name="xss"><input type="submit"></form>
    </body>
</html>
