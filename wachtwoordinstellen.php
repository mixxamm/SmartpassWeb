<?php
include ("connect.php");
session_start();
$user_name = $_SESSION['login_user'];
$tabel = $_SESSION['tabel'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $oudwachtwoord = mysqli_real_escape_string($db,$_POST['oudwachtwoord']);
    $wachtwoord1 = mysqli_real_escape_string($db,$_POST['wachtwoord1']);
    $wachtwoord2 = mysqli_real_escape_string($db,$_POST['wachtwoord2']);
    
    $mysql_query = "SELECT * FROM $tabel WHERE Naam like '$user_name';";
    $result = mysqli_query($db,$mysql_query);
    $row = mysqli_fetch_assoc($result);
    $hash = $row['Wachtwoord'];
    
    if(password_verify($oudwachtwoord, $hash)) {
        if($wachtwoord1 == $wachtwoord2)
        {
            $hash2 = password_hash($wachtwoord1, PASSWORD_DEFAULT);
            
            $logintoken = bin2hex(random_bytes(128));
             $mysql_qry = "update $tabel set Wachtwoord='$hash2', LoginToken='$logintoken' where Naam = '$user_name';";
    
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