<?php

function register_user($email, $password, $fullname, $conn)
{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Users (email, password, fullname) VALUES ('" . $email . "', '" . $hashed_password . "', '" . $fullname . "')";
    $conn->query($sql);
}
