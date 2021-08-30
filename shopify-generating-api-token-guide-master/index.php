<?php
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://08b22714d544265d95b679ec26bdbcaf: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@shopbhatt.myshopify.com/admin/api/2021-07/orders.json
', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();
?>
