<?php
if (isset($_POST['theme'])) {
    $theme = htmlspecialchars($_POST['theme']);
    setcookie("user_theme", $theme, time() + 3600); // expires in 1 hour
    echo "Theme set to: $theme";
}
?>

<form method="POST">
    Choose Theme:
    <select name="theme">
        <option>Light</option>
        <option>Dark</option>
    </select>
    <input type="submit" value="Save Preference">
</form>

<?php
if (isset($_COOKIE['user_theme'])) {
    echo "<p>Your preferred theme is: " . $_COOKIE['user_theme'] . "</p>";
}
?>
