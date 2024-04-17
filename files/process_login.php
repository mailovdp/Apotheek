<?php
// process_login.php

session_start();

if (isset($_POST['Login-submit'])) {
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password))  {
        header("Location: /apotheek/login/index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=?;";      
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /apotheek/login/index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $mailuid); 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                
                if ($pwdCheck == false) {
                    header("Location: /apotheek/login/index.php?error=wrongpwd");
                    exit();
                } else {
                    session_start(); // Start a new session if not started already
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    header("Location: /apotheek/profile.php?login=success"); // Redirect to profile page
                    exit();
                }
            } else {
                header("Location: /apotheek/login/index.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: /apotheek/login/index.php");
    exit();
}
?>
