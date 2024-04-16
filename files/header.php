<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li><a href="index.php" class="nav-button">Home</a></li>
            <li><a href="#" class="nav-button">Ho</a></li>
            <li><a href="#" class="nav-button">Contact</a></li>
            <li><a href="#" class="nav-button">About Me</a></li>
            <li>
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="./includes/logout.inc.php" method="post">
                            <button type="submit" name="Logout-submit" class="logout-button">Logout</button>
                          </form>';
                } else {
                    echo '<a href="signup.php" class="signup-button">Signup</a>';
                }
                ?>
            </li>
        </ul>
    </nav>
    <div class="header-login">
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<form action="./includes/logout.inc.php" method="post">
                    <button type="submit" name="Logout-submit" class="logout-button">Logout</button>
                  </form>';
        } else {
            echo '<form action="./includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="Login-submit" class="login-button">Login</button>
                  </form>
                  <a href="signup.php" class="signup-button">Signup</a>';
        }
        ?>
    </div>
</header>

</body>
</html>
