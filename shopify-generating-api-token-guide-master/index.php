<?php
$url = "https://08b22714d544265d95b679ec26bdbcaf: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@shopbhatt.myshopify.com/admin/api/2021-07/orders.json";
$client = new GuzzleHttp/Client();
$headers = [
  'X-Shopify-Access-Token' => $oauthToken,
  'Content-Type' => 'application/json',
];
$response = $client->get($url, ['verify' => false, 'headers' => $headers]);
return (string) $response->getBody();
?>
