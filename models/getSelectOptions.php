<?php

require __DIR__ . '/connectToDB.php';

try {
    $getSelectOptionsQuery = "SELECT * FROM select_options";
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
