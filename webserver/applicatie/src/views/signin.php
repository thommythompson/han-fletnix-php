<?php
  include 'src/utils/form_processing/signin_form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Signin</title>
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
            <h2>Sign in</h2>
            <form action="" method="POST">
                <div>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <button type="submit" name="signin">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
