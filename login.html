<?php
// LOGIN PAGE - NAVNEET KAUR

// Simple login credentials
$valid_username = "navneet";
$valid_password = "1230";

// If the user submitted the login form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set a login cookie valid for 1 hour
        setcookie("loggedin_user", $username, time() + 3600, "/");
        header("Location: index.php"); // Redirect to main site
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
if (isset($_POST['logout'])) {
    setcookie("loggedin_user", "", time() - 3600, "/"); // Clear login cookie
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - PHP Project</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fdf6e3;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-box {
        background: #eee8d5;
        padding: 40px 50px;
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        text-align: center;
    }
    h2 {
        color: #cb4b16;
        margin-bottom: 20px;
    }
    input {
        width: 80%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
    button {
        background-color: #cb4b16;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
    }
    button:hover { background-color: #b23c12; }
    p.error { color: red; }
</style>
</head>
<body>
<div class="login-box">
    <h2>Website Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
</div>
</body>
</html>
