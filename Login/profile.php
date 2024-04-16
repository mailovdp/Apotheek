<?php
session_start();
require "header.php";

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: index.php");
    exit();
}

// Fetch user data from session
$userId = $_SESSION['userId'];
$userUid = $_SESSION['userUid'];

// You can fetch additional user data from your database if needed

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Welcome to your profile, <?php echo $userUid; ?>!</h1>
            <p>This is your secure profile page.</p>
            <!-- Add more content or functionality here as needed -->
        </section>
    </div>
</main>

<?php require "footer.php"; ?>

</body>
</html>
