<?php

function return_movie_table($genre, $year, $director, $search_query, $conn)
{
    require 'src/utils/sql/get_movies.php';

    $movies = get_movies($genre, $year, $director, $search_query, $conn);

    $table_records = '';

    foreach ($movies as $movie) {
        $movie_id = $movie_cover = $movie_title = $movie_duration = $movie_genres = $movie_directors = $movie_year = '';

        $movie_id = $movie['movie_id'];
        $movie_cover = $movie['cover_image'];
        $movie_title = $movie['title'];
        $movie_duration = $movie['duration'];
        $movie_genres = $movie['genres'];
        $movie_directors = $movie['directors'];
        $movie_year = $movie['publication_year'];

        $table_records = $table_records . <<<HTML
        <tr>
            <td class="hide-at-mobile">
                <a href="/details?movie_id=$movie_id">
                    <img src="$movie_cover" alt="movie cover">
                </a>
            </td>
            <td>
                <a href="/details?movie_id=$movie_id">
                    <p>$movie_title</p>
                </a>
            </td>
            <td>
                <p>
                    $movie_duration
                </p>
            </td>
            <td>
                <p>
                    $movie_genres
                </p>
            </td>
            <td>
                <p>
                    $movie_directors
                </p>
            </td>
            <td>
                <p>
                    $movie_year
                </p>
            </td>
        </tr>
      HTML;
    }

    return $table_records;
}
