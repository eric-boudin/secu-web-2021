<?php
    
    session_set_cookie_params(600, '/', $_SERVER['HTTP_HOST'], true, true);
    session_start();
    session_regenerate_id();
    if($_GET  && $_GET['xss']) {
        $_SESSION['login'] = $_GET['xss'];
        header("Location: http://localhost/Session%20Cookie/see.php");
    }
    
?>
<!doctype html>
<html lang="en">
    <head><title>Protection test</title></head>
    <body>
        <form><input type="text" name="xss"><input type="submit"></form>
    </body>
</html>

<!-- <script>alert(document.cookie)</script>