<?php
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "tphserver.mysql.database.azure.com", "tphadmin", "ThePortfolioHub123", "bagongserver", 3306, MYSQLI_CLIENT_SSL);
?>
