<form action="" method="post">
	<input type="text" name="url" placeholder="Enter an url"></input>
	<br>
	<input type="submit" name="button"></input>
</form>
<!--  javascript:alert('1') -->

<?php
	if(isset($_POST['button'])) {
		$url = $_POST['url'];
		$isNotValid = preg_match("*javascript:*", $url) || !preg_match("/^https/", $url);
		if(!$isNotValid)
			echo '<a href="' . $url . '">Click me!</a>';
	}
?>