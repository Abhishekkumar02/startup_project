<?php
session_start();
if(isset($_SESSION["adminemail"]))
{
	$adminemail=$_SESSION["adminemail"];
	$loggedin=true;
}
else
{
	$loggedin=false;
}?>