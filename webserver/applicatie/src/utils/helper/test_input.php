<?php

function test_input($data)
{
  if ($data != '') {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES);
    return $data;
  } else {
    return false;
  }
}
