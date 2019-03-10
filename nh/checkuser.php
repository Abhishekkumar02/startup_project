<?php
$loggedin=false;
session_start();
if(isset($_SESSION["useremailgov"]))
	$loggedin=true;
	$rewrite=false;
	$rdurl="";
	if(isset($_SESSION['rewrite']))
	{
		$rewrite=true;
		$rdurl=$_SESSION['rewrite'];
	}
	function setredirect($url="")
	{
		$_SESSION['rewrite']=$url;

}
function clearredirect()
{
	session_unset($_SESSION['rewrite']);
}
?>
