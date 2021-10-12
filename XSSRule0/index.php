<form action="" method="post">
	<input type="text" name="content" placeholder="Enter something"></input>
	<br>
	<input type="submit" name="button"></input>
</form>
<!-- </div><script>alert("YOU HAVE BEEN HACKED")</script> -->

<?php
	if(isset($_POST['button'])) {
		$content = $_POST['content'];
		echo '<div name='. $content .'> Hello world ! </div>';
	}
?>
