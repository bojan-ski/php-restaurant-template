<?php

require __DIR__ . '/getSelectOptions.php';

$data = json_decode(file_get_contents('php://input'), true);
$selectedOption = $data['userSelectedOption'] ?? 'promo';

// check if user selected option exist in selectable options array (obj)
if(isset($selectOptionsResult) && !empty($selectOptionsResult)){
    $selectOptionsArray = [];
    while ($row = $selectOptionsResult->fetch_assoc()) {
        $selectOptionsArray[] = $row;
    }
    
    $matches = array_filter($selectOptionsArray, function ($item) use ($selectedOption) {
        return $item["select_option_title"] === $selectedOption;
    });
}

if (!empty($matches)) {
    // run query if user selected option exist in selectable options array (obj)
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
} else {
    throw new Exception("'$selectedOption' does not exist in the array.");

    // PITAJ
    // echo "GRESKA";
}