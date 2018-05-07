
<?php
include('../connect.php');
session_start();
$id = $_SESSION['leerlingid'];
$foto = 'https://smartpass.one/foto/'.$id.'.png';
$mysql_qry = "select * from tblleerlingen where LeerlingID like $id;";
$result = mysqli_query($db, $mysql_qry);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $naam = $row['Naam'];
    $klasnr = $row['Klas'];
    $Buiten = $row["Buiten"];
    $klas_qry = "select Klas from tblklassen where KlasNr like $klasnr;";
    $resultklas = mysqli_query($db,$klas_qry);
    
    if($Buiten == "1"){
        $mysql_qry1 = "select * from tbltelaat where leerlingID like '$id';";
        $result1 = mysqli_query($db, $mysql_qry1);
        $row1 = mysqli_fetch_assoc($result1);
        $datum = date("Y-m-d");
            $datumnaarbuiten = $row1["Datum_naar_buiten"];
            if($datumnaarbuiten > $datum){
                $Buiten = "0";
            }
            else{
                $Buiten = "1";
            }
    }
    
    if($Buiten == "1"){
        $kleur = "#8BC34A";
    }
    else{
        $kleur = "#F44336";
    }
    
    if (mysqli_num_rows($resultklas) > 0) {
        $rowklas = mysqli_fetch_assoc($resultklas);
        $klas = $rowklas['Klas'];
    }
}
?>
<html>
<head>
    <meta name="theme-color" content="<?php echo $kleur ?>" />
<title>Leerlingenkaart</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('klok').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // voeg 0 toe voor enkele cijfers
    return i;
}
</script>
</head>
<body onload="startTime()">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<div id="klok"></div>
<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
--><script type = "text/javascript" src = "../src/jquery.qrcode.js"></script>
<script type = "text/javascript" src = "../src/qrcode.js"></script>
<table class = "leerlingenkaarttabel">
    <td><img width="600px" height="600px" src = '<?php echo $foto ?>'></td>
    <td>
        <p><?php echo $naam ?></p>
    <p><?php echo $klas ?></p></td>
    <td><div id="qrcode"></div></td>
  </table>
  
<script>
	jQuery('#qrcode').qrcode({width: 600,height: 600,text: '<?php echo $id ?>'});
</script>  


</body>
</html>