<?php

function display_error($message)
{
  echo <<<EOF
    <div class="error center-content">
      <b>{$message}</b>
    </div>
  EOF;
}
