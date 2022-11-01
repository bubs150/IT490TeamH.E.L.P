<?php
require_once('lib/path.inc');
require_once('lib/get_host_info.inc');
require_once('lib/rabbitMQLib.inc');

session_start();

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
$request['type'] = "validate_session";
$request['sessionid'] = $_POST["id"];

$response = $client->send_request($request);
$_SESSION['validsession'] = $response;
echo 1;
?>
