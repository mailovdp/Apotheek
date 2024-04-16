<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: /apotheek/login/index.php");
    exit();
}

// Include database connection file
require 'dbh.inc.php';

if (isset($_POST['change-password-submit'])) {
    // Fetch current password from form
    $currentPassword = $_POST['current-password'];
    $newPassword = $_POST['new-password'];
    $confirmPassword = $_POST['confirm-password'];

    // Fetch user's current password from the database
    $userId = $_SESSION['userId'];
    $sql = "SELECT pwdUsers FROM users WHERE idUsers=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // Handle SQL error
        // You can redirect the user or display an error message
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $userId); 
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            $hashedPwdCheck = password_verify($currentPassword, $row['pwdUsers']);
            if ($hashedPwdCheck == false) {
                // Current password entered by user is incorrect
                header("Location: /apotheek/profile.php?error=wrongpassword");
                exit();
            } else {
                // Current password entered by user is correct
                // Check if new password and confirm password match
                if ($newPassword !== $confirmPassword) {
                    // New password and confirm password do not match
                    header("Location: /apotheek/profile.php?error=passwordmismatch");
                    exit();
                } else {
                    // Update user's password in the database
                    $hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT);
                    $sql = "UPDATE users SET pwdUsers=? WHERE idUsers=?;";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        // Handle SQL error
                        // You can redirect the user or display an error message
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "si", $hashedPwd, $userId); 
                        mysqli_stmt_execute($stmt);
                        
                        // Password updated successfully
                        header("Location: /apotheek/profile.php?change=passwordsuccess");
                        exit();
                    }
                }
            }
        } else {
            // User not found
            // You can redirect the user or display an error message
            exit();
        }
    }
} else {
    // Redirect user if they accessed this page without submitting the form
    header("Location: /apotheek/profile.php");
    exit();
}
?>
