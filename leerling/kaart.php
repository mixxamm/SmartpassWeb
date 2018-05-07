
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
    $klas_qry = "select Klas from tblklassen where KlasNr like $klasnr;";
    $resultklas = mysqli_query($db,$klas_qry);
    if (mysqli_num_rows($resultklas) > 0) {
        $rowklas = mysqli_fetch_assoc($resultklas);
        $klas = $rowklas['Klas'];
    }
}
?>
<html>
<head>
<title>Leerlingenkaart</title>
<link rel="stylesheet" type="text/css" href="css/leerlingenkaartgen.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
--><script type = "text/javascript" src = "../src/jquery.qrcode.js"></script>
<script type = "text/javascript" src = "../src/qrcode.js"></script>
<table>
    <td><img width="120px" height="120px" src = '<?php echo $foto ?>'></td>
    <td>
        <p><?php echo $naam ?></p>
    <p><?php echo $klas ?></p></td>
    <td><div id="qrcode"></div></td>
  </table>
  
<script>
	jQuery('#qrcode').qrcode({width: 120,height: 120,text: '<?php echo $id ?>'});
</script>  


</body>
</html>