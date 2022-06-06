<?php

function return_publication_year_options($conn, $selected = null)
{
    require('src/utils/sql/get_publication_years.php');
    $years = $options = '';
    $years = get_publication_years($conn);

    foreach ($years as $row) {
        if ($selected == $row['publication_year']) {
            $options = $options . '<option selected value="' . $row['publication_year'] . '">' . $row['publication_year'] . '</option>';
        } else {
            $options = $options . '<option value="' . $row['publication_year'] . '">' . $row['publication_year'] . '</option>';
        }
    }

    return $options;
}
