<?php
//$bdd = new PDO('mysql:host=localhost;dbname=appcovoit', 'root', '');
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=appcovoit', 'root', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>