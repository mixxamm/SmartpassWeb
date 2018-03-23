<?php
include("connect.php");
include ("wachtwoordinstellen.php");
session_start();
$user_name = $_SESSION['login_user'];
?>

<html>
    <head>
        	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/style.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
        <div class="topcorner"><p>Ingelogd als <?php echo $user_name; ?></p></div>
        <div class="container">
        		<h2>Nieuw wachtwoord</h2>
			<form id="wwveranderen" action="" method="POST">
			<div id="oudwachtwoord" class="mdl-textfield mdl-js-textfield">
			<input name="oudwachtwoord" class="mdl-textfield__input" type="password">
			<label class="mdl-textfield__label">Oud wachtwoord</label>
			</div>
			<div id="wachtwoord1" class="mdl-textfield mdl-js-textfield">
			<input name="wachtwoord1" class="mdl-textfield__input" type="password">
			<label class="mdl-textfield__label">Nieuw wachtwoord</label>
			</div>
			<div id="wachtwoord2" class="mdl-textfield mdl-js-textfield">
			<input name="wachtwoord2" class="mdl-textfield__input" type="password">
			<label class="mdl-textfield__label">Nieuw wachtwoord bevestigen</label>
			</div>
			
			<input id="veranderwachtwoord" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="submit" value="Wachtwoord veranderen">
			<p><?php echo $error, $gelukt, $nietgelukt, $passnm; ?></p>
			</form>
			</div>
    </body>
</html>
