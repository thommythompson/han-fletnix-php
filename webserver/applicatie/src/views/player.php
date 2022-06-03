<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Player</title>
    <?php
        include 'src/utils/head.php';
    ?>
</head>
<body class="player-body">
    <?php
      include 'src/utils/navbar.php';
    ?>
    <div class="container">
        <a href="/details">
            <p class="menu-item"> < back</p>
        </a>
        <video height="100%" controls>
            <source src="video/big_buck_bunny_720p_1mb.mp4" type="video/mp4">
        </video>
    </div>
    <?php
        include 'src/utils/footer.php';
    ?>
</body>
</html>
