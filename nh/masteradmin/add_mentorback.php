<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($name))
	exit();
        $uid = gen_uuid();
	$query="INSERT INTO mentor_details(name,type,about,uid) VALUES('$name','$tpy','$about','$uid')";
	if(mysqli_query($conn,$query))
  header("location:add_mentor.php?success=true");
else {
  header("location:add_mentor.php?failed=true");
}
}
function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
?>
