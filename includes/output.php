<?php

  session_start();
 $required_fields = $_SESSION['required_fields'];

 function remove_spaces($text)   {
    return str_replace(" ", "", $text);
  }
  /* Applying the remove_spaces function to the card number string */
  $cardnumber_spaceless =  remove_spaces($required_fields['card_number']);
  /* This will split the the new spaceless card number into 4 numbers */
  $split_cardnumber = str_split($cardnumber_spaceless, 4);
  /* We will then fill the spaces between each 4 numbers with a - to comply with form requirements */
  $full_cardnumber = implode("-", $split_cardnumber);

  echo "<h1>" . "Thank you" . "</h1>";
  echo "<p>" . "Firstname = " . $required_fields['firstname'] . "</p>";
  echo "<p>" . "Surname = " . $required_fields['surname'] . "</p>";
  echo "<p>" . "Card number = " . $full_cardnumber . "</p>";
  echo "<p>" . "CVC number = " . $required_fields['cvc_number'] . "</p>";

?>