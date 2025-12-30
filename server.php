<?php
$ip = $_SERVER['REMOTE_ADDR'];
$method = $_SERVER['REQUEST_METHOD'];
$page = $_SERVER['PHP_SELF'];

echo "Client IP Address: $ip <br>";
echo "Request Method: $method <br>";
echo "Current Page: $page <br>";
?>
