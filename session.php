<?php
session_start();
$timeout = 10; // seconds

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    echo "Session expired. Please log in again.";
} else {
    $_SESSION['last_activity'] = time();
    echo "Session active! Last activity updated.";
}
?>
