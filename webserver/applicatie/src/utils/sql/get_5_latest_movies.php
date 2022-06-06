<?php

function get_5_latest_movies($conn)
{
    $query = <<<SQL
  SELECT TOP 5 movie_id, title, description, poster_image
  FROM Movie
  ORDER BY movie_id DESC
  SQL;

    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
