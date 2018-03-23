<?php
include ("connect.php");
require "session.php";
session_start();
$user_name = $_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $oudwachtwoord = mysqli_real_escape_string($db,$_POST['oudwachtwoord']);
    $wachtwoord1 = mysqli_real_escape_string($db,$_POST['wachtwoord1']);
    $wachtwoord2 = mysqli_real_escape_string($db,$_POST['wachtwoord2']);
    
    $mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam like '$user_name';";
    $result = mysqli_query($db,$mysql_query);
    $row = mysqli_fetch_assoc($result);
    $hash = $row['Wachtwoord'];
    
    if(password_verify($oudwachtwoord, $hash)) {
        if($wachtwoord1 == $wachtwoord2)
        {
            $hash2 = password_hash($wachtwoord1, PASSWORD_DEFAULT);

             $mysql_qry = "update tblleerkrachten set Wachtwoord='$hash2' where Naam = '$user_name';";
    
                if($db->query($mysql_qry) === TRUE){
    
                    $gelukt = "Wachtwoord instellen gelukt.";
                        }
                        else{
                        	 $nietgelukt = "Error: " . $mysql_qry . "<br>" . $conn->error;
                        }
        }
        else {
            $passnm = "Uw wachtwoorden komen niet overeen";
        }
        
        }
        else {
         $error = "Uw oud wachtwoord is fout.";
      }
    }
    

?>