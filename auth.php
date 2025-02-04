<?php

require_once("_connect.php");

if (!isset($_POST['user_id']) || !isset($_POST['password'])) die("Missing POST data");

$username = $_POST['user_id'];
$password = $_POST['password'];

// Input Validation to be added later :)

$SQL = "SELECT * FROM `USERS` WHERE `user_id` = ?";

$stmt = mysqli_prepare($connect, $SQL);
mysqli_stmt_bind_param($stmt, "s", $user_id);
mysqli_stmt_execute($stmt);

// Get the result from the MySQL query
$result = mysqli_stmt_get_result($stmt);

// Check if one row was returned
if (mysqli_num_rows($result) == 1)
{
    // Get user data from the MySQL result
    $USER = mysqli_fetch_assoc($result);

    // Check password using password_verify and bcrypt
    if (password_verify($password, $USER['password']))
    {
        @session_start();

        $_SESSION['user_id'] = $USER['user_id'];
        $_SESSION['email'] = $USER['email'];
        $_SESSION['first_name'] = $USER['first_name'];
        $_SESSION['last_name'] = $USER['last_name'];

        die("true");
    }
}

echo "Invalid username or password!";