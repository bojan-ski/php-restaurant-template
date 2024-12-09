<?php

function loadEnv($filePath){
    // redirect user if error
    if (!file_exists($filePath)) header("Location: error.php");

    // check .env file
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

loadEnv(__DIR__ . '/.env');

$hostname = $_ENV['DB_HOSTNAME'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

// connect to DB
$connectionToDB = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($connectionToDB->connect_error) header("Location: error.php");