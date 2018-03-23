<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select Naam from tblleerkrachten where Naam = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['gebruikersnaam'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>