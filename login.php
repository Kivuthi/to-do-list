<?php
session_start();

// logout handle
if (isset($_GET["logout"])){
    session_destroy();
    header ("Location: login.php");
}
// login handle
if (isset($_SESSION["username"])) {
    echo "<h2>Welcome back, " . $_SESSION["username"] . "</h2>";
    echo '<a href="?logout=true">Logout</a>';
} else {
    if (!empty($error)) {
        echo "$error";
    }
}

$validName = "dennis";
$validPass = "1234";

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $name = $_POST["username"];
    $password = $_POST["password"];

    if ($name == $validName && $password == $validPass) {

        $_SESSION["validuser"] = [
            "username" => $name,
            "password" => $password
        ];

        header ("Location:todo.php");
    } else {
        echo "<h3>Invalid Login Credentials</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do-list</title>
</head>
<body>
    <form method="POST">
        <label for="username">Name:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>