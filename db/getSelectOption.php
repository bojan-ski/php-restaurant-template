<?php

require __DIR__ . '/connectToDB.php';

$user_query = "SELECT * FROM promo";
$result = $connection_to_db->query($user_query);

if ($result->num_rows > 0) {
    // var_dump($result);
    while ($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo "id: " . $row["id"] .  "<br>";
    }
} else {
    echo "0 results";
}