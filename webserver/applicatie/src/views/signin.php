<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Signin</title>
    <?php
        include 'src/utils/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/navbar.php';
    ?>
    <div class="container container--narrow">
        <div class="text-center">
            <h2>Sign in</h2>
            <form action="" method="POST">
                <div>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <button type="submit" name="singin">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'src/utils/footer.php';
    ?>
</body>
</html>
