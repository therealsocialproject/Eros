<?php
// Specify the path to the links file
$linksFilePath = 'links.txt';

// Check if the links file exists
if (file_exists($linksFilePath)) {
  // Read the contents of the links file
  $linksData = file_get_contents($linksFilePath);

  // Set the response content type to JSON
  header('Content-Type: application/json');

  // Return the links data as the response
  echo $linksData;
} else {
  // Set the response status to indicate failure
  http_response_code(404);
}
?>
