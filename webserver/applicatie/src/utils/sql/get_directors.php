<?php

function get_directors($conn)
{
    $query = <<<EOF
    SELECT p.person_id, CONCAT(p.firstname, ' ', p.lastname) AS director
    FROM Movie_Director AS md
    INNER JOIN Person AS p
    ON p.person_id = md.person_id
    ORDER BY director ASC
    EOF;
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
