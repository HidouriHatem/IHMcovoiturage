<?php
 // Liste de fonctions utiles pour les formulaires

// Affiche la valeur d'une entrée dans l'input, si elle existe
function print_value($cle) {
	if (isset($_POST[$cle]))
		echo str_replace('"','&quot;',$_POST[$cle]);
}
?>