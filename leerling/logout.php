<?php
if (isset($_COOKIE['leerlingid'])) {
    unset($_COOKIE['leerlingid']);
    setcookie('leerlingid', '', time() - 3600, '/');
}
echo '<script>window.location.replace("https://colomaplus.smartpass.one/leerling");</script>';
?>