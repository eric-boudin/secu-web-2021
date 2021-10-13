<?php
	$user = 'eric';
	$password = 'persona5';
	$mysqli = new mysqli("localhost", $user, $password, "test");
	
	//QUERY
	
	//ok
	$name = "eric";
	echo('<br>param = '. $name);
	$sql = 'SELECT value FROM registry WHERE name=\''.$name.'\'' ;
	echo('<br>sql = '. $sql);
	echo('<br>valeur recup :');
	$res = $mysqli->query($sql);
	foreach($res as $row) {
        echo $row['value'];
		echo("\n");
    }
	
	echo("<br>");
	
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
    }
?>