<?php

require('src/utils/functions/test_input.php');
require('src/utils/functions/display_error.php');
require('src/utils/functions/redirect.php');
require('src/utils/html_inserts/html_insert_movie_table.php');

$genre = $year = $director = $search_query = '';

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

    html_insert_movie_table($genre, $year, $director, $search_query, $conn);
}
