<?php

function register_user($email, $password, $fullname, $conn)
{
    $sql = "INSERT INTO Users (email, password, fullname) VALUES ('" . $email . "', '" . $password . "', '" . $fullname . "')";
    $conn->query($sql);
}
