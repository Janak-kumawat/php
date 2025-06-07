<?php
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = htmlspecialchars($_GET['username']);
    $password = htmlspecialchars($_GET['password']);

    echo "<h2>Signup Details</h2>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password;
} else {
    echo "No data received.";
}
?>
