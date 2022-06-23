<?php

function return_latest_movies($conn)
{
    require 'src/utils/sql/get_5_latest_movies.php';

    $movies = get_5_latest_movies($conn);

    $return = '';

    foreach ($movies as $movie) {
        $movie_id = $movie_title = $movie_description = $movie_poster = '';

        $movie_id = $movie['movie_id'];
        $movie_title = $movie['title'];
        $movie_description = $movie['description'];
        $movie_poster = $movie['poster_image'];

        $return = $return . <<<HTML
        <section>
            <div class="split">
                <div>
                    <a href="/details?movie_id=$movie_id">
                        <img src="$movie_poster">
                    </a>
                </div>
                <div>
                    <a href="/details?movie_id=$movie_id">
                        <h2>$movie_title</h2>
                    </a>
                    <p>
                        $movie_description
                    </p>
                    <form action="/details" method="get">
                        <button name="movie_id" value="$movie_id">Watch Movie</button>
                    </form>
                </div>
            </div>
        </section>
        HTML;
    }

    return $return;
}
