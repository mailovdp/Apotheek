<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: /apotheek/login/index.php");
    exit();
}

// Include database connection file
require 'dbh.inc.php';

// Fetch user details from the database
$sql = "SELECT * FROM users WHERE idUsers=?;";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    // Handle SQL error
    // You can redirect the user or display an error message
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "i", $_SESSION['userId']); 
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        // Store user details in variables
        $email = $row['emailUsers'];
        $username = $row['uidUsers'];
        $password = $row['pwdUsers'];
    } else {
        // User not found
        // You can redirect the user or display an error message
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Add your CSS stylesheets here -->
</head>
<body>

<header>
    <!-- Your header content here -->
</header>

<main>
    <div class="container">
        <h1>Welcome to your profile, <?php echo $username; ?>!</h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Username: <?php echo $username; ?></p>
        <p>Password: *********</p> <!-- For security reasons, don't display the password -->

        <!-- Change Password Form -->
        <h2>Change Password</h2>
        <form action="change_password.php" method="post">
            <input type="password" name="current-password" placeholder="Current Password">
            <input type="password" name="new-password" placeholder="New Password">
            <input type="password" name="confirm-password" placeholder="Confirm New Password">
            <button type="submit" name="change-password-submit">Change Password</button>
        </form>
    </div>
</main>

<footer>
    <!-- Your footer content here -->
</footer>

</body>
</html>
