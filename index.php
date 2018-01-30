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
<html>
<head>
	<meta charset="utf-8">
	<title>Smartpass</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Smartpass <span>Leerkrachten</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form id="login" action="" method="POST">
			<label>Gebruikersnaam</label>
			<br/>
			<input type="text" name="gebruikersnaam">
			<br/>
			<label>Wachtwoord</label>
			<br/>
			<input type="password" name="wachtwoord">
			<br/>
			<input id="button" type="submit" name="submit" value="Log In">
			</form>
			
			<div><?php echo $error; ?></div>
			<a href="#"><p class="small">Wachtwoord vergeten?</p></a>
		</div>
	</div>
</body>
</html>
