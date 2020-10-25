<?php 

session_start();
session_destroy();

header('Location: financelogin.php');

?>