<?php
 session_start();
 unset($_SESSION['nickk']);
 unset($_SESSION['contraa']);
     session_destroy();
 header('Location: menu.php');
?>


