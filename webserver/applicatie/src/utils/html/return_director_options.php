<?php

function return_director_options($conn, $selected = null)
{
    require('src/utils/sql/get_directors.php');
    $directors = $options = '';
    $directors = get_directors($conn);

    foreach ($directors as $row) {
        if ($selected == $row['director']) {
            $options = $options . '<option selected value="' . $row['director'] . '">' . $row['director'] . '</option>';
        } else {
            $options = $options . '<option value="' . $row['director'] . '">' . $row['director'] . '</option>';
        }
    }

    return $options;
}
