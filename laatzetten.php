<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$klas = mysqli_real_escape_string($db,$_POST['Klas']);
	
	$mysql_query = "SELECT Naam FROM tblLeerlingen WHERE Naam = '$klas'";
	$result = mysqli_query($db,$mysql_query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
	$select1= '<select name="leerling">';
	
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
   $select2= '<option value="'.$row['something'].'">'.$row['something'].'</option>';
}
$select3 = '</select>';// Close your drop down box
echo $select3;

}
else {
         $error = "Selecteer een klas a.u.b.";
}
?>