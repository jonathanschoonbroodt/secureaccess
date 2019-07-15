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
	if (isset($_POST['password']) AND $_POST ['password'] == 'Kangourou') {
	//on renvoie vers les données 
	 echo '<h1>Données confidentielles :</h1>' . '<a href=https://www.nsa.gov/news-features/declassified-documents/ufo/>Cliquez-ici</a> pour accéder aux données' ;
		 }
		 // sinon on refuse l'accès
		 else {
		 	echo 
		 	'<body class="text-center">
				<img src="logo-nsa.png" class="logo">
				<h1>Secure Access</h1>
				<p>Incorrect password, access denied. Please, <a href="formulaire.php">retry</a>.</p>	
			</body>
			</html>';
		 }
	 ?>

	 </body>
</html>