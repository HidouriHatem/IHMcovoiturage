<?php
include('\include\init.php');
if ($infoUser) // Si l'user est déjà connecté, on le redirige vers la page d'accueil
	header('location: index.php');
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
		$messages = Array(); // Liste des messages d'erreur en cas de pb de saisie du formulaire
		$inscrit = false;
		if (isset($_POST['login']) && isset($_POST['code']) && isset($_POST['confirm']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['surnom']) && isset($_POST['etage']) && isset($_POST['possedeVoiture'])) {
			// Si l'utilisateur a validé le formulaire
			if ($_POST['login'] == '')
				array_push($messages, 'Veuillez entrer votre login.');
			if ($_POST['code'] == '')
				array_push($messages, 'Veuillez entrer votre mot de passe.');
			if ($_POST['confirm'] == '')
				array_push($messages, 'Veuillez retaper votre mot de passe.');
			elseif ($_POST['code'] != $_POST['confirm'])
				array_push($messages, 'Vous avez fait une erreur en retapant votre mot de passe. Veuillez réessayer');
			if ($_POST['nom'] == '')
				array_push($messages, 'Veuillez entrer votre nom.');
			if ($_POST['prenom'] == '')
				array_push($messages, 'Veuillez entrer votre prénom.');
			if ($_POST['etage'] == '')
				array_push($messages, 'Veuillez entrer votre age.');
			$loginExistant = $bdd->prepare('SELECT * FROM `eleves` WHERE login=?');
			$loginExistant->execute(Array($_POST['login']));
			if ($loginExistant->fetch())
				array_push($messages, 'Le login "'. $_POST['login'] .'" existe déjà. Veuillez en choisir un autre.');
			if (empty($messages)) {
				// On enregistre l'utilisateur
				$requeteInscription = $bdd->prepare('INSERT INTO `eleves` SET login=?,code=?,nom=?,prenom=?,surnom=?,etage=?,possedeVoiture=?'); // Les ? sont indiqués après
				$requeteInscription->execute(Array($_POST['login'],$_POST['code'],$_POST['nom'],$_POST['prenom'],$_POST['surnom'],$_POST['etage'],($_POST['possedeVoiture']=='oui') ? 1:0));
				$inscrit = true;
				$_SESSION['id'] = $bdd->lastInsertId(); // L'ID qui vient d'être enregistré
			}
		}
		?>
		<div class="container">
			<?php
			if ($inscrit) {
				?>
				<p class="succes">
					Vous êtes à présent inscrit !<br />
					Cliquez <a href="index.php">ici</a> pour retourner à l'accueil.
				</p>
				<?php
			}
			elseif (!empty($messages)) {
				?>
				<p class="echec">
				<?php
				foreach ($messages as $message)
					echo $message .'<br />';
				?>
				</p>
				<?php
			}
			if (!$inscrit) {
				include('\include\forms.php'); // Liste de fonctions utiles pour les formulaires
				?>
					<div class="container">
					<div class="form-group">
					<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Inscription</h1>
            <div class="account-wall">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               	</div>
	            </div> 
				<div class="main-login main-center">
				<form method="post" action="inscription.php">
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Login: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="login" id="login"  placeholder="Entrer un login" value="<?php print_value('login'); ?>" required/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Mot de passe: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="code" id="code"  placeholder="Entrer un mot de passe" value="<?php print_value('code'); ?>" required/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Confirmer mot de passe: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmer le mot de passe" value="<?php print_value('confirm'); ?>" required/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nom: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nom" id="nom"  placeholder="Entrer un nom" value="<?php print_value('nom'); ?>" required/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Prénom: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Entrer un prénom" value="<?php print_value('prenom'); ?>" required/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Surnom: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="surnom" id="surnom"  placeholder="Entrer un surnom" value="<?php print_value('surnom'); ?>"/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Age: </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="etage" id="etage"  placeholder="Entrer un age" value="<?php print_value('etage'); ?> "required/>
								</div>
							</div>
						</div>

				<p><span class="form-input">Possédez-vous une voiture ?</span><span class="form-value"><label class="radio-label"><input type="radio" name="possedeVoiture" value="oui"<?php if (!isset($_POST['possedeVoiture']) || ($_POST['possedeVoiture'] == 'oui')) echo ' checked="checked"'; ?> /> Oui</label><label class="radio-label"><input type="radio" name="possedeVoiture" value="non"<?php if (isset($_POST['possedeVoiture']) && ($_POST['possedeVoiture'] == 'non')) echo ' checked="checked"'; ?> /> Non</span></label></p>
				<button type="submit" value="Inscription" class="btn btn-primary btn-sm">Inscription</button>  <button type="submit" value="Inscription" class="btn btn-secondary btn-sm">Mot de passe oublié?</button>
				</form>
				
				
				
				<br><br><br>
				<?php
			}
			?>
		</div>
	</body>
</html>