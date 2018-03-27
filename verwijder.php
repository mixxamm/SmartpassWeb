<?php
include("connect.php");
require "session.php";
session_start();
$user_name = $_SESSION['login_user'];
$user_pass = $_SESSION['pass_user'];
$mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam like '$user_name';";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_assoc($result);
      $hash = $row['Wachtwoord'];
if(password_verify($user_pass, $hash)) {

    if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
        $mysql_query2 = "DELETE FROM tbltelaat WHERE LeerlingID = '$check';";
        $db->query($mysql_query2);
        header("Location:leerlingen.php");
    }
        }
         else{
             echo "geen aangeduid";
             }
    

}
else{
    echo "error";
}

?>