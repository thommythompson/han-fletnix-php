<?php

require('src/utils/helper/test_input.php');
require('src/utils/sql/register_user.php');
require('src/utils/html/return_error_banner.php');
require('src/utils/sql/get_user_by_email.php');
require('src/utils/helper/redirect.php');

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
    redirect("/");
}

$email = $password1 = $password2 = $fullname = $error_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {
        $form_ok = true;
        if (!isset($_POST['email']) || !isset($_POST['fullname']) || !isset($_POST['password1']) || !isset($_POST['password2'])) {
            $form_ok = false;
            $error_msg = "Missing form data";
        } else {
            $email = test_input($_POST['email']);
            $fullname = test_input($_POST['fullname']);
            $password1 = test_input($_POST['password1']);
            $password2 = test_input($_POST['password2']);

            if (!$email || !$fullname || !$password1 || !$password2) {
                $form_ok = false;
                $error_msg = "Empty form detected";
            } elseif ($password1 != $password2) {
                $form_ok = false;
                $error_msg = "Passwords do not match";
            }
        }

        if (get_user_by_email($email, $conn)) {
            $form_ok = false;
            $error_msg = "User with the email {$email} already exists";
        }

        if ($form_ok) {
            register_user($email, $password1, $fullname, $conn);
            redirect("/signin");
        }
        if ($error_msg) {
            return_error_banner("invalid form data: {$error_msg}");
        }
    }
}
