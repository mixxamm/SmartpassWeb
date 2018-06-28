<?php
if(empty($_COOKIE['dark']) || $_COOKIE['dark'] == "0"){
    setcookie('dark', '1', time() + 3600 * 24 * 90, "/");
    header("location: settings.php");
}
else{
    setcookie('dark', '0', time() + 3600 * 24 * 90, "/");
    header("location: settings.php");
}

?>