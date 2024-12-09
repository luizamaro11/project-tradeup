<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Controllers\ApiController;

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// rota para buscar pelo código cep
if (strpos($requestUri, '/project-tradeup/api/zipcode') === 0 && $requestMethod === 'GET') {
    $zipcode = $_GET['cep'];
    (new ApiController())->consultZipcode($zipcode);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Rota não encontrada']);
}
