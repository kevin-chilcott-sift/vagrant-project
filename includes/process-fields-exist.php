<?php
  // empty the required fields ready for new errors
  $errors = array();
  //check to see if the post data contains required values
  foreach ($required_fields as $value) {
    if (!array_key_exists($value, $_POST)) {
        $errors[]=$value;
    }
    //krumo($_SESSION);
  }
  if(!empty($errors)){
    $_SESSION['errors'][]="ERROR MESSAGE, " . implode(', ', $errors) . " does not exist";
  }
  //only redirect if error are empty
  if (!empty($_SESSION['errors'])){
    header('location:../index.php');
  }
?>