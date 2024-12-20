<?php

require __DIR__ . '/getSelectOptions.php';

session_start();
$lang = $_SESSION['lang'] ?? 'sr';

$data = json_decode(file_get_contents('php://input'), true);
$selectedOption = $data['userSelectedOption'] ?? 'promo';

// check if User selected option exist in selectable options array (obj)
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
    // run query if User selected option exist in selectable options array (obj)
    try {
        $query = "SELECT * FROM `$selectedOption` WHERE data_language='{$lang}'";
        $response = $connectionToDB->query($query);

        if (!$response) {
            throw new Exception("Query failed");
        }

        $menuItems = $response->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($menuItems);
    } catch (Exception $e) {
        throw new Exception("Error while fetching menu items");
    }
} else {
    // throw if User selected option does not exist in selectable options array (obj)
    throw new Exception("'$selectedOption' does not exist in the array.");
}

// close connection
$connectionToDB->close();