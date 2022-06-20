<?php
require('src/utils/helper/test_input.php');
require('src/utils/helper/require_login.php');
require('src/utils/sql/get_movie_details_by_id.php');

$movie_id = '';
$movie_details = null;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['movie_id'])) {
        $movie_id =  test_input($_GET['movie_id']);

        $movie_details = get_movie_details_by_id($_GET['movie_id'], $conn);
        $movie_video_url = $movie_details['video_url'];
    }
}

require_login($movie_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Player</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body class="player-body">
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <div class="container">
        <a href="/details?movie_id=<?= $movie_id ?>">
            <p class="menu-item"> < back</p>
        </a>
        <video height="100%" controls>
            <source src="<?= $movie_video_url ?>" type="video/mp4">
        </video>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
