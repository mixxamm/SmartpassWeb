<?php
include("connect.php");
session_start();

?>

<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="refreshform.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>
	<meta charset="utf-8">
	<title>Smartpass</title>
	 <meta name="theme-color" content="#ECEFF1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/style.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        
        <!-- mdl select -->
        <link rel="stylesheet" href="getmdl-select/getmdl-select.min.css">
<script defer src="getmdl-select/getmdl-select.min.js"></script>

</head>
<script>
function SubmitFormData() {
    var id = $("#leerling").val();
    $.post("refreshform.php", { id:id},
    function(data) {
	 $('#myForm')[0].reset();
    });
}
</script>
<body scroll="no" style="overflow: hidden">
	<div class="container">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Leerling te laat</h2>
			</div>
<h1>Selecteer een klas <br></h1>

<td style="text-align: center; height: 60px">
<form id="myForm" method="post">
<?php

$mysql_queryklas = "select * from tblklassen;";
$resultklas = mysqli_query($db,$mysql_queryklas);
$rowklas = mysqli_fetch_array($resultklas,MYSQLI_ASSOC);
echo '<select style="text-align:center;" id="klas" name="klas">';
echo "<option value=''>Selecteer een klas</option>";
do {
echo '<option value="'.$rowklas['KlasNr']. '">'.$rowklas['Klas'].'</option>';
}
while ($rowklas = $resultklas->fetch_assoc());
echo '</select>';
?>

<h1 style="text-align: center; height: 60px">Selecteer een leerling</h1>

<select name="leerling" id="leerling"><option>Selecteer eerst een klas <?php include("llnweer.php"); ?></option></select>
<button id="submitFormData" onclick="SubmitFormData();" class="mdl-button mdl-js-button mdl-button--raised" type="button">Bevestig</button>
</form>
<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
<script>
(function() {
  'use strict';
  window['counter'] = 0;
  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#submitFormData');
  showToastButton.addEventListener('click', function() {
    'use strict';
    var data = {message: "<?php echo $_SESSION['data'] ?>" };
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
}());
</script>
<p style="text-align:center;"><a href = "logout.php">Log uit</a></p>
<p style="text-align:center;"><a href = "leerlingen.php">Te late leerlingen bekijken</a></p>
<p style="text-align:center;"><a href = "wachtwoord.php">Wachtwoord veranderen</a></p>
<p style="text-align:center;"><a href = "kaart.php">Leerlingenkaart afdrukken</a></p>
		</div>
	</div>
</body>
</html>

