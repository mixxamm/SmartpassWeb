<?php 
include ("session.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Smartpass</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body scroll="no" style="overflow: hidden">
	<div class="container">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Leerling te laat</h2>
			</div>
			<table id="login" style="width: 295px; margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td style="text-align: center; height: 60px">Selecteer een klas <br></td>
</tr>
<tr>
<td style="text-align: center; height: 60px">
<form action="" method = "POST"><select id="klassen" name="klas">
<option value="1" <?php if($_POST['klas']=='1') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5ABK</option>
<option value="2" <?php if($_POST['klas']=='2') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5BAK1</option>
<option value="3" <?php if($_POST['klas']=='3') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5BAK2</option>
<option value="4" <?php if($_POST['klas']=='4') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5BE</option>
<option value="5" <?php if($_POST['klas']=='5') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5CM</option>
<option value="6" <?php if($_POST['klas']=='6') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5FO1</option>
<option value="7" <?php if($_POST['klas']=='7') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5FO2</option>
<option value="8" <?php if($_POST['klas']=='8') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5GK</option>
<option value="9" <?php if($_POST['klas']=='9') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5HA1</option>
<option value="10" <?php if($_POST['klas']=='10') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5HA2</option>
<option value="11" <?php if($_POST['klas']=='11') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5HOT</option>
<option value="12" <?php if($_POST['klas']=='12') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5NI</option>
<option value="13" <?php if($_POST['klas']=='13') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5OF1</option>
<option value="14" <?php if($_POST['klas']=='14') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5OF2</option>
<option value="15" <?php if($_POST['klas']=='15') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5OR1</option>
<option value="16" <?php if($_POST['klas']=='16') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5OR2</option>
<option value="17" <?php if($_POST['klas']=='17') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5PU1</option>
<option value="18" <?php if($_POST['klas']=='18') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5PU2</option>
<option value="19" <?php if($_POST['klas']=='19') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5RE</option>
<option value="20" <?php if($_POST['klas']=='20') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5RK</option>
<option value="21" <?php if($_POST['klas']=='21') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5SV</option>
<option value="22" <?php if($_POST['klas']=='22') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >5TO</option>
<option value="23" <?php if($_POST['klas']=='23') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6BAK</option>
<option value="24" <?php if($_POST['klas']=='24') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6BAK</option>
<option value="25" <?php if($_POST['klas']=='25') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6BE</option>
<option value="26" <?php if($_POST['klas']=='26') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6CM</option>
<option value="27" <?php if($_POST['klas']=='27') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6FO</option>
<option value="28" <?php if($_POST['klas']=='28') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6HA1</option>
<option value="29" <?php if($_POST['klas']=='29') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6HA2</option>
<option value="30" <?php if($_POST['klas']=='30') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6HOT</option>
<option value="31" <?php if($_POST['klas']=='31') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6NI</option>
<option value="32" <?php if($_POST['klas']=='32') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6OF1</option>
<option value="33" <?php if($_POST['klas']=='33') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6OF2</option>
<option value="34" <?php if($_POST['klas']=='34') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6OR1</option>
<option value="35" <?php if($_POST['klas']=='35') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6OR2</option>
<option value="36" <?php if($_POST['klas']=='36') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6PU1</option>
<option value="37" <?php if($_POST['klas']=='37') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6PU2</option>
<option value="38" <?php if($_POST['klas']=='38') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6RE</option>
<option value="39" <?php if($_POST['klas']=='39') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6RK</option>
<option value="40" <?php if($_POST['klas']=='40') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6SV</option>
<option value="41" <?php if($_POST['klas']=='41') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >6TO</option>
<option value="42" <?php if($_POST['klas']=='42') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7BAK</option>
<option value="43" <?php if($_POST['klas']=='43') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7BS</option>
<option value="44" <?php if($_POST['klas']=='44') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7GRM</option>
<option value="45" <?php if($_POST['klas']=='45') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7HA</option>
<option value="46" <?php if($_POST['klas']=='46') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7PU</option>
<option value="47" <?php if($_POST['klas']=='47') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7SA</option>
<option value="48" <?php if($_POST['klas']=='48') echo 'selected="selected"'; $button = '<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig"/></form></td>'; ?> >7WG</option>
</select></td>
</tr>
<tr>
<td style="text-align: center; height: 60px"><input id="button" name="submit" type="submit" value="Bevestig" />
 </form></td>
</tr>
</tbody>
</table>
<table style="width: 295px; margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td style="text-align: center; height: 60px">Selecteer een leerling</td>
</tr>
<tr>
<td style="text-align:center; height: 60px"><form action="" method="POST"><?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$klasnr = $_POST['klas'];
	
	$mysql_query1 = "SELECT Naam, LeerlingID FROM tblleerlingen WHERE Klas = '$klasnr'";
	
	$result = mysqli_query($db,$mysql_query1);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['Naam'];
    echo '<select name="leerling">';
	 while ($row = $result->fetch_assoc()) {
   echo '<option value="'.$row['LeerlingID'].'selected="selected">'.$row['Naam'].'</option>';
}
echo '</select>';
}
?>
</td>
</tr>
<tr>
<?php echo $button; ?>
</tr>
</tbody>
<?php echo $data; ?>
</table>
<p style="text-align:center;"><a href = "logout.php">Log uit</a></p>
		</div>
	</div>
	
</body>
</html>

<?php
include("connect.php");
require "session.php";

$id = $_POST["leerling"];
if($id > 0){
   $datum = date("Y-m-d");
$mysql_qry = "select * from tblleerlingen where LeerlingID like $id;";
$naam_qry =  "select Naam from tblleerlingen where LeerlingID like $id;";
$naam = mysqli_query($db, $naam_qry);
$result = mysqli_query($db ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
    $sql = "DELETE FROM tbltelaat WHERE LeerlingID = $id;";
    $db->query($sql);
}
if(date('l') == "Monday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+4 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Tuesday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Wednesday"){
    $data = "Leerling niet te laat gezet, het is woensdag";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Thursday"){
    $datumnaarbuiten  = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Friday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Saturday"){
    $data = "Leerling niet te laat gezet, het is zaterdag";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Sunday"){
    $data = "Leerling niet te laat gezet, het is zondag";
    header('Content-type: application/json');
    echo json_encode( $data );
}





$mysql_qry = "INSERT INTO tbltelaat (LeerlingID,Datum_te_laat,Datum_naar_buiten) VALUES ('$id','$datum','$datumnaarbuiten');";
$db->query($mysql_qry);
$db->close(); 
}
else{
    $error = "Er is iets fout gegaan";
    header('Content-type: application/json');
    echo json_encode( $data );
    echo $result1;
}

?>


