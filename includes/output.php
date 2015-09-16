<?php

  include 'Functions.php';

  session_start();
 $posted_values = $_SESSION['posted_values'];

 function remove_spaces($text)   {
    return str_replace(" ", "", $text);
  }

  $full_cardnumber = parse_card_details($posted_values['card_number']);

  echo "<h1>" . "Thank you" . "</h1>";
  echo "<p>" . "Firstname = " . $posted_values['firstname'] . "</p>";
  echo "<p>" . "Surname = " . $posted_values['surname'] . "</p>";
  echo "<p>" . "Card number = " . $full_cardnumber . "</p>";
  echo "<p>" . "CVC number = " . $posted_values['cvc_number'] . "</p>";

?>