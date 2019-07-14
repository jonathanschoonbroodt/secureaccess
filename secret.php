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

	if (isset($_POST['mdp']) AND $_POST ['mdp']=='Kangourou') {
	 
	 echo '<h1>Données confidentielles :</h1>' . '<a href=https://www.nsa.gov/news-features/declassified-documents/ufo/>Cliquez-ici</a> pour accéder aux données' ;
		 }

		 else {
		 	echo 'Accès refusé';
		 }

	 ?>

	 </body>
</html>