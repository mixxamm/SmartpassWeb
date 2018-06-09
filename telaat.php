<?php
include("connect.php");
session_start();
$user_name = $_SESSION['login_user'];
$user_pass = $_SESSION['pass_user'];
$mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam like '$user_name';";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_assoc($result);
      $hash = $row['Wachtwoord'];
      
          
if(password_verify($user_pass, $hash)) {
    
    $id = mysqli_real_escape_string($db, $_POST['id']);
    
    $id1 = intval("$id");
    $mysql_qry_leerling = "SELECT * FROM tblleerlingen WHERE LeerlingID=$id1;";
    //var_dump($mysql_qry_leerling);
    $resultnaam = mysqli_query($db, $mysql_qry_leerling);
    $rowLeerling = mysqli_fetch_assoc($resultnaam);
    //var_dump($rowLeerling);
         $naam = $rowLeerling['Naam'];
    if($id > 0){
       
    }
    
    
     
    if(date('l') == "Monday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+4 days'));
    $data = "Leerling te laat gezet tot $datumnaarbuiten";
}elseif(date('l') == "Tuesday"){
  
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling te laat gezet tot $datumnaarbuiten";
}
elseif(date('l') == "Wednesday"){
    $data = "Leerling niet te laat gezet, het is woensdag";
}
elseif(date('l') == "Thursday"){
    $datumnaarbuiten  = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling te laat gezet tot $datumnaarbuiten";
}
elseif(date('l') == "Friday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling te laat gezet tot $datumnaarbuiten";
}
elseif(date('l') == "Saturday"){
    $data = "Leerling niet te laat gezet, het is zaterdag";
}
elseif(date('l') == "Sunday"){
    $data = "Leerling niet te laat gezet, het is zondag";
}

if($id > 0){
   $datum = date("Y-m-d");
$mysql_qry = "select * from tblleerlingen where LeerlingID like $id;";
$result = mysqli_query($db ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
    $sql = "DELETE FROM tbltelaat WHERE LeerlingID = $id;";
    $db->query($sql);
}

$mysql_qry = "INSERT INTO tbltelaat (LeerlingID,Datum_te_laat,Datum_naar_buiten) VALUES ('$id','$datum','$datumnaarbuiten');";
var_dump($mysql_qry);

$db->query($mysql_qry);
$db->close();
}
}
else{
    header('Location: https://colomaplus.smartpass.one');
}
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
        <meta name="viewport" content="width=device-width, initial-scale=0.8">

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
    $.ajax({
  type: 'post',
  data: { id:id },
  success: function(response){
     $('#myForm')[0].reset();
  }
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
    var data = {message: '<?php echo $data ?>'  };
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