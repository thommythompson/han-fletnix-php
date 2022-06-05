<?php

function insert_year_options($conn)
{
    $query = "SELECT DISTINCT m.publication_year FROM Movie AS m";
    $stmt = $conn->query($query);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
        echo '<option value="' . $row['publication_year'] . '" default>' . $row['publication_year'] . '</option>';
    }
}
