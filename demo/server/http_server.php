<?php

$http = new swoole_http_server("0.0.0.0", 8811);

$http->set([
    'enable_static_handler' => true,
    'document_root'         => '/home/haojianhai/swoole-study/assets',
]);

$http->on('request', function ($request, $response) {
    $response->end("<meta charset='utf-8'><h1>http_server</h1><br />参数：" . json_encode($request->get));
});

$http->start();
