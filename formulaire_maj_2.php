<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NASA | Accéder à des données confidentielles</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
</head>
<body>

<?php
// Le mot de passe n'a pas été envoyé 
if (!isset($_POST['mdp']) OR $_POST['mdp'] == "")

// On charge le formulaire
{
echo 
	'<h1>Accès sécurisé</h1>' . 
	'<h2>Insérez votre mot de passe pour accéder aux données confidentielles</h2>' .
		
		'<form method="post" action="formulaire_maj_2.php">
			<label for="mdp"><input name="mdp" type="password" placeholder="Insérez le mot de passe"/></label>
			<input type="submit" value="Accéder aux données sécurisées"/>
		</form>' ;
} 

else
	if ($_POST['mdp'] != "kangourou")
	{
	 echo 'Mot de passe incorrect' ;
	} 

else
	if ($_POST['mdp'] == "kangourou")
	{
	 echo '<h1>Données confidentielles :</h1>' . '<a href=https://www.nsa.gov/news-features/declassified-documents/ufo/>Cliquez-ici</a> pour accéder aux données' ;
	} ;

?>

</body>