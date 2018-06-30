<?php
$access_token = 'clc5go7GkujiSMA1Yo4iwYRni8P8AvGTpQSl+15mVdTM0irg6BBFJr9l0BTKYStOFS6KtODelavjWJ7m0vOTsnsnifKh1oDCOhFsZdiAN8xg0vx/3BhnwBKPwQmfqgsOx2QDcfUF38D3IwaZjxbIUQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;