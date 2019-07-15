<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NASA | Données confidentielles</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
</head>
	<body>

	<?php 

	// si le formulaire n'est pas vide et que le mot de passe est correct
	if (isset($_POST['password']) AND $_POST ['password']=='Kangourou') {
	
	//on renvoie vers les données 
	 echo '<h1>Données confidentielles :</h1>' . '<a href=https://www.nsa.gov/news-features/declassified-documents/ufo/>Cliquez-ici</a> pour accéder aux données' ;
		 }
		 // sinon on refuse l'accès
		 else {
		 	echo 'Accès refusé';
		 }

	 ?>

	 </body>
</html>