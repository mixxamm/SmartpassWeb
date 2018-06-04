<?php
require "../connect.php";
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
if($datum != "" && $datum >= $datum1){
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
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <p>U bent <?php echo $aantalTotaal ?> keer te laat</p>
        <p>Waarvan <?php echo $aantalTrimester ?> keer dit trimester</p>
        <p>Nog <?php echo $aantalTotNablijven ?> keer te laat tot nablijven</p>
        
            <div id="navbardashboard">
</i>
    <a href = "kaart.php"> <i id="person" class="material-icons">person</a></i>
 <a href = "dashboard.php"> <i id="dashboard" class="material-icons">dashboard</a></i>
<a href = "settings.php"> <i id="settings" class="material-icons">settings</a></i>
</div>
    </body>
</html>