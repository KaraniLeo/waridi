<?php
require "database_connection.php";
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];

if (empty($email) or empty($password)) {
    echo "Invalid Input";
} else {
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $query = "UPDATE users SET password=? where email=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $hashed_password, $email);
    if (mysqli_stmt_execute($stmt)) {
        echo 'Password Changed Successfully';
        // header('Location: login.php');
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        die("Error: " . mysqli_error($conn));
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}

