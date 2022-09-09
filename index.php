<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Handle.php';
$jwt = new Handle();
$token = $jwt->encodedData(
	'http://localhost/phpjwt/',
	["name"=>"pinto", "email"=>"pinto@email.com", "id" => 24]
);

echo "<center>";
echo "<b align='center'> The Token is :	</b><br>";
echo "<textarea rows='10' cols='30' >".$token."</textarea>";
echo "</center>";

echo "<hr>";
echo "<a href='decode.php'> decode </a>";
