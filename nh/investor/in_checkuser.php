<?php
$loggedin=false;
session_start();
if(isset($_SESSION["in_useremailgov"]))
	$loggedin=true;

?>
