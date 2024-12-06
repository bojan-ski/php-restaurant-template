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
        return $item["select_option_value"] === $selectedOption;
    });
}

if (!empty($matches)) {
    // run query if user selected option exist in selectable options array (obj)
    try {
        $query = "SELECT * FROM `$selectedOption`";
        $response = $connectionToDB->query($query);

        // ERROR - REWORK AT END
        if (!$response) {
            throw new Exception("Query failed: " . $connectionToDB->error);
        }

        $menuItems = $response->fetch_all(MYSQLI_ASSOC);

        header('Content-Type: application/json');
        echo json_encode($menuItems);
    } catch (Exception $e) {
        header('Content-Type: application/json');

        // ERROR - REWORK AT END
        echo json_encode(['error' => $e->getMessage()]);
    } finally {
        $connectionToDB->close();
    }
} else {
    // ERROR - REWORK AT END
    throw new Exception("'$selectedOption' does not exist in the array.");
}