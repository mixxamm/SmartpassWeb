<?php 
if($_COOKIE['dark'] == "1"){
    $color1 = "#000000";
    $color2 = "#ECEFF1";
}
else{
    $color1 = "#ECEFF1";
    $color2 = "#000000";
}


?>
<html>
    <head>
        <meta name="theme-color" content="<?php echo $color1 ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="style.css">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         </head>
         <body style="background: <?php echo $color1 ?>;">
    <div id = "Uitloggen">
    <a class="Instellingentekst" style="color: <?php echo $color2 ?> !important;" href="logout.php"><p>Uitloggen</p></a>
    </div>
    <a class="Instellingentekst" style="color: <?php echo $color2 ?> !important;" href="../wachtwoord.php"><p>Wachtwoord instellen</p></a>
    <a class="Instellingentekst" style="color: <?php echo $color2 ?> !important;" href="../kaartgen.php"><p>Kaart afdrukken</p></a>
    <a class="Instellingentekst" style="color: <?php echo $color2 ?> !important;" href="dark.php"><p><?php if($_COOKIE['dark'] == "1"){echo "Lichte modus";} else{echo "Donkere modus";}?></p></a>
    
    <div id="navbar">

    <a class="navinactief" href = "kaart.php"> <i id="person" class="material-icons">person</a></i>
 <a class="navinactief" href = "dashboard.php"> <i id="dashboard" class="material-icons">dashboard</a></i>
<a class = "navactief" href = "settings.php"> <i id="settings" class="material-icons">settings</a></i>
</div>
</body>
</html>

