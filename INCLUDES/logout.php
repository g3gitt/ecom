<?php
session_start();
session_unset();      
session_destroy();    

header("Location: ../VIEW/login.php");
exit;
?>
