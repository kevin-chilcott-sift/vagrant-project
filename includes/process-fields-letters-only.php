<?php

include 'Functions.php';

$required_fields_letters_only = array(
    'firstname',
    'surname',
  );
  $required_fields_letters_only_errors = array();
  foreach ($required_fields_letters_only as $value) {
    if (ValidateFormHasOnlyLetter($_POST[$value])){
      // great stuff!
    }else{
      $required_fields_letters_only_errors[] = $value];
    }
  }
  if(!empty($required_fields_letters_only_errors)){
    $_SESSION['errors'][]="ERROR MESSAGE, " . implode(', ', $required_fields_letters_only_errors) . " should only include letters";
  }
?>