<?php

function ValidateFormHasOnlyLetter($value){
  if (!preg_match('/[^A-Za-z]/',$value) ==0){
    return false;
  }
  return true;
}

function parse_card_details($cardnumber){
  $cardnumber = str_replace(" ", "", $cardnumber);
  $cardnumber = str_replace("-", "", $cardnumber);
  $cardnumber = preg_replace("/[a-zA-Z]/", "", $cardnumber); 
  $cardnumber = chunk_split($cardnumber,4,"-");
  $cardnumber = substr($cardnumber, 0, -1);
  return $cardnumber;
}

?>