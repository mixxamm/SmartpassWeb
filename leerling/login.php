<?php
   include("../connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $user_name = mysqli_real_escape_string($db,$_POST['gebruikersnaam']);
      $user_pass = mysqli_real_escape_string($db,$_POST['wachtwoord']); 
      
      $mysql_query = "SELECT * FROM tblleerlingen WHERE Naam like '$user_name';";
      $result = mysqli_query($db,$mysql_query);
      $row = mysqli_fetch_assoc($result);
      $hash = $row['Wachtwoord'];

		
      if(password_verify($user_pass, $hash)) {
         $_SESSION['tabel'] = "tblleerlingen";
         $_SESSION['login_user'] = $user_name;
         $_SESSION['pass_user'] = $user_pass;
         $_SESSION['leerlingid'] = $row['LeerlingID'];
         setcookie('logintoken', $row['LoginToken']);
         setcookie('leerlingid', $row['LeerlingID'], time() + 3600 * 24 * 90, "/");
         header("location: kaart.php");
      }
      elseif(!empty($_COOKIE['leerlingid'])){
          header("location: kaart.php");
      }
      else {
         $error = "Uw gebruikersnaam of wachtwoord is fout.";
      }
   }
?>
