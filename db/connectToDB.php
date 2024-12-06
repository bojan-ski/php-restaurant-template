<?php

function loadEnv($filePath){
    if (!file_exists($filePath)) {
        // ERROR - REWORK AT END
        throw new Exception("Pojavila se greška, molimo Vas probajte ponovo");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        $value = trim($value, '"');

        putenv("$key=$value");
        $_ENV[$key] = $value;
    }
}

// PITAJ
loadEnv(__DIR__ . '/.env');

$hostname = $_ENV['DB_HOSTNAME'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$connectionToDB = new mysqli($hostname, $username, $password, $dbname);

// Check connection
// ERROR - REWORK AT END
if ($connectionToDB->connect_error) die("Connection failed: " . $connectionToDB->connect_error);