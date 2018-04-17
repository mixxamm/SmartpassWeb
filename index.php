<?php include ("login.php"); ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Smartpass | Leerkracht</title>
        <meta name="theme-color" content="#ECEFF1" />
        <meta name="viewport" content="width=device-width, initial-scale=0.8">

	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/style.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

<div class="container">
<img id="logo" src="images/Smartpass.png">
				<h2>Leerkracht</h2>
			<form id="login" action="" method="POST">
			<div id="gebruikersnaam" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input name="gebruikersnaam" class="mdl-textfield__input" type="text">
			<label class="mdl-textfield__label">Gebruikersnaam</label>
			</div>
			<div id="wachtwoord" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input name="wachtwoord" class="mdl-textfield__input" type="password">
			<label class="mdl-textfield__label">Wachtwoord</label>
			</div>
			
			<input id="loginknop" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="submit" value="Log In">
			</form>
			
			<div><?php echo $error; ?></div>
			</br>
			<a href="#"><p class="small">Wachtwoord vergeten?</p></a>
		</div>
</body>
</html>