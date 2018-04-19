<?php
$id=$_POST['id'];
include("connect.php");
session_start();
$user_name = $_SESSION['login_user'];
$user_pass = $_SESSION['pass_user'];
$mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam like '$user_name';";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_assoc($result);
      $hash = $row['Wachtwoord'];
if(password_verify($user_pass, $hash)) {
if($id > 0){
   $datum = date("Y-m-d");
$mysql_qry = "select * from tblleerlingen where LeerlingID like $id;";
$naam_qry =  "select Naam from tblleerlingen where LeerlingID like $id;";
$resultnaam = mysqli_query($db,$naam_qry);
if (mysqli_num_rows($resultnaam) > 0) {
    while($row = mysqli_fetch_assoc($resultnaam)) {
       $naam =$row['Naam'];
    }
}
$result = mysqli_query($db ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
    $sql = "DELETE FROM tbltelaat WHERE LeerlingID = $id;";
    $db->query($sql);
}
if(date('l') == "Monday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+4 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
    $_SESSION['data'] = $data;
}
elseif(date('l') == "Tuesday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
    $_SESSION['data'] = $data;
}
elseif(date('l') == "Wednesday"){
    $data = "$naam niet te laat gezet, het is woensdag";
    $_SESSION['data'] = $data;
}
elseif(date('l') == "Thursday"){
    $datumnaarbuiten  = date('Y-m-d', strtotime('+5 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
    $_SESSION['data'] = $data;
}
elseif(date('l') == "Friday"){
    $datumnaarbuiten = date('Y-m-d', strtotime('+5 days'));
    $data = "$naam mag niet naar buiten tot $datumnaarbuiten";
    $_SESSION['data'] = $data;
}
elseif(date('l') == "Saturday"){
    $data = "$naam niet te laat gezet, het is zaterdag";
    $_SESSION['data'] = $data;
}
elseif(date('l') == "Sunday"){
    $data = "$naam niet te laat gezet, het is zondag";
    $_SESSION['data'] = $data;
}
$mysql_qry = "INSERT INTO tbltelaat (LeerlingID,Datum_te_laat,Datum_naar_buiten) VALUES ('$id','$datum','$datumnaarbuiten');";
$db->query($mysql_qry);
$db->close();
}
}
?>