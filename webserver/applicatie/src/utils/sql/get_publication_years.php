<?php

function get_publication_years($conn)
{
    $query = "SELECT DISTINCT m.publication_year FROM Movie AS m ORDER BY m.publication_year ASC";
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
