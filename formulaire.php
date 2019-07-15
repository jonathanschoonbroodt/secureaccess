<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NSA | Secure Access</title>
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
<body class="text-center">
	<img src="logo-nsa.png" class="logo">
	<h1>Secure Access</h1>
	<p>Insert password for access</p>	
	<form method="post" action="secret.php">
		<label for="password"><input name="password" type="password" placeholder="password"/></label>
		<input type="submit" value="Access"/>
	</form>
</body>
</html>