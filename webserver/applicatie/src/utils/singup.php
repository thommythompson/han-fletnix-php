<?php

$email = $password1 = $password2 = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['signup'])){

    $form_ok = true;
    if(!isset($_POST['email']) || !isset($_POST['password1']) || !isset($_POST['password2'])){
      $form_ok = false;
      echo "Missing form data";
    }else{
      $email = test_input($_POST['email']);
      $password1 = test_input($_POST['password1']);
      $password2 = test_input($_POST['password2']);

      if(!$email || !$password1 || !$password2){
        $form_ok = false;
        echo "Empty form detected";
      }
      if($password1 != $password2){
        $form_ok = false;
        echo "Passwords do not match";
      }
    }

    if($form_ok){
      $sql = "INSERT INTO Users (name, password) VALUES ('" . $email . "', '" . $password1 . "')";
      $conn->query($sql);
    }else{
      echo "invalid form data.";
    }
  }
}

function test_input($data) {
  if($data != ''){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES);
    return $data;
  }else{
    return false;
  }
}

