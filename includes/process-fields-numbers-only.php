<?php
$required_fields_numbers_only = array(
    'card_number',
    'cvc_number',
  );
  $errors = array();
  foreach ($required_fields_numbers_only as $value) {
    if (!is_numeric($_POST[$value])){
      $errors[]=$value;
    }
  }
  if(!empty($errors)){
    $_SESSION['errors'][]="ERROR MESSAGE, " . implode(', ', $errors) . " should only include numbers";
  }
?>