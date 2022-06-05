<?php

function require_login($movie_id = null)
{
    require('src/utils/helper/redirect.php');

    if (!isset($_SESSION["id"])) {
        if ($movie_id) {
            redirect('/signin?movie_id=' . $movie_id);
        } else {
            redirect('/signin');
        }
    }
}
