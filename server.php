<?php

require __DIR__ . '/database.php';

$response = [
    'success' => true,
    'response' => $database
];



header('Content-Type: application/json');
echo json_encode($response);