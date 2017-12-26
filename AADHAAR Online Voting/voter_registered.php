<!doctype html>
<html>
<head></head>
<body>
<?php
include "const_login_header.php";
$no=$_REQUEST['m'];
$pin=$_REQUEST['p'];
$nam=$_REQUEST['nm'];
//echo $no." ".$pin;
?>

<?php
$request =""; //initialise the request variable
$param['method']= "sendMessage";
$param['send_to'] = $no;
$param['msg'] = "Your Pin for log in is".$pin;
$param['userid'] = "2000036319";
$param['password'] = "vsssmsserver";
$param['v'] = "1.1";
$param['msg_type'] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"/”BINARY”
$param['auth_scheme'] = "PLAIN";
//Have to URL encode the values
foreach($param as $key=>$val) {
    $request.= $key."=".urlencode($val);
//we have to urlencode the values
    $request.= "&";
//append the ampersand (&) sign after each  parameter/value pair
}
$request = substr($request, 0, strlen($request)-1);
//remove final (&) sign from the request
$url =
    "http://enterprise.smsgupshup.com/GatewayAPI/rest?".$request;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
$result=$curl_scraped_page;
//echo $result;
header("location:confirmation_voter.php?q=$pin"."&nm=".$nam);

?>
</body>
</html>