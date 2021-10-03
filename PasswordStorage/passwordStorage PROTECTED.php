<?php
	$userDB = 'eric';
	$passwordDB = 'persona5';
	$mysqli = new mysqli("localhost", $userDB, $passwordDB, "test");

	$password = "leRenard95/!";
	echo('<br>bon mot de passe = '. $password);
	$password_wrong = "non";
	echo('<br>mauvais mot de passe = '. $password_wrong);
	
	$pwd = password_hash($password, PASSWORD_BCRYPT);
	
	echo('<br>bon mdp salé et haché (sel généré automatiquement)= '. $pwd);
	
	$findMDP = $mysqli->prepare("SELECT password FROM registry WHERE name= 'Florian'");
	$findMDP->execute();
	$res = null;
	foreach ($findMDP->get_result() as $row) {
		$res = $row['password'];
		echo('<br>mot de passe d\'eric sur la bdd = '. $row['password']);
	}
	$verified =  password_verify($password, $res);
	$verified_wrong = password_verify($password_wrong, $res);
	echo('<br><br>verifier par password_verify() pour plus de securité');
	if(password_verify($password, $res)){
		echo('<br>bon mot de passe = '. $password);
	}
	if(!password_verify($password_wrong, $res)){
		echo('<br>mauvais mot de passe = '. $password_wrong);
	}
	
?>