<form action="" method="post">
	<input type="text" name="url" placeholder="Enter an url"></input>
	<br>
	<input type="submit" name="button"></input>
</form>
<!-- " onmouseover='alert(1)' -->

<?php
	if(isset($_POST['button'])) {
		$url = $_POST['url'];
		echo '<a href="'. htmlspecialchars($url) . '">Click me!</a>';
	}
?>