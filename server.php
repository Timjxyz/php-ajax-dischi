<?php

require __DIR__ . '/database.php';
//Serviva solo per ricaricare la chiamata come con esempio boolean 
// $response = [
//     'success' => true,
//     'response' => $database
// ];



header('Content-Type: application/json');
echo json_encode($database);