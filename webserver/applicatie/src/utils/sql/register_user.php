<?php

function register_user($email, $password, $fullname, $conn)
{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO Users (email, password, fullname) VALUES (:email, :hashed_password, :fullname)";

    $stmt = $conn->prepare($query);
    $stmt->execute(array(":email" => $email, ":hashed_password" => $hashed_password, ":fullname" => $fullname));
}
