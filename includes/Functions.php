<?php

function ValidateFormHasOnlyLetter($value){
  if (!preg_match('/[^A-Za-z]/',$value) ==0){
    return false;
  }
  return true;
}

?>