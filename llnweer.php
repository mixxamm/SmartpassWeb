<?php
include("connect.php");
if(isset($_POST['k_id'])) {
  $sql = "select * from tblleerlingen where klas =".mysqli_real_escape_string($db, $_POST['k_id']);
  $res = mysqli_query($db, $sql);
  if(mysqli_num_rows($res) > 0) {
    echo "<option value=''>Selecteer een leerling</option>";
   	   	 while ($row = $res->fetch_assoc()) {
   echo '<option value="'.$row['LeerlingID'].'">'.$row['Naam'].'</option>';
}
  }
} else {
  header('location: ./');
}
?>