<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




// echo $msgBody;
$apiParamas=array(
    "username"=>'encircle',
    "password"=>'16MwwCxxvU',
    "from"=>'8086467632',
    "to"=>'8086467632',
    "text"=>'xvdf',
    "sender"=>'8086467632',
    );
echo https://smsapp.mx9.in/smpp/;




exit;

















//Enter your login username 
$username="encircle";

//Enter your login password 
$password="16MwwCxxvU";

//Enter your text message 
$message="hello";

//Enter your Sender ID
$sender="8086467632";

//Enter your receiver mobile number
$mobile_number="8086467632";

//Don't change below code use as it is
$url="https://smsapp.mx9.in/smpp/".urlencode($username)."&password=".urlencode($password)."&
mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
echo $url;
exit;
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$curl_scraped_page = curl_exec($ch);

curl_close($ch);

?>