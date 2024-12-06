<?php

require __DIR__ . '/connectToDB.php';

try {
    $getSelectOptionsQuery = "SELECT * FROM select_options";
    $selectOptionsResult = $connectionToDB->query($getSelectOptionsQuery);

    // ERROR - REWORK AT END
    if (!$selectOptionsResult) {
        throw new Exception("Query failed: " . $connectionToDB->error);
    }
} catch (Exception $e) {
    // ERROR - REWORK AT END
    echo (['error' => $e->getMessage()]);
} 