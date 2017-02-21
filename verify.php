$proxy = 'http://velodrome.usefixie.com:80';
$proxyauth = 'fixie:G119ZGKvGnZWjp9';
<?php
$access_token = 'ZIThy7xgsrMjCzmlE7OsePNhvotMpGe/gvICHCZVmtvNnfIOKQ/S99NyWd203VApUYl29rSKLMHXlvIxtkuwJeglpg368abvdOaPMJed42O0y1QXP8DI0bIv/aCWqVGNXVlCGfa0uR2of/urW1yjvgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
