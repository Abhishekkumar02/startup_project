<?php
require "stableconnect.php";
require "checkuser.php";
if(!$loggedin)
{
  header("location:signin.php");
exit();
}
function calprice($rid,$gbf,$gbt)
{
$d1=strtotime($gbf);
 $d2=strtotime($gbt);
$diff1=floor((($d2-$d1)/86400)+1);
return $diff1*$rid;
}
{
	$finalpr=0;
$MERCHANT_KEY = "2Gv1fut7";
$posted = array();
$posted['key']=$key=$MERCHANT_KEY;
$SALT = "1QxBsGHt2t";
$posted["email"]=$email=$_SESSION["useremailgov"];

$sq2="SELECT * FROM user_details WHERE user_id='$email'";
$re2=mysqli_query($conn,$sq2);
$row2=mysqli_fetch_assoc($re2);

$posted['firstname']=$firstname=$row2["user_name"];
$posted['phone']=$phone=$row2["user_phone"];

$sql_query="SELECT * FROM cart_details WHERE user_id='$email'";
$result0=mysqli_query($conn,$sql_query) ;
if(mysqli_num_rows($result0)>0)
{

	while($row0=mysqli_fetch_assoc($result0))
	{
    $cart_id=$row0["id"];
    $room_id=$row0["room_id"];
$getbkfrom=$row0["check_in"];
$getbktill=$row0["check_out"];
$sq11="SELECT * FROM room_details WHERE room_id='$room_id'";
$row=(mysqli_fetch_assoc(mysqli_query($conn,$sq11)));
$price=htmlentities($row["price"]);
$fp=calprice($price,$getbkfrom,$getbktill); $finalpr+=$fp;
}}
$posted['amount']=$amount=$finalpr;
$posted['productinfo']=$productinfo="Rooms";
$posted['surl']=$surl="http://localhost/nh/paymentsuccess.php";
$posted['furl']=$furl="http://localhost/nh/paymentfailed.php";
$posted['service_provider']=$service_provider="payu_paisa";
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$formError = 0;
 $posted['txnid']=$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";


if(empty($posted['hash']) )
	{
  if(
          empty($key)
          || empty($txnid)
          || empty($amount)
          || empty($firstname)
          || empty($email)
          || empty($phone)
          || empty($productinfo)
          || empty($surl)
          || empty($furl)
		  || empty($service_provider)
  ) {
    $formError = 1;
  } else {
   $hashVarsSeq = explode('|', $hashSequence);
	$hash_string = '';

	foreach($hashVarsSeq as $hash_var) {
    $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
       $hash_string .= '|';


	}

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
$sq11="UPDATE cart_details SET locked='1' WHERE user_id='$email'";
if(!mysqli_query($conn,$sq11))
{
  echo "Something went wrong";
  exit();
}
}?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
     payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
   <h2 class="text-center">Please Wait... We are redirecting you to payment gateway.</h2>
  <div style="display:none;">
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input required  type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input required  type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input required  type="hidden" name="txnid" value="<?php echo $txnid ?>" />
        <input required  type="hidden" name="amount" value="<?php echo (empty($amount)) ? '' : $amount ?>" />
          <input required   type="hidden"name="firstname" id="firstname" value="<?php echo (empty($firstname)) ? '' : $firstname; ?>" />
          <input required  type="hidden" name="email" id="email" value="<?php echo (empty($email)) ? '' : $email; ?>" />
          <input required  type="hidden" name="phone" value="<?php echo (empty($phone)) ? '' : $phone; ?>" />
          <textarea type="hidden" name="productinfo"><?php echo (empty($productinfo)) ? '' : $productinfo ?></textarea>
          <input required  type="hidden"  name="surl" value="<?php echo $surl; ?>" size="64" />
          <input required  type="hidden" name="furl" value="<?php echo $furl; ?>" size="64" />
          <input required  type="hidden" type="hidden" name="service_provider" value="payu_paisa" size="64" />


    </form></div>
  </body>
</html>
