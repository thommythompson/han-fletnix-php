<?php
  require('src/utils/html/return_latest_movies.php');

  $highlighted_movies = return_latest_movies($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fletnix - Home</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <header>
        <div class="text-center">
            <a href="/">
                <h1 class="title">FLETNIX</h1>
            </a>
            <div>
                <h3>"All your favorite movies in one place"<h3>
            </div>
            <div >
                <a href="/overview">
                    <button class="zoom-animation">Watch Movies</button>
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <?= $highlighted_movies ?>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
