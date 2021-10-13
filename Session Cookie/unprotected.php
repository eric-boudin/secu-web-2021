<?php
    session_start();
    session_regenerate_id();
    if($_GET  && $_GET['xss']) {
        $_SESSION['login'] = $_GET['xss'];
        header("Location: http://localhost/Session%20Cookie/see.php");
    }
?>
<!doctype html>
<html lang="en">
    <head><title>XSS test</title></head>
    <body>
        <form><input type="text" name="xss"><input type="submit"></form>
    </body>
</html>

<!-- <script>alert(document.cookie)</script>