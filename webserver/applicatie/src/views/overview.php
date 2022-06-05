<?php

require 'src/utils/helper/test_input.php';
require 'src/utils/html/return_movie_table.php' ;
require 'src/utils/html/return_genre_options.php';
require 'src/utils/html/return_director_options.php';
require 'src/utils/html/return_year_options.php';

$genre = $year = $director = $search_query = $table_records = '';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['genre'])) {
        $genre = test_input($_GET['genre']);
    }
    if (isset($_GET['year'])) {
        $year = test_input($_GET['year']);
    }
    if (isset($_GET['director'])) {
        $director = test_input($_GET['director']);
    }
    if (isset($_GET['search_query'])) {
        $search_query = test_input($_GET['search_query']);
    }

    $table_records = return_movie_table($genre, $year, $director, $search_query, $conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Overview</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <div class="container">
        <h2>Movie overview</h2>
            <form>
                <div class="split filter-menu">
                    <select name="genre" id="genre">
                      <option value="" disabled selected>Select genre</option>
                      <?php insert_genre_options($conn) ?>
                    </select>
                    <select name="year" id="year">
                      <option value="" disabled selected>Select year</option>
                      <?php insert_year_options($conn) ?>
                    </select>
                    <select name="director" id="director">
                      <option value="" disabled selected>Select director</option>
                      <?php insert_director_options($conn) ?>
                    </select>
                    <input name="search_query" id="search_query" type="text" placeholder="Search">
                    <button type="submit" name="search">Search</button>
                </div>
            </form>
        <table>
            <tr>
                <th class="hide-at-mobile"></th>
                <th>Title</th>
                <th>Duration</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>
            </tr>
            <?= $table_records ?>
        </table>
    </div>
    <?php include 'src/utils/includes/footer.php'; ?>
</body>
</html>
