
<?php
include('../connect.php');
session_start();
$id = $_SESSION['leerlingid'];
if(!empty($id)){
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
}}

else{
    echo '<script>window.location.replace("https://colomaplus.smartpass.one/leerling");</script>';
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60" >
    <meta name="theme-color" content="<?php echo $kleur ?>" />
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $kleur ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Smartpass</title>
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
<body onload="startTime()" style="background-color: <?php echo $kleur ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
--><script>(function( $ ){
	$.fn.qrcode = function(options) {
		// if options is string, 
		if( typeof options === 'string' ){
			options	= { text: options };
		}

		// set default values
		// typeNumber < 1 for automatic calculation
		options	= $.extend( {}, {
			render		: "canvas",
			width		: 256,
			height		: 256,
			typeNumber	: -1,
			correctLevel	: QRErrorCorrectLevel.H,
                        background      : "<?php echo $kleur ?>",
                        foreground      : "#000000"
		}, options);

		var createCanvas	= function(){
			// create the qrcode itself
			var qrcode	= new QRCode(options.typeNumber, options.correctLevel);
			qrcode.addData(options.text);
			qrcode.make();

			// create canvas element
			var canvas	= document.createElement('canvas');
			canvas.width	= options.width;
			canvas.height	= options.height;
			var ctx		= canvas.getContext('2d');

			// compute tileW/tileH based on options.width/options.height
			var tileW	= options.width  / qrcode.getModuleCount();
			var tileH	= options.height / qrcode.getModuleCount();

			// draw in the canvas
			for( var row = 0; row < qrcode.getModuleCount(); row++ ){
				for( var col = 0; col < qrcode.getModuleCount(); col++ ){
					ctx.fillStyle = qrcode.isDark(row, col) ? options.foreground : options.background;
					var w = (Math.ceil((col+1)*tileW) - Math.floor(col*tileW));
					var h = (Math.ceil((row+1)*tileW) - Math.floor(row*tileW));
					ctx.fillRect(Math.round(col*tileW),Math.round(row*tileH), w, h);  
				}	
			}
			// return just built canvas
			return canvas;
		}

		// from Jon-Carlos Rivera (https://github.com/imbcmdth)
		var createTable	= function(){
			// create the qrcode itself
			var qrcode	= new QRCode(options.typeNumber, options.correctLevel);
			qrcode.addData(options.text);
			qrcode.make();
			
			// create table element
			var $table	= $('<table></table>')
				.css("width", options.width+"px")
				.css("height", options.height+"px")
				.css("border", "0px")
				.css("border-collapse", "collapse")
				.css('background-color', options.background);
		  
			// compute tileS percentage
			var tileW	= options.width / qrcode.getModuleCount();
			var tileH	= options.height / qrcode.getModuleCount();

			// draw in the table
			for(var row = 0; row < qrcode.getModuleCount(); row++ ){
				var $row = $('<tr></tr>').css('height', tileH+"px").appendTo($table);
				
				for(var col = 0; col < qrcode.getModuleCount(); col++ ){
					$('<td></td>')
						.css('width', tileW+"px")
						.css('background-color', qrcode.isDark(row, col) ? options.foreground : options.background)
						.appendTo($row);
				}	
			}
			// return just built canvas
			return $table;
		}
  

		return this.each(function(){
			var element	= options.render == "canvas" ? createCanvas() : createTable();
			$(element).appendTo(this);
		});
	};
})( jQuery );
</script>
<script type = "text/javascript" src = "src/qrcode.js"></script>
<div class="container">
    <img id="profielfoto" src = '<?php echo $foto ?>'>
    
        <p class="text"><?php echo $naam ?> | <?php echo $klas ?></p>
        <div id="klok"></div>
    <p class="text"></p>
    <div id="qrcode"></div>
    
    <div id="navbar">

    <a class="navactief" href = "kaart.php"> <i id="person" class="material-icons">person</a></i>
 <a class="navinactief" href = "dashboard.php"> <i id="dashboard" class="material-icons">dashboard</a></i>
<a class = "navinactief" href = "settings.php"> <i id="settings" class="material-icons">settings</a></i>
</div>
</div>
  
<script>
	jQuery('#qrcode').qrcode({width: 150,height: 150,text: '<?php echo $id . "," . $Buiten ?>'});
</script>  


</body>
</html>