<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Simple validation (hardcoded for demo)
    if ($username == "admin" && $password == "1234") {
        $_SESSION['loggedin'] = true;
        echo "Login Successful! Welcome, $username.";
    } else {
        echo "Invalid username or password!";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
