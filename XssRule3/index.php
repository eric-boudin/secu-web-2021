<form action="" method="post">
	<input type="text" name="content" placeholder="Enter something"></input>
	<br>
	<input type="submit" name="button"></input>
</form>
<!-- document.cookie -->

<?php
	setcookie("name","Eric");
	if(isset($_POST['button'])) {
		$content = $_POST['content'];
		echo '<script> alert("'. htmlspecialchars($content) .'") </script>';
	}
?>
