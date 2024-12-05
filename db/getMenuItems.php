<?php

require __DIR__ . '/connectToDB.php';

$data = json_decode(file_get_contents('php://input'), true);
$selectedOption = $data['userSelectedOption'] ?? 'promo';

try {
    $query = "SELECT * FROM `$selectedOption`";
    $response = $connectionToDB->query($query);

    // PITAJ
    if (!$response) {
        throw new Exception("Query failed: " . $connectionToDB->error);
    }

    $menuItems = $response->fetch_all(MYSQLI_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($menuItems);
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);

    
    // PITAJ
    // echo "GRESKA";
} finally {
    $connectionToDB->close();
}