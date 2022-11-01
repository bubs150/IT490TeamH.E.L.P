#!/usr/bin/php
<?php
require_once('lib/path.inc');
require_once('lib/get_host_info.inc');
require_once('lib/rabbitMQLib.inc');

session_start();

$email = $_POST["email"];
$user = $_POST["user"];
$pword = $_POST["pword"];
$error = 0;
if(!isset($email)){
	echo "please fill email";
	$error = 1;
}
if(!isset($user)){
	echo "please fill user";
	$error = 1;
}
if(!isset($pword)){
	echo "please fill pasword";
	$error = 1;
}
if($error == 1){
	exit();
}	

$client = new rabbitMQClient("testRabbitMQ.ini","dbServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}

$request = array();
$request['type'] = "create_user";
$request['email'] = $email;
$request['username'] = $user;
$request['password'] = $pword;
$request['message'] = $msg;

$response = $client->send_request($request);
//$response = $client->publish($request);

//echo "client received response: ".PHP_EOL;
//print_r($response);
//echo "\n\n";

if($response == 1){
	
	echo '<script type="text/javascript">
        window.location.replace(\'index.html\');
        </script>';

}

echo $argv[0]." END".PHP_EOL;
?>
