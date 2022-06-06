<?php

function get_publication_years($conn)
{
    $query = "SELECT DISTINCT m.publication_year FROM Movie AS m";
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}
