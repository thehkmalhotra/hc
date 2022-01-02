<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include_once("functions.php");
session_start();
session_unset();
session_destroy();
header("location:login.php");
?>