<?php
$errors = array();
  foreach ($required_fields as $value) {
    if (empty($_POST[$value])) {
      $errors[]=$value;
    }
  }
  if(!empty($errors)){
    $_SESSION['errors'][]="ERROR MESSAGE, " . implode(', ', $errors) . " should not be empty";
  }
?>