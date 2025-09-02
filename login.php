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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $password = $_POST["password"];

    if ($name == $validName && $password == $validPass) {

        $_SESSION["validuser"] = [
            "username" => $name,
            "password" => $password
        ];

        header ("Location:todo.php");
    } else {
        echo $error = " ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <div class="container">
    <form class="form active" id="loginForm" method="POST">
      <h2>Login</h2>
      <input type="username" placeholder="username" name="username">
      <input type="password" placeholder="Password" name="password">
      <button>Login</button>
    </form>

    <form class="form" id="signupForm">
      <h2>Sign Up</h2>
      <input type="text" placeholder="Name" name="username">
      <input type="email" placeholder="Email" username="email">
      <input type="password" placeholder="Password" name="password">
      <button>Register</button>
    </form>

    <div class="toggle" onclick="toggleForms()">Switch to Sign Up</div>
  </div>

  <script>
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const toggleBtn = document.querySelector('.toggle');
    let isLogin = true;

    function toggleForms() {
      if (isLogin) {
        loginForm.classList.remove('active');
        signupForm.classList.add('active');
        toggleBtn.textContent = "Switch to Login";
      } else {
        signupForm.classList.remove('active');
        loginForm.classList.add('active');
        toggleBtn.textContent = "Switch to Sign Up";
      }
      isLogin = !isLogin;
    }
  </script>

    <!-- <form method="POST">
        <label for="username">Name:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form> -->
</body>
</html>