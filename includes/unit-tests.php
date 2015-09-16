<?php

include 'Functions.php';

$test_case = 'ABC';

if (ValidateFormHasOnlyLetter($test_case)){
  // great stuff!
  echo $test_case.' is only letters';
}else{
  echo $test_case.' HAS NON-LETTERS!!!';
}

echo '<br />';


$test_case = 'AB CD';

if (ValidateFormHasOnlyLetter($test_case)){
  // great stuff!
  echo $test_case.' is only letters';
}else{
  echo $test_case.' HAS NON-LETTERS!!!';
}

echo '<br />';


$test_case = '123';

if (ValidateFormHasOnlyLetter($test_case)){
  // great stuff!
  echo $test_case.' is only letters';
}else{
  echo $test_case.' HAS NON-LETTERS!!!';
}

echo '<br />';



$test_case = 'fds 123 fd';

if (ValidateFormHasOnlyLetter($test_case)){
  // great stuff!
  echo $test_case.' is only letters';
}else{
  echo $test_case.' HAS NON-LETTERS!!!';
}

echo '<br />';

?>