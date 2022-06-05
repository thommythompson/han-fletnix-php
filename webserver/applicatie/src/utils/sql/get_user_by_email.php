<?php

function get_user_by_email($email, $conn)
{
  $query = "SELECT TOP 1 id, email, password, fullname FROM Users WHERE email = '" . $email . "'";
  $stmt = $conn->query($query);
  return $stmt->fetch();
}
