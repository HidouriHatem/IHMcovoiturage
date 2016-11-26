<?php
include('\include\init.php');
$idsIncorrects = false;
if (isset($_POST['login']) && isset($_POST['code'])) {
	$idsCorrects = $bdd->prepare('SELECT id FROM `eleves` WHERE login=? AND code=?');
	$idsCorrects->execute(Array($_POST['login'],$_POST['code']));
	if ($idUtilisateur = $idsCorrects->fetch()) {
		$_SESSION['id'] = $idUtilisateur['id'];
		header('location: index.php');
	}
	else
		$idsIncorrects = true;
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Covoiturage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include('\include\menu.php');
		?>
		<div id="container">
		<h1><center>         Connexion</h1>
		<?php
		if ($idsIncorrects)
			echo '<div class="alert alert-warning">
    <strong>Erreur</strong> Login ou mot de passe incorrect !
  </div>';
		?>

		<div class="container">        
		<form method="post" action="connexion.php">
		<label for="login">Login:</label>
		<input type="text" name="login" class="form-control" placeholder="Enterer login"/><br />
		<label for="login">Mot de passe:</label>
		<input type="password" name="code" class="form-control" placeholder="Enterer mot de passe"/><br />
		<input type="submit" value="Connexion" class="btn btn-default" />
		</form>
		</div>
		</div>
		</div></center>
	</body>
</html>

