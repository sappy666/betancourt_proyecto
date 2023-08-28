<?php
require_once('vendor/autoload.php');
$email = $_POST["email"];
$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.brevo.com/v3/contacts', [
  'body' => '{"updateEnabled":false,"email":"'.$email.'","emailBlacklisted":true,"smsBlacklisted":false,"listIds":[3]}',
  'headers' => [
    'accept' => 'application/json',
    'api-key' => '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 ',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();