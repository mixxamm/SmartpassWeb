<?php
include("connect.php");
require "session.php";
session_start();
$mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam like '$user_name';";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_assoc($result);
      $hash = $row['Wachtwoord'];
$user_name = $_SESSION['login_user'];
$user_pass = $_SESSION['pass_user'];
if(password_verify($user_pass, $hash)) {
$id = mysqli_real_escape_string($_POST["leerling"]);
if($id > 0){
   $datum = date("Y-m-d");
$mysql_qry = "select * from tblleerlingen where LeerlingID like $id;";
$naam_qry =  "select Naam from tblleerlingen where LeerlingID like $id;";
$resultnaam = mysqli_query($db,$naam_qry);
if (mysqli_num_rows($resultnaam) > 0) {
    while($row = mysqli_fetch_assoc($resultnaam)) {
       $naam =$row['Naam'];
    }
}
$result = mysqli_query($db ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
    $sql = "DELETE FROM tbltelaat WHERE LeerlingID = $id;";
    $db->query($sql);
}
if(date('l') == "Monday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+4 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
}
elseif(date('l') == "Tuesday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
}
elseif(date('l') == "Wednesday"){
    $data = "$naam niet te laat gezet, het is woensdag";
}
elseif(date('l') == "Thursday"){
    $datumnaarbuiten  = date('Y-m-d', strtotime('+5 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
}
elseif(date('l') == "Friday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
}
elseif(date('l') == "Saturday"){
    $data = "$naam niet te laat gezet, het is zaterdag";
}
elseif(date('l') == "Sunday"){
    $data = "$naam niet te laat gezet, het is zondag";
}
$mysql_qry = "INSERT INTO tbltelaat (LeerlingID,Datum_te_laat,Datum_naar_buiten) VALUES ('$id','$datum','$datumnaarbuiten');";
$db->query($mysql_qry);
$db->close();
}
}
?>

<html>
<head>
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
    <div class="topcorner"><p>Ingelogd als <?php echo $user_name; ?></p></div>
	<div class="container">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Leerling te laat</h2>
			</div>
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
<p style="text-align:center;"> <?php echo $data; ?> </p>
<p style="text-align:center;"><a href = "logout.php">Log uit</a></p>
<p style="text-align:center;"><a href = "leerlingen.php">Te late leerlingen bekijken</a></p>
<p style="text-align:center;"><a href = "wachtwoord.php">Wachtwoord veranderen</a></p>
		</div>
	</div>
	
</body>
</html>


