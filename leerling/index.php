<?php include ("login.php");
$id = $_COOKIE['leerlingid'];
$mysql_query = "SELECT * FROM tblleerlingen WHERE LeerlingID like $id;";
$result = mysqli_query($db,$mysql_query);
$row = mysqli_fetch_assoc($result);
$logintoken = $row['LoginToken'];
if(isset($_COOKIE['logintoken']) && $logintoken == $_COOKIE['logintoken']){
    $_SESSION['leerlingid'] = $id;
    echo '<script>window.location.replace("https://colomaplus.smartpass.one/leerling/kaart.php");</script>';
}
      ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#ECEFF1" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" /> 
<link rel="stylesheet" href="../css/style.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
<div class="container">
<img id="logo" src="../images/Smartpass.png">
				<h2>Leerling</h2>
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
			<a href="../"><h4>Login als leerkracht</h4></a>
		</div>
</body>
</html>