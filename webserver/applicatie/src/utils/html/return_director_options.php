<?php

function insert_director_options($conn)
{
    $query = <<<EOF
  SELECT p.person_id, CONCAT(p.firstname, ' ', p.lastname) AS director
  FROM Movie_Director AS md
  INNER JOIN Person AS p
  ON p.person_id = md.person_id
  ORDER BY director ASC
  EOF;
    $stmt = $conn->query($query);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
        echo '<option value="' . $row['director'] . '" default>' . $row['director'] . '</option>';
    }
}
