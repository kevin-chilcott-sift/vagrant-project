<?php
$required_fields_letters_only = array(
    'firstname',
    'surname',
  );
  $required_fields_letters_only_errors = array();
  foreach ($required_fields_letters_only as $value) {
    if (!preg_match('/[^A-Za-z]/',$_POST[$value]) ==0){
      $required_fields_letters_only_errors[]=$value;
    }
  }
  if(!empty($required_fields_letters_only_errors)){
    $_SESSION['errors'][]="ERROR MESSAGE, " . implode(', ', $required_fields_letters_only_errors) . " should only include letters";
  }
?>