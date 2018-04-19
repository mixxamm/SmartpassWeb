<?php
include("connect.php");
session_start();
$id = mysqli_real_escape_string($_POST["leerling"]);
$klasnr = mysqli_real_escape_string($_POST["klas"]);
$naam_qry =  "select Naam from tblleerlingen where LeerlingID like $id;";
$klas_qry = "select Klas from tblklassen where KlasNr like $Klasnr;";
$resultnaam = mysqli_query($db,$naam_qry);
$resultklas = mysqli_query($db,$klas_qry);


 if($_SERVER["REQUEST_METHOD"] == "POST") {
     $_SESSION['leerlingID'] = $_POST['leerling'];
$_SESSION['KlasID'] = $_POST['Klas'];
header("location:kaart.php");

}
?>

<html>
    <head>
            
    <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>
	<meta charset="utf-8">
	<title>Smartpass leerlingenkaart</title>
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
    <body>
        
     <h1>Selecteer een klas <br></h1>

<td style="text-align: center; height: 60px">
<form action="" method = "POST">
<?php
include("connect.php");
$mysql_queryklas = "select * from tblklassen;";
$resultklas = mysqli_query($db,$mysql_queryklas);
$rowklas = mysqli_fetch_array($resultklas,MYSQLI_ASSOC);
echo '<select style="text-align:center;" id="klassen" name="klas">';
do {
echo '<option value="'.$rowklas['KlasNr']. '">'.$rowklas['Klas'].'</option>';
}
while ($rowklas = $resultklas->fetch_assoc());
echo '</select>';
?>

<td style="text-align: center; height: 60px">
    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="button" name="submit" type="submit" value="Bevestig" />
 </form>
<h1 style="text-align: center; height: 60px">Selecteer een leerling</h1>
<form action="" method="POST"><?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$klasnr = $_POST['klas'];
	
	$mysql_query1 = "SELECT Naam, LeerlingID FROM tblleerlingen WHERE Klas = '$klasnr'";
	
	$result = mysqli_query($db,$mysql_query1);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['Naam'];
    echo '<select name="leerling">';
	 do {
   echo '<option value="'.$row['LeerlingID'].'">'.$row['Naam'].'</option>';
}
while ($row = $result->fetch_assoc());
echo '</select>';
}
?>
<td style="text-align: center; height: 60px"><input id="button"class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="submit" type="submit" value="Bevestig"/></form></td>
<?php
echo $_POST['leerling'];
echo "</br>";
echo $_POST['klas'];
?>

<?php

?>
    </body>
</html>