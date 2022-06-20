<?php

require('src/utils/helper/test_input.php');
require('src/utils/sql/get_user_by_email.php');
require('src/utils/html/return_error_banner.php');
require('src/utils/helper/redirect.php');

if (isset($_SESSION["id"])) {
    redirect("/");
}

$email = $password = $fullname = '';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['movie_id'])) {
        return_error_banner("Login required to watch this movie");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signin'])) {
        $form_ok = true;

        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            $form_ok = false;
            $error_msg = "Missing form data";
        } else {
            $email = test_input($_POST['email']);
            $password = test_input($_POST['password']);

            if (!$email || !$password) {
                $form_ok = false;
                $error_msg = "Empty form detected";
            }
        }

        if ($form_ok) {
            $user = get_user_by_email($email, $conn);

            if (!$user) {
                $error_msg = "User not found";
            } elseif (!password_verify($password, $user['password'])) {
                $error_msg = "Password invalid";
            } else {
                $_SESSION["logged_in"] = true;
                $_SESSION["id"] = $user['id'];
                $_SESSION["email"] = $user['email'];
                $_SESSION["fullname"] = $user['fullname'];
                if (isset($_GET['movie_id'])) {
                    redirect("/player?movie_id=" . $_GET['movie_id']);
                } else {
                    redirect("/");
                }
            }
        }
        if ($error_msg) {
            return_error_banner("invalid form data: {$error_msg}");
        }
    }
}
