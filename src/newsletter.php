<?php
require_once('vendor/autoload.php');
$email = $_POST["email"];
$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.brevo.com/v3/contacts', [
  'body' => '{"updateEnabled":false,"email":"'.$email.'","emailBlacklisted":true,"smsBlacklisted":false,"listIds":[3]}',
  'headers' => [
    'accept' => 'application/json',
    'api-key' => '',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();