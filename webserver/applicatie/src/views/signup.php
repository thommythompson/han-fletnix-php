<?php

require('src/utils/helper/test_input.php');
require('src/utils/sql/register_user.php');
require('src/utils/html/return_error_banner.php');
require('src/utils/sql/get_user_by_email.php');
require('src/utils/helper/redirect.php');

if (isset($_SESSION["id"])) {
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Signup</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <div class="container container--narrow">
        <div class="text-center">
            <h2>Sign up</h2>
            <form action="" method="POST">
                <div>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="" autofocus="">
                    <input type="fullname" name="fullname" id="fullname" class="form-control" placeholder="Full name" required="">
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Password" required="">
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Repeat password" required="">
                    <button type="submit" name="signup">Sign up</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
