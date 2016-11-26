<?php
session_start();
$infoUser = null;
include('connexion_bdd.php');
if (isset($_SESSION['id'])) {
	$userID = $_SESSION['id']; // L'ID de l'utilisateur, sera utile un peu partout
	$reqInfoUser = $bdd->prepare('SELECT * FROM `eleves` WHERE id=?');
	$reqInfoUser->execute(Array($userID));
	$infoUser = $reqInfoUser->fetch();
}
?>