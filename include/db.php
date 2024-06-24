<?php
// Initialize the MySQLi connection with SSL
$db = mysqli_init();

// Define the path to the SSL certificate
$ssl_cert_path = _DIR_ . "/DigiCertGlobalRootCA.crt.pem";

// Check if the SSL certificate file exists
if (!file_exists($ssl_cert_path)) {
    die("SSL certificate file not found: " . $ssl_cert_path);
}

// Set up SSL for the MySQL connection
mysqli_ssl_set($db, NULL, NULL, $ssl_cert_path, NULL, NULL);

// Establish the connection using SSL
if (!mysqli_real_connect($db, "tphserver.mysql.database.azure.com", "tphadmin", "ThePortfolioHub123", "tph", 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "Successfully connected to the database.";

// You can now use $conn for your database operations
?>
