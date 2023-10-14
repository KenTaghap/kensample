<?php
require 'vendor/autoload.php'; // Load Composer's autoloader

// Replace with your MongoDB Atlas connection string
$connectionString = "mongodb+srv://kenUser:KenPassword@atlascluster.qrj9egp.mongodb.net/examples";

try {
    $client = new MongoDB\Client($connectionString);
    $collection = $client->examples->people;

    $data = [
        "name" => "John Doe",
        "email" => "john.doe@example.com",
        "age" => 30,
    ];

    $insertResult = $collection->insertOne($data);
    echo "Inserted document with ID: " . $insertResult->getInsertedId() . "\n";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
