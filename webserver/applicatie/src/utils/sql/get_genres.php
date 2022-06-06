<?php

function get_genres($conn)
{
    $query = "SELECT DISTINCT mg.genre_name FROM Movie_Genre AS mg";
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
