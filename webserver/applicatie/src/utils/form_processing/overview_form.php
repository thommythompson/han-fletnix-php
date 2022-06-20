<?php

require 'src/utils/helper/test_input.php';
require 'src/utils/html/return_movie_table.php' ;
require 'src/utils/html/return_genre_options.php';
require 'src/utils/html/return_director_options.php';
require 'src/utils/html/return_publication_year_options.php';

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

    $options_director = return_director_options($conn, $director);
    $options_genre = return_genre_options($conn, $genre);
    $options_year = return_publication_year_options($conn, $year);
    $table_records = return_movie_table($genre, $year, $director, $search_query, $conn);
}
