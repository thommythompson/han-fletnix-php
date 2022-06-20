<?php

function get_genres($conn)
{
    $query = "SELECT DISTINCT mg.genre_name FROM Movie_Genre AS mg ORDER BY mg.genre_name ASC";
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
