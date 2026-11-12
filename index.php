<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Gabarit HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php

include("includes/fonctions.php");

$ressources=lire();

foreach ($ressources As $res){
	echo '<article>';
		echo '<h1>'.$res['titre'].'</h1>';
		echo '<p>'.$res['description'].'</p>';
		$chemin=$res['type']=='document' ? "uploads/".$res['fichier'] : $res['url'];
		echo '<a href="'.$chemin.'"target="_blank">voici un lien pour plus dinformations</a>';
		echo'<p>'.$res['date'].'</p>';
	echo'</article>';
}
?>


</body>
</html>