<html>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Covoiturage</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="annonces.php">Annonces</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php
	if (!$infoUser) {
		?>
      <li><a href="inscription.php"><span class="glyphicon glyphicon-sound-7-1"></span> Inscription</a></li>
	  <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connection</a></li>
	  <?php
	}
	else {
		?>
	  <li><a href="publier-annonce.php">Pubblier annonce</a></li>
      <li><a href="compte.php"><span class="glyphicon glyphicon-envelope"></span> Mon compte</a></li>
	  <li><a href="deconnexion.php"><span class="glyphicon glyphicon-link"></span> Déconnection</a></li>
	  <?php
	}
	?>
    </ul>
  </div>
</nav>
</header>
<body><br><br>