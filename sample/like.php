#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("dmz.ini","dbServer");

$oName = $_POST['oName'];

$request = array();
$request['type'] = "like";
$request['name'] = $oName;
$request['uid'] = 1;
$response = $client->send_request($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;

?>