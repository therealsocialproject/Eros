<?php
// Get the links data from the request body
$linksData = file_get_contents('php://input');

// Specify the path to the links file
$linksFilePath = 'links.txt';

// Save the links data to the file
file_put_contents($linksFilePath, $linksData);

// Set the response status to indicate success
http_response_code(200);
?>
