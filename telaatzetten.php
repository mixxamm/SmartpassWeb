<?php
include("connect.php");
require "session.php";

$id = $_POST["leerling"];
if($id > 0){
   $datum = date("Y-m-d");
$mysql_qry = "select * from tblleerlingen where LeerlingID like $id;";
$result = mysqli_query($db ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
    $sql = "DELETE FROM tbltelaat WHERE LeerlingID = $id;";
    $db->query($sql);
}
if(date('l') == "Monday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+4 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Tuesday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Wednesday"){
    $data = "Leerling niet te laat gezet, het is woensdag";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Thursday"){
    $datumnaarbuiten  = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Friday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "Leerling mag niet naar buiten tot $datumnaarbuiten";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Saturday"){
    $data = "Leerling niet te laat gezet, het is zaterdag";
    header('Content-type: application/json');
    echo json_encode( $data );
}
elseif(date('l') == "Sunday"){
    $data = "Leerling niet te laat gezet, het is zondag";
    header('Content-type: application/json');
    echo json_encode( $data );
}





$mysql_qry = "INSERT INTO tbltelaat (LeerlingID,Datum_te_laat,Datum_naar_buiten) VALUES ('$id','$datum','$datumnaarbuiten');";
$db->query($mysql_qry);
$db->close(); 
}
else{
    $error = "Er is iets fout gegaan";
    header('Content-type: application/json');
    echo json_encode( $data );
    echo $result1;
}

?>