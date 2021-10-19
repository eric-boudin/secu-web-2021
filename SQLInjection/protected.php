<!doctype html>
<html lang="en">
    <head><title>Protection test</title></head>
    <body>
        <form><input type="text" name="xss"><input type="submit"></form>
    </body>
</html>
<?php

	if(isset($_GET['xss'])) {
		$user = 'eric';
		$password = 'persona5';
		$mysqli = new mysqli("localhost", $user, $password, "test");
		
		//REQUETE
		
		echo("<br>Requete préparé");
		$stmt = $mysqli->prepare('SELECT value FROM registry WHERE name= ?');
		$stmt->bind_param("s", $name);

		//ok
		$name = $_GET['xss'];// 'eric'; || "pomme' or '1' = '1";
		echo('<br>param = '. $name);
		$stmt->execute();
		echo('<br>valeur recup :');
		foreach ($stmt->get_result() as $row) {
			echo $row['value'];
			echo("\n");
		}
		
		/*echo("<br>");

		//ko
		$name = "pomme' or '1' = '1";
		echo('<br>param = '. $name);
		$stmt->execute();
		echo('<br>valeur recup :');
		foreach ($stmt->get_result() as $row) {
			echo $row['value'];
			echo("\n");
		}*/
		$stmt->close();
	}
?>