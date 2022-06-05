<?php

function get_movies($genre, $year, $director, $search_query, $conn)
{
    $query = <<<SQL
  SELECT m.movie_id, m.title, m.duration, m.publication_year, m.cover_image, g.genres, d.directors
  FROM Movie AS m
  LEFT JOIN (
      SELECT mg.movie_id, string_agg(mg.genre_name, ', ') as genres
      FROM Movie_Genre AS mg
      GROUP BY mg.movie_id
  ) AS g
  ON m.movie_id = g.movie_id
  LEFT JOIN (
      SELECT md.movie_id, string_agg(CONCAT(p.firstname, ' ', p.lastname), ', ') as directors
      FROM Movie_Director AS md
      LEFT JOIN Person AS p
      ON md.person_id = p.person_id
      GROUP BY md.movie_id
  ) AS d
  ON m.movie_id = d.movie_id
  WHERE m.movie_id IS NOT NULL
  SQL;

    if ($genre) {
        $query = $query . " AND g.genres LIKE ('%"  . $genre . "%')";
    }
    if ($director) {
        $query = $query . " AND d.directors LIKE ('%"  . $director . "%')";
    }
    if ($year) {
        $query = $query . " AND m.publication_year = " . $year;
    }
    if ($search_query) {
        $query = $query . <<<EOF
        AND (
          m.title LIKE ('%{$search_query}%')
          OR m.publication_year LIKE ('%{$search_query}%')
          OR g.genres LIKE ('%{$search_query}%')
          OR d.directors LIKE ('%{$search_query}%')
        )
      EOF;
    }
    $query = $query . " ORDER BY m. movie_id DESC";

    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
