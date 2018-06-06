<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $user_name = mysqli_real_escape_string($db,$_POST['gebruikersnaam']);
      $user_pass = mysqli_real_escape_string($db,$_POST['wachtwoord']); 
      
      $mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam like '$user_name';";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_assoc($result);
      $hash = $row['Wachtwoord'];
		
      if(password_verify($user_pass, $hash)) {
         $_SESSION['login_user'] = $user_name;
         $_SESSION['pass_user'] = $user_pass;
         $_SESSION['tabel'] = "tblleerkrachten";
         
         header("location: telaat.php");
      }else {
         $error = "Uw gebruikersnaam of wachtwoord is fout.";
      }
   }
?>