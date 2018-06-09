<?php
require "../connect.php";
session_start();
$id = $_SESSION['leerlingid'];

$maand = date("m", time());
$trimester = ceil($maand/3);

$mysql_nablijven = "SELECT * FROM tbltelaatlog WHERE LeerlingID='$id';";
$aantal = mysqli_query($db, $mysql_nablijven);
$aantalTotaal = mysqli_num_rows($aantal);

$mysql_nablijven = "SELECT * FROM tbltelaatlog WHERE LeerlingID='$id' AND Trimester='$trimester';";
$aantal = mysqli_query($db, $mysql_nablijven);
$aantalTrimester = mysqli_num_rows($aantal);

$mysql_nablijven = "SELECT * FROM tbltelaatlog WHERE LeerlingID='$id' AND Trimester='$trimester' AND Nablijven=0;";
$aantal = mysqli_query($db, $mysql_nablijven);
$aantalTotNablijven = 3 - mysqli_num_rows($aantal);

$mysql_nablijven = "select * from tblnablijven where LeerlingID='$id' and Nagebleven=0;";
$result = mysqli_query($db, $mysql_nablijven);
$row = mysqli_fetch_assoc($result);
$datum = $row['DatumNablijven'];
$datum1 = date("Y-m-d");
if($datum != "" && $datum <= $datum1){
    if($datum == $datum1){
        $datum = "U moet op ".$datum." (vandaag) nablijven in lokaal D112.";
    }
    else{
        $datum = "U moet op ".$datum." nablijven in lokaal D112.";
    }
}
else{
    $datum = "U moet niet nablijven.";
}


?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#ECEFF1" />
        <link rel="stylesheet" type="text/css" href="style.css">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <p class="dashboardtext">U bent <?php echo $aantalTotaal ?> keer te laat</p>
        <p class="dashboardtext">Waarvan <?php echo $aantalTrimester ?> keer dit trimester</p>
        <p class="dashboardtext">Nog <?php echo $aantalTotNablijven ?> keer te laat tot nablijven</p>
        <h1 class = "dashboardtext">Nablijven</h1>
        <p class="dashboardnablijven"> <?php echo $datum ?></p>
        
        
            <div id="navbar">

    <a class="navinactief" href = "kaart.php"> <i id="person" class="material-icons">person</a></i>
 <a class="navactief" href = "dashboard.php"> <i id="dashboard" class="material-icons">dashboard</a></i>
<a class="navinactief" href = "settings.php"> <i id="settings" class="material-icons">settings</a></i>
</div>
</div>
    </body>
</html>