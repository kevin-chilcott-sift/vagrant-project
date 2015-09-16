<?php
if(strlen($_POST['card_number'])!=16){
    $_SESSION['errors'][]="ERROR MESSAGE, card number must be 16 digits long.";
  }

  if(strlen($_POST['cvc_number'])!=3){
    $_SESSION['errors'][]="ERROR MESSAGE, cvc number must be 3 digits long.";
  }
?>