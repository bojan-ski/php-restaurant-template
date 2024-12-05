<?php

require __DIR__ . '/connectToDB.php';

try {
    $getSelectOptionsQuery = "SELECT * FROM select_options";
    $selectOptionsResult = $connectionToDB->query($getSelectOptionsQuery);

    // PITAJ 
    if (!$selectOptionsResult) {
        throw new Exception("Query failed: " . $connectionToDB->error);
    }
} catch (Exception $e) {
    echo (['error' => $e->getMessage()]);


    // PITAJ
    // echo "GRESKA";
} finally {
    $connectionToDB->close();
}
