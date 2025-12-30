<form method="GET">
    Enter your name: <input type="text" name="name" required><br><br>
    <input type="submit" value="Register">
</form>

<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Welcome, $name! Your registration is complete.";
}
?>
