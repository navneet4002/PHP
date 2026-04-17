<?php
// Redirect to login if not logged in
if (!isset($_COOKIE['loggedin_user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
// COOKIE PROJECT - NAVNEET KAUR

$cookie_name = "visitor_name";

// --- DELETE COOKIE IF LOGOUT CLICKED ---
if (isset($_POST['logout'])) {
    setcookie($cookie_name, "", time() - 86400, "/"); // Expire cookie
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// --- SET COOKIE IF USER ENTERS NAME ---
if (!isset($_COOKIE[$cookie_name])) {
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $cookie_value = htmlspecialchars($_POST['username']);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 7 days
        header("Location: " . $_SERVER['PHP_SELF']); // Reload after setting
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Warm Cream Theme</title>
    <style>
        /* Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        /* Theme */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #fdf6e3;
            color: #073642;
        }

        .container { display: flex; min-height: 100vh; }

        /* Sidebar */
        .navbar {
            width: 250px;
            background-color: #eee8d5;
            padding: 25px 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow-y: auto;
            position: fixed;
            height: 100vh;
            border-right: 1px solid #d7d0c0;
        }

        .navlist { list-style: none; }
        .navlist li { margin: 15px 0; }
        .navlist a {
            text-decoration: none;
            color: #586e75;
            font-weight: 500;
            font-size: 18px;
            padding: 12px 15px;
            display: block;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .navlist a:hover {
            background-color: rgba(203, 75, 22, 0.1);
            color: #cb4b16;
        }

        /* Main */
        .main-content {
            flex-grow: 1;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 250px;
            min-height: 100vh;
        }

        .frame {
            border: none;
            border-top: 5px solid #cb4b16;
            padding: 50px 60px;
            background-color: #fdf6e3;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            text-align: center;
            max-width: 600px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 { color: #cb4b16; margin-bottom: 10px; font-size: 42px; letter-spacing: 1px; font-weight: 600; }
        h2 { color: #b58900; margin-top: 15px; margin-bottom: 5px; font-size: 26px; font-weight: 500; }
        p  { color: #586e75; font-size: 18px; margin: 5px 0; line-height: 1.5; }

        input[type="text"] {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
            width: 70%;
        }

        button {
            background-color: #cb4b16;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
            margin-left: 10px;
            font-size: 16px;
        }
        button:hover { background-color: #b23c12; }

        footer {
            position: fixed;
            bottom: 10px;
            left: 250px;
            width: calc(100% - 250px);
            text-align: center;
            font-weight: 500;
            font-size: 16px;
            color: #93a1a1;
        }
    </style>
</head>
<body>

<div class="container">
    <nav class="navbar">
        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="prog.html">Programs</a></li>
            <li><a href="mysql.php">Integrating PHP and Database</a></li>
            <li><a href="form.php">Integrating Forms and Database</a></li>
            <li><a href="file.php">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main-content">
        <div class="frame">
            <?php if(!isset($_COOKIE[$cookie_name])): ?>
                <h1>Welcome!</h1>
                <p>Please enter your name to continue:</p>
                <form method="post">
                    <input type="text" name="username" placeholder="Enter your name" required>
                    <button type="submit">Save</button>
                </form>
            <?php else: ?>
                <h1>Welcome back, <?php echo $_COOKIE[$cookie_name]; ?>!</h1>
                <h2>Navneet Kaur</h2>
                <p>4002/23</p>
                <p>BCA - 3rd Year</p>
                <h2>Mentor: Mr. Gaurav Dutt</h2>
                <form method="post" action="">
                    <button type="submit" name="logout" style="background-color:#b58900;">Clear Cookie</button>
                </form>
                <form method="post" action="login.php">
                    <button type="submit" name="logout" style="background-color:#b23c12;">Logout</button>
                </form>
            <?php endif; ?>
        </div>
    </section>
</div>

<footer>
    <p>© 2025 PHP Project | Created by Navneet Kaur</p>
</footer>

</body>
</html>
