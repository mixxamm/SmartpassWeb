<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $user_name = mysqli_real_escape_string($db,$_POST['gebruikersnaam']);
      $user_pass = mysqli_real_escape_string($db,$_POST['wachtwoord']); 
      
      $mysql_query = "SELECT * FROM tblleerkrachten WHERE Naam = '$user_name' and Wachtwoord = '$user_pass'";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['login_user'] = $user_name;
         
         header("location: telaat.php");
      }else {
         $error = "Uw gebruikersnaam of wachtwoord is fout.";
      }
   }
?>