<!doctype html>
<html lang="en">
    <head><title>XSS test</title></head>
    <body>
        <form><input type="text" name="xss"><input type="submit"></form>
        <p>Result: <?= htmlspecialchars($_GET['xss']) ?></p>
    </body>
</html>

<!-- <script>alert("YOU HAVE BEEN HACKED !!!")</script> if we put this in the input without encrypt data, il will be execute--> 