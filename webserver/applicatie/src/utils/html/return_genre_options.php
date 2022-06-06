<?php

function return_genre_options($conn, $selected = null)
{
    require('src/utils/sql/get_genres.php');
    $genres = $options = '';
    $genres = get_genres($conn);

    foreach ($genres as $row) {
        if ($selected == $row['genre_name']) {
            $options = $options . '<option selected value="' . $row['genre_name'] . '">' . $row['genre_name'] . '</option>';
        } else {
            $options = $options . '<option value="' . $row['genre_name'] . '">' . $row['genre_name'] . '</option>';
        }
    }

    return $options;
}
