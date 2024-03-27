<?php
// File: receive_signal.php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the numerical value from the POST data
    $number_value = isset($_POST['number']) ? intval($_POST['number']) : null;

    // Check if numerical value is received
    if ($number_value !== null) {
        // Process the received numerical value
        // For demonstration purposes, let's just print the value
        echo "Received numerical value: $number_value\n";
    } else {
        echo "No numerical value received.\n";
    }
} else {
    // Respond with an error message for unsupported request methods
    http_response_code(405); // Method Not Allowed
    echo 'Unsupported request method.';
}
?>
