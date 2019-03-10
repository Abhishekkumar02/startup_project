<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$servername = "localhost";
$username = "root";
$pass = "";
$avsrc="";
$da="hackathon";
$date=date("y-m-d H:i:s");
$conn = mysqli_connect($servername, $username,$pass);
if ($conn)
{
	$ds=mysqli_select_db($conn,$da);
	if($ds)
	{

foreach($_POST as $key => $value)
{
$$key=htmlentities(mysqli_real_escape_string($conn,trim($value)));
}

foreach($_GET as $key => $value)
{
$$key=htmlentities(mysqli_real_escape_string($conn,trim($value)));
}}
	else
	exit();
}
else
	exit();

	refactorCart();
	function refactorCart()
	{
		$ad = date('Y-m-d H:i:s', strtotime("-10 min"));

		$sql="DELETE FROM cart_details WHERE date<='$ad' AND locked='0'" ;
		mysqli_query($GLOBALS['conn'],$sql);

	}
	function sendnotification($t,$m,$e)
	{
		$qq="INSERT INTO notification_details(title,msg,date,user_id,isnew) values('$t','$m','".$GLOBALS['date']."','$e','1');";
		mysqli_query($GLOBALS['conn'],$qq);
	}
	function countnoti($email)
	{
		$sql_query="SELECT * FROM notification_details WHERE user_id='$email' AND isnew='1'";
		return mysqli_num_rows(mysqli_query($GLOBALS['conn'],$sql_query));
		 }

	function sendvmail($to,$code)
	{
	/*
$account="mitcomitconnectuser@gmail.com";
$userpassword="hellomitconnect";

$from="mitcomitconnectuser@gmail.com";
$from_name="MitConnect";
$msgsent="Your verification code for MSDE is $code. ";
$subject="Verification code MSDE";


include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $userpassword;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msgsent;
$mail->addAddress($to);
$mail->SMTPDebug = 2;
if(!$mail->send()){
return false;
}*/
return true;
}

function formatDate($date){
return date('g:i a',strtotime($date));
}

?>
