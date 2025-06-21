<?php
// Nastavenie CORS hlavičiek (pred odoslaním akéhokoľvek výstupu)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Spracovanie predbežnej OPTIONS požiadavky
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit();
}

header('Content-Type: application/json');

$request = $_SERVER['REQUEST_URI'];
if ($request === '/api/status') {
    echo json_encode(['status' => 'ok']);
} else {
    echo json_encode(['message' => 'Vitajte v backend API']);
}
