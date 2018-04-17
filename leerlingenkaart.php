<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
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
<td style="text-align: center; height: 60px"><input id="button"class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="submit" type="submit" value="Bevestig"/></form>


    </body>
</html>