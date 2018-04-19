<?php
include('connect.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
$klasid = mysqli_real_escape_string($db, $_POST["klas"]);
$id = mysqli_real_escape_string($db, $_POST["leerling"]);

$_SESSION['leerlingid'] = $id;
header('location:kaartgen.php');
}
?>

<html>
<head>
    
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

<body scroll="no" style="overflow: hidden">
	<div class="container">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Leerlingenkaart afdrukken</h2>
			</div>
<h1>Selecteer een klas <br></h1>

<td style="text-align: center; height: 60px">
<form action = 'kaart.php' method = 'post'>
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
<form action="" method="POST">
     <select name="leerling" id="leerling"><option>Selecteer eerst een klas <?php include('llnweer.php'); ?> </option></select>
<td style="text-align: center; height: 60px"><input id="button"class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="submit" type="submit" value="Bevestig"/></td></form>
<p style="text-align:center;"> <?php echo $data; ?> </p>
	<a href="gototelaat.php" id="goback" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Ga terug</a>
		</div>
	</div>
	
</body>
</html>

