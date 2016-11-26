<?php
include('\include\init.php');
$messages = Array();
$published = false;
if (isset($_POST['date_depart']) && isset($_POST['h_depart']) && isset($_POST['min_depart'])&& isset($_POST['depart']) && isset($_POST['date_arrivee']) && isset($_POST['h_arrivee']) && isset($_POST['min_arrivee']) && isset($_POST['destination']) && isset($_POST['message'])) {
	if ($_POST['date_depart'] == '')
		array_push($messages, 'Veuillez indiquer votre date de départ.');
	if (($_POST['h_depart'] == '') || ($_POST['min_depart'] == ''))
		array_push($messages, 'Veuillez indiquer votre heure de départ.');
	if ($_POST['depart'] == '')
		array_push($messages, 'Veuillez indiquer votre ville de départ.');
	if ($_POST['date_arrivee'] == '')
		array_push($messages, 'Veuillez indiquer votre date d\'arrivée.');
	if (($_POST['h_arrivee'] == '') || ($_POST['min_arrivee'] == ''))
		array_push($messages, 'Veuillez indiquer votre heure d\'arrivée.');
	if ($_POST['destination'] == '')
		array_push($messages, 'Veuillez indiquer votre destination.');
	function addZeros($str, $l=2) {
		while (strlen($str) < $l)
			$str = '0'. $str;
		return $str;
	}
	function dateTimeToString($jma,$h,$min,$s = 0) {
		return $jma.' '.addZeros($h).':'.addZeros($min).':'.addZeros($s);
	}
	if (empty($messages)) {
		$ajoutAnnonce = $bdd->prepare('INSERT INTO `annonces` SET auteur=?,horaire_depart=?,depart=?,horaire_arrivee=?,destination=?,message=?');
		$ajoutAnnonce->execute(Array($userID,
			dateTimeToString($_POST['date_depart'],$_POST['h_depart'],$_POST['min_depart']),
			$_POST['depart'],
			dateTimeToString($_POST['date_arrivee'],$_POST['h_arrivee'],$_POST['min_arrivee']),
			$_POST['destination'],$_POST['message']
		));
		$published = true;
	}
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
			<?php
			if (!empty($messages)) {
				?>
				<p class="echec">
				<?php
				foreach ($messages as $message)
					echo $message .'<br />';
				?>
				</p>
				<?php
			}
			?>
			<?php
			if ($published) {
				?>
				<div id="succes">Votre annonce a été publiée<br />
				<a href="annonces.php">Retour à la liste des annonces</a></div>
				<?php
			}
			else {
				?>
				<div class="container">
				<div class="jumbotron">
				<h1>Publier une annonce</h1>
				<?php
				include('\include\forms.php');
				?>
				<form method="post" action="publier-annonce.php">
					<fieldset>
						<h2>Départ</h2>
						
						<p><label><span class="form-input">Date :</span><span class="form-value"><input type="date" name="date_depart" value="<?php print_value('date_depart'); ?>" required /></span></label></p>
						<p><label><span class="form-input">Heure :</span><span class="form-value"><input type="text" name="h_depart" value="<?php print_value('h_depart'); ?>" size="1" required />h<input type="text" name="min_depart" value="<?php print_value('min_depart'); ?>" size="1" /></span></label>
						<p><label><span class="form-input">Départ :</span><span class="form-value"><input type="text" name="depart" value="<?php print_value('depart'); ?>" required /></span></label></p></p>
					</fieldset>
					<fieldset>
						<h2>Arrivée</h2>
						<p><label><span class="form-input">Date :</span><span class="form-value"><input type="date" name="date_arrivee" value="<?php print_value('date_arrivee'); ?>" required /></span></label></p>
						<p><label><span class="form-input">Heure :</span><span class="form-value"><input type="text" name="h_arrivee" value="<?php print_value('h_depart'); ?>" size="1" required />h<input type="text" name="min_arrivee" value="<?php print_value('min_arrivee'); ?>" size="1" required /></span></label></p>
						<p><label><span class="form-input">Destination :</span><span class="form-value"><input type="text" name="destination" value="<?php print_value('destination'); ?>" required /></span></label></p>
					</fieldset>
					<p><label><span class="form-input">Message de l'annonce :</span><span class="form-value"><textarea name="message" value="<?php print_value('message'); ?>" rows="4" /></textarea></label></p>
					<input type="submit" value="Publier l'annonce" class="btn btn-default" />
				</form>
				<?php
			}
			?>
		</div>
	</body>
</html>