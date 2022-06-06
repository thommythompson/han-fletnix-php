<?php

function get_movie_details_by_id($movie_id, $conn)
{
    $query = <<<SQL
  SELECT m.movie_id, m.title, m.duration, m.description, m.story_line, m.price, m.publication_year, m.cover_image, m.poster_image, m.video_url, g.genres, d.directors, c.cast
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
  LEFT JOIN (
      SELECT mc.movie_id, string_agg(CONCAT(p.firstname, ' ', p.lastname), ', ') as cast
      FROM Movie_Cast AS mc
      LEFT JOIN Person AS p
      ON mc.person_id = p.person_id
      GROUP BY mc.movie_id
  ) AS c
  ON m.movie_id = c.movie_id
  WHERE m.movie_id = $movie_id
  SQL;

    $stmt = $conn->query($query);
    return $stmt->fetch();
}
