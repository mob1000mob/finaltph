<?php
// Fetch database configuration from environment variables
$db_host = getenv('tphserver.mysql.database.azure.com');
$db_user = getenv('tphadmin');
$db_pass = getenv('ThePortfolioHub123');
$db_name = getenv('newserver');

// Establish a connection to the database
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if (!$db) {
    // Log the error message and show a user-friendly message
    error_log("Connection failed: " . mysqli_connect_error());
    die("We're experiencing technical difficulties. Please try again later.");
}
?>
