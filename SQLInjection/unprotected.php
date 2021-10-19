<!doctype html>
<html lang="en">
    <head><title>Unprotection test</title></head>
    <body>
        <form><input type="text" name="xss"><input type="submit"></form>
    </body>
</html>
<?php

	if(isset($_GET['xss'])) {
		$user = 'eric';
		$password = 'persona5';
		$mysqli = new mysqli("localhost", $user, $password, "test");
		
		//QUERY
		
		//ok
		$name = $_GET['xss']; //"eric"; || "pomme' or '1' = '1";
		echo('<br>param = '. $name);
		$sql = 'SELECT value FROM registry WHERE name=\''.$name.'\'' ;
		echo('<br>sql = '. $sql);
		echo('<br>valeur recup :');
		$res = $mysqli->query($sql);
		foreach($res as $row) {
			echo $row['value'];
			echo("\n");
		}
		
		/*echo("<br>");
		
		//kos
		$name = "pomme' or '1' = '1";
		echo('<br>param = '. $name);
		$sql = 'SELECT value FROM registry WHERE name=\''.$name.'\'' ;
		echo('<br>sql = '. $sql);
		echo('<br>valeur recup :');
		$res = $mysqli->query($sql);
		foreach($res as $row) {
			echo $row['value'];
			echo("\n");
		}*/
	}
?>