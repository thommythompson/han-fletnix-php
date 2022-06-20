<?php
  include 'src/utils/form_processing/signup_form.php';
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
