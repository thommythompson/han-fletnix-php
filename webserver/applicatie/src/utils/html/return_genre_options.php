<?php

function insert_genre_options($conn)
{
    $query = "SELECT genre_name FROM Genre";
    $stmt = $conn->query($query);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
        echo '<option value="' . $row['genre_name'] . '" default>' . $row['genre_name'] . '</option>';
    }
}
