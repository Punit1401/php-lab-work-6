<?php
// Simulate environment variable (in real case, it's set in php.ini or server)
$_ENV['APP_ENV'] = 'development';

if ($_ENV['APP_ENV'] == 'development') {
    echo "Connected to Development Database";
} else {
    echo "Connected to Production Database";
}
?>
