<?php

require('src/utils/sql/get_movie_details_by_id.php');

$movie_details = null;

if (isset($_GET['movie_id'])) {
    $movie_details = get_movie_details_by_id($_GET['movie_id'], $conn);

    $movie_id = $movie_details['movie_id'];
    $movie_price = $movie_details['price'];
    $movie_title = $movie_details['title'];
    $movie_cover = $movie_details['cover_image'];
    $movie_story_line = $movie_details['story_line'];
    $movie_director = $movie_details['directors'];
    $movie_cast = $movie_details['cast'];
    $movie_year = $movie_details['publication_year'];
    $movie_duration = $movie_details['duration'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - $movie_title</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body class="movie-details-body">
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <div class="container">
        <div class="split">
            <div class="center-content">
                <img src="<?= $movie_cover ?>">
            </div>
            <div class="flex-column gap-2vh padding-2vw">
                    <h2><?= $movie_title ?></h2>
                    <p><?= $movie_story_line ?></p>
                    <ul>
                        <li><b>Director:</b> <?= $movie_director ?></li>
                        <li><b>Cast:</b> <?= $movie_cast ?></li>
                        <li><b>Year:</b> <?= $movie_year ?></li>
                        <li><b>Duration:</b> <?= $movie_duration ?></li>
                    </ul>
                    <a href="/player?movie_id=<?= $movie_id ?>">
                        <button>Watch Movie (€<?= $movie_price ?>)</button>
                    </a>
            </div>
        </div>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
