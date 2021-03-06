
<html lang="en">
<head>
	<title>Te late leerlingen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="imKlas/png" href="imKlass/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
			    <form id="verwijderen" action="verwijder.php" method="POST">
			    		<a href="gototelaat.php" id="goback" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Ga terug</a>
                        <input style="float-right;" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Verwijderen">
					<div class="table">
						<div class="row header">
							<div class="cell">
								Naam
							</div>
							<div class ="cell">
							    Klas
							</div>
							<div class="cell">
								Datum te laat
							</div>
							<div class="cell">
								Datum naar buiten
							</div>
							<div class="cell">
								Aanvinken
							</div>
						</div>

						<?php
						include("connect.php");
						$datum = date("Y-m-d");
						$mysql_query = "select * from tbltelaat where Datum_naar_buiten > '$datum';";
						$result = mysqli_query($db, $mysql_query);
						
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$id = $row['LeerlingID'];
								$mysql_query1 = "select Naam,Klas from tblleerlingen where LeerlingID='$id';";
								$resultnaam = mysqli_query($db,$mysql_query1);
								$row2 = mysqli_fetch_assoc($resultnaam);
								$klasnr = $row2['Klas'];
								$mysql_query2 = "SELECT Klas from tblklassen WHERE KlasNr = '$klasnr';";
								$resultklas = mysqli_query($db,$mysql_query2);
								$row3 = mysqli_fetch_assoc($resultklas);
								echo '<div class="row">';
								echo '<div class="cell" data-title="Naam">';
								echo $row2['Naam'];
								echo '</div>';
								echo '<div class="cell" data-title="Klas">';
								echo $row3['Klas'];
								echo '</div>';
								echo '<div class="cell" data-title="Datum te laat">';
								echo $row['Datum_te_laat'];
								echo '</div>';
								echo '<div class="cell" data-title="Datum naar buiten">';
								echo $row['Datum_naar_buiten'];
								echo '</div>';
								echo '<div class="cell" data-title="Aanvinken">';
								echo '<input type="checkbox" name="check_list[]" value="'. $row['LeerlingID']. '">';
							    echo '</div>';
								echo '</div>';
							}
						}
						?>

					</div>
					
			</div>
			
			
			
		</div>
	</div>
	</form>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>