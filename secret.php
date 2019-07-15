<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NSA | Access denied</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 8 BIT look a like font -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Stylesheet CSS -->
    <link href="css/custom.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.png" />
</head>
	<body>

	<?php 

	// si le formulaire n'est pas vide et que le mot de passe est correct
	if (isset($_POST['password']) AND $_POST ['password']=='kangourou') {
	//on renvoie vers les données 
	 	echo 
	 	'<body class="text-center">
			<img src="logo-nsa.png" class="logo">
			<h1>Secure Access</h1>
			<p>Correct password, access authorised. Click <a href="https://www.nsa.gov/news-features/declassified-documents/ufo/">here</a> to access informations.</p>	
			<p><a href="formulaire.php">Disconnect</a></p>

		</body>
		</html>';
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