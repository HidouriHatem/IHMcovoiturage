<?php
include('\include\init.php');
include('\include\connexion_bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Covoiturage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include('\include\menu.php');
		?>
		<div class="container">
		<div class="jumbotron">
		<h1>Mon compte</h1>
		<p>Bienvenue <strong><?php echo $infoUser['prenom']; ?> <?php echo $infoUser['nom']; ?></strong>.</p>
			<p><a class="btn btn-primary" href="deconnexion.php" role="button">Déconnexion</a><br>
			<p>Içi vous pouvez modifier les informations de votre profil.</p>
		<div class="container">
			<h1>Votre profil:</h1>
<?php
$info = "SELECT * FROM `eleves` WHERE id = '1'";
while($donnees = mysql_fetch_array($info))
            {
				echo $donnees['id'];
			}	
?>
		</div>
		</div>
	</body>
</html>