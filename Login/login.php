<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="this is in example of an meta description. this will often show in search results">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn Sherm</title>
<link rel="stylesheet" href="login.css">
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
</ul>
</nav>
<div class="header-login">
    <form action="includes/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
<input type="password" name="pwd" placeholder="Password...">
<button type="submit" name="Login-submit">Login</button>
    </form>
    <a href="signup.php">Signup</a>
    <form action="includes/logout.inc.php" method="post">
<button type="submit" name="Logout-submit">Logout</button>
    </form>
</div>



</header>









</body>
</html>