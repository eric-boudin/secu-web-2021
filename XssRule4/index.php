<form action="" method="post">
	<input type="text" name="content" placeholder="Choose the text color !"></input>
	<br>
	<input type="submit" name="button"></input>
</form>
<!-- " onmouseover='alert("YOU HAVE BEEN HACKED")' -->

<?php
	setcookie("name","Eric");
	if(isset($_POST['button'])) {
		$content = $_POST['content'];
		echo '<span style="color: '. htmlspecialchars($content) .'"> Hello world ! </span>';
	}
?>
