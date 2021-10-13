<?php
	$userDB = 'eric';
	$passwordDB = 'persona5';
	$mysqli = new mysqli("localhost", $userDB, $passwordDB, "test");
	$updatePwd = $mysqli->prepare("UPDATE registry SET password= ? WHERE name= 'Eric'");
	$updatePwd->bind_param("s", $pwd);

	$pwd = "leRenard95/!";
	echo('<br>nouveau mot de passe pour eric = '. $pwd);
	
	$updatePwd->execute();
	
	$findMDP = $mysqli->prepare("SELECT password FROM registry WHERE name= 'Eric'");
	$findMDP->execute();
	foreach ($findMDP->get_result() as $row) {
		echo('<br>mot de passe d\'eric sur la bdd = '. $row['password']);
	}
?>