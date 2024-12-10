<?php

require __DIR__ . '/connectToDB.php';

$lang = $_SESSION['lang'] ?? 'sr';

try {
    $getSelectOptionsQuery = "SELECT * FROM select_options WHERE data_language='$lang'";
    $selectOptionsResult = $connectionToDB->query($getSelectOptionsQuery);

    if (!$selectOptionsResult) {
        $selectOptionsResult = 0;
        
        // close connection
        $connectionToDB->close();
    }
} catch (Exception $e) {
    $selectOptionsResult = 0;

    // close connection
    $connectionToDB->close();
}
