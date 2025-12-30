<?php
$counter = 0;

function increment_counter() {
    $GLOBALS['counter']++;
}

increment_counter();
increment_counter();

echo "Global counter value: " . $counter;
?>
