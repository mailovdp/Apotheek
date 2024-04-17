<!-- header.php -->

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="this is in example of an meta description. this will often show in search results">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn Sherm</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
            <img src="" alt="logo">    
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Ho</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Me</a></li>
            <?php
            // Check if user is logged in
            if (isset($_SESSION['userId'])) {
                echo '<li><a href="profile.php">Profile</a></li>'; // Add Profile button
            }
            ?>
        </ul>
    </nav>
    <div class="header-login">
        <?php
        if (isset($_SESSION['userId'])) {
            echo ' <form action="./includes/logout.inc.php" method="post">
                    <button type="submit" name="Logout-submit">Logout</button>
                </form>';
        } else {
            echo '<form action="./includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="Login-submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>';
        }
        ?>
    </div>
</header>

</body>
</html>
