<?php
if (!$infoUser) {
		?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Covoiturage</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Accueil</a></li>
        <li class ="#"="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Annonces <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="annonces.php">Parcourir</a></li>
            <li><a href="connexion.php">Publier</a></li>
			<li><a href="connexion.php">Chercher</a></li>
          </ul>
        </li>
        <li><a href="apropos">A propos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="inscription.php"><span class="glyphicon glyphicon-sound-7-1"></span> Inscription</a></li>
		<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connection</a></li>
      </ul>
    </div>
</nav>
<?php
	}
	else {
		?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Covoiturage</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Accueil</a></li>
        <li class ="#"="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Annonces<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="annonces.php">Parcourir</a></li>
            <li><a href="publier-annonce.php">Publier</a></li>
			<li><a href="chercher-annonce.php">Chercher</a></li>
          </ul>
        </li>
        <li><a href="apropos.php">A propos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="compte.php"><span class="glyphicon glyphicon-sound-7-1"></span> Compte</a></li>
		<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnection</a></li>
      </ul>
    </div>
</nav>
<?php 
}
	?>
<br><br><br>