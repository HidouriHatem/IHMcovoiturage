<?php
include('\include\init.php');
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

		<!-- Custom styles for this template -->
		<link href="css/demo.css" rel="stylesheet">
	</head>
	<body>
		<?php
		include('\include\menu.php');
		?>
		<!-- Test -->
		<div class="container">
		<div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="images/ba.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
             <!-- test si l'uilisateur est connecté ou non -->
			<?php
		if ($infoUser) {
			?>
			<h1>Covoiturage</h1>
			<p>Bienvenue <strong><?php echo $infoUser['prenom']; ?> <?php echo $infoUser['nom']; ?></strong>.</p>
			<p><a class="btn btn-primary" href="deconnexion.php" role="button">Déconnexion</a>
			<?php
		}
		else {
			?>
			<p>Vous n'êtes pas connecté. Connectez-vous ici :<br /> 
		<form class="well form-horizontal" method="post" action="connexion.php">
		<label for="login">Login: </label>
		<input type="text" name="login" class="form-control" size="30" placeholder="Enterer login"/><br />
		<label for="login">Mot de passe:</label>
		<input type="password" name="code" class="form-control" placeholder="Enterer mot de passe"/><br />
		<input type="submit" value="Connexion" class="btn btn-default" />
		</form>
			</p>
			<p>Pas encore inscrit ? Cliquez <a href="inscription.php">ici</a>.</p>
			<?php
		}
		?>
			</div>
				</div>
            <!-- /.col-md-4 -->
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   <h4> Si le covoiturage est un mot qui revient sur toutes les lèvres, c'est bien qu'il y a une raison </h4>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Faire des économies</h2>
                <p>Votre voiture vous coûte sûrement plus cher que vous ne le pensez !
En moyenne, vous dépensez 900€ en carburant par an. Les péages coûtent en moyenne 250€ par an à un Français motorisé.
La dépréciation de votre véhicule revient à 1 150€ par an pour une petite voiture essence, et peut aller jusqu'à 4 700€ pour un monospace diesel !
Rajoutez-y les coûts de l'entretien, de l'assurance, de votre crédit, le contrôle technique et la carte grise, on atteint rapidement un total s'étalant de 3000 à 9 000€ ! Ce qui fait entre 260 et 730€ par mois !
Avec le covoiturage, vous pouvez diviser une partie de ces dépenses par trois ou par quatre !
Source : ADEME, 2010</p>
            </div>
            <div class="col-md-4">
                <h2>Rendre service ou se déplacer plus facilement</h2>
                <p>LLorsqu'on n'a pas de voiture, se déplacer peut vite devenir compliqué en cas de problème ou d'absence de transports en commun. Prendre un passager à son bord peut lui permettre de trouver une solution pour se rendre à son travail ou un rendez-vous. Un passager qui ne possède pas de voiture peut donc faire un trajet de porte à porte. 
Sinon, vous pouvez aussi choisir ce qui vous convient le mieux en modulant l'utilisation des différents types de transport. Avez-vous déjà essayé la multimodalité ?</p>
            </div>
            <div class="col-md-4">
                <h2>Faire un geste pour l'environnement</h2>
                <p>Une voiture émet en moyenne 2 à 3 tonnes de CO2 par an, soit trois fois son poids ! Nous sommes 93% d'automobilistes à être seuls dans notre voiture pour nous rendre au travail. En fait, qui n'a jamais eu affaire à un embouteillage interminable sur son trajet du matin ? 
Saviez-vous que les embouteillages peuvent faire doubler la consommation de votre véhicule. A cause des embouteillages, vous pouvez même atteindre les 16 litres au 100 km !
En prenant l'initiative de supprimer une voiture du trafic grâce au covoiturage, nous contribuons au respect de l’environnement.</p>
                
            </div>
        </div>
		</div>
		<!-- end test -->
		</div>
<?php include('\include\footer.php'); ?>