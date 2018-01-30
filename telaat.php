<html>
<head>
	<meta charset="utf-8">
	<title>Smartpass</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Smartpass <span>Leerkrachten</span></span></h1>
		</div>
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
<option value="1" <?php if($_POST['klas']=='1') echo 'selected="selected"';?> >5ABK</option>
<option value="2" <?php if($_POST['klas']=='2') echo 'selected="selected"';?> >5BAK1</option>
<option value="3" <?php if($_POST['klas']=='3') echo 'selected="selected"';?> >5BAK2</option>
<option value="4" <?php if($_POST['klas']=='4') echo 'selected="selected"';?> >5BE</option>
<option value="5" <?php if($_POST['klas']=='5') echo 'selected="selected"';?> >5CM</option>
<option value="6" <?php if($_POST['klas']=='6') echo 'selected="selected"';?> >5FO1</option>
<option value="7" <?php if($_POST['klas']=='7') echo 'selected="selected"';?> >5FO2</option>
<option value="8" <?php if($_POST['klas']=='2') echo 'selected="selected"';?> >5GK</option>
<option value="9" <?php if($_POST['klas']=='2') echo 'selected="selected"';?> >5HA1</option>
<option value="10" <?php if($_POST['klas']=='10') echo 'selected="selected"';?> >5HA2</option>
<option value="11" <?php if($_POST['klas']=='11') echo 'selected="selected"';?> >5HOT</option>
<option value="12" <?php if($_POST['klas']=='12') echo 'selected="selected"';?> >5NI</option>
<option value="13" <?php if($_POST['klas']=='13') echo 'selected="selected"';?> >5OF1</option>
<option value="14" <?php if($_POST['klas']=='14') echo 'selected="selected"';?> >5OF2</option>
<option value="15" <?php if($_POST['klas']=='15') echo 'selected="selected"';?> >5OR1</option>
<option value="16" <?php if($_POST['klas']=='16') echo 'selected="selected"';?> >5OR2</option>
<option value="17" <?php if($_POST['klas']=='17') echo 'selected="selected"';?> >5PU1</option>
<option value="18" <?php if($_POST['klas']=='18') echo 'selected="selected"';?> >5PU2</option>
<option value="19" <?php if($_POST['klas']=='19') echo 'selected="selected"';?> >5RE</option>
<option value="20" <?php if($_POST['klas']=='20') echo 'selected="selected"';?> >5RK</option>
<option value="21" <?php if($_POST['klas']=='21') echo 'selected="selected"';?> >5SV</option>
<option value="22" <?php if($_POST['klas']=='22') echo 'selected="selected"';?> >5TO</option>
<option value="23" <?php if($_POST['klas']=='23') echo 'selected="selected"';?> >6BAK</option>
<option value="24" <?php if($_POST['klas']=='24') echo 'selected="selected"';?> >6BAK</option>
<option value="25" <?php if($_POST['klas']=='25') echo 'selected="selected"';?> >6BE</option>
<option value="26" <?php if($_POST['klas']=='26') echo 'selected="selected"';?> >6CM</option>
<option value="27" <?php if($_POST['klas']=='27') echo 'selected="selected"';?> >6FO</option>
<option value="28" <?php if($_POST['klas']=='28') echo 'selected="selected"';?> >6HA1</option>
<option value="29" <?php if($_POST['klas']=='29') echo 'selected="selected"';?> >6HA2</option>
<option value="30" <?php if($_POST['klas']=='30') echo 'selected="selected"';?> >6HOT</option>
<option value="31" <?php if($_POST['klas']=='31') echo 'selected="selected"';?> >6NI</option>
<option value="32" <?php if($_POST['klas']=='32') echo 'selected="selected"';?> >6OF1</option>
<option value="33" <?php if($_POST['klas']=='33') echo 'selected="selected"';?> >6OF2</option>
<option value="34" <?php if($_POST['klas']=='34') echo 'selected="selected"';?> >6OR1</option>
<option value="35" <?php if($_POST['klas']=='35') echo 'selected="selected"';?> >6OR2</option>
<option value="36" <?php if($_POST['klas']=='36') echo 'selected="selected"';?> >6PU1</option>
<option value="37" <?php if($_POST['klas']=='37') echo 'selected="selected"';?> >6PU2</option>
<option value="38" <?php if($_POST['klas']=='38') echo 'selected="selected"';?> >6RE</option>
<option value="39" <?php if($_POST['klas']=='39') echo 'selected="selected"';?> >6RK</option>
<option value="40" <?php if($_POST['klas']=='40') echo 'selected="selected"';?> >6SV</option>
<option value="41" <?php if($_POST['klas']=='41') echo 'selected="selected"';?> >6TO</option>
<option value="42" <?php if($_POST['klas']=='42') echo 'selected="selected"';?> >7BAK</option>
<option value="43" <?php if($_POST['klas']=='43') echo 'selected="selected"';?> >7BS</option>
<option value="44" <?php if($_POST['klas']=='44') echo 'selected="selected"';?> >7GRM</option>
<option value="45" <?php if($_POST['klas']=='45') echo 'selected="selected"';?> >7HA</option>
<option value="46" <?php if($_POST['klas']=='46') echo 'selected="selected"';?> >7PU</option>
<option value="47" <?php if($_POST['klas']=='47') echo 'selected="selected"';?> >7SA</option>
<option value="48" <?php if($_POST['klas']=='48') echo 'selected="selected"';?> >7WG</option>
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
<td style="text-align:center; height: 60px"><?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$klasnr = $_POST['klas'];
	
	$mysql_query1 = "SELECT Naam FROM tblleerlingen WHERE Klas = '$klasnr'";
	
	$result = mysqli_query($db,$mysql_query1);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['Naam'];
    echo '<select name="leerling">';
	
	 while ($row = $result->fetch_assoc()) {
   echo '<option value="'.$row['Naam'].'">'.$row['Naam'].'</option>';
}
echo '</select>';// Close your drop down box
}
?>
</td>
</tr>
<tr>
<td style="text-align: center; height: 60px">button</td>
</tr>
</tbody>
</table>

		</div>
	</div>
</body>
</html>
