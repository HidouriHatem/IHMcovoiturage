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
		<link href="css/logo.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/demo.css" rel="stylesheet">
	</head>
	<body>
		<?php
		include('\include\menu.php');


// connects to the database
//$mysqli = new mysqli("localhost", "root", "");

$query = "SELECT * FROM `eleves` WHERE id = '".$_SESSION['id']."'";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>First name:</b> ". $row['id'];
        echo "<br /><b>Last name:</b> ".$row['nom'];
        echo "<br /><b>Program:</b> ".$row['prenom'];
        echo "<br /><b>Year:</b> ".$row['code'];
        echo "<br /><b>Gender:</b> ".$row['etage'];
        echo "</div>"   
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>