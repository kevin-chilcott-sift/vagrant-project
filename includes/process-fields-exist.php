<?php
  // empty the required fields ready for new errors
  $errors = array();
  //check to see if the post data contains required values
  foreach ($required_fields as $required_field) {
    if ('' == $_POST[$required_field]) {
        $errors[]=$required_field;
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