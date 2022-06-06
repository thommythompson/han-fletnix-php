<?php

function return_error_banner($message)
{
    echo <<<EOF
    <div class="error center-content">
      <b>{$message}</b>
    </div>
  EOF;
}
