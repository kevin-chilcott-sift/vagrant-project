
<?php
  /* Get my data out of session, and populate my array again. */
  session_start();
  $required_fields = $_SESSION["required_fields"];
  /* This is the submitted data from the forms*/
  /* Turning the data into strings that can be used in functions*/
  if(isset($_POST['submit'])){
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : null;
    $card_number = isset($_POST['card_number']) ? $_POST['card_number'] : null;
    $cvc_number = isset($_POST['cvc_number']) ? $_POST['cvc_number'] : null;
  /* Printing out the results from the form once validated */
  /* Supply extra information about that information */
  echo "Firstname =" . " " . $firstname . "</br>";
  echo "Surname =" . " " . $surname . "</br>";
  echo "CVC number =" . " " . $cvc_number . "</br>";
  /* This is a function which will remove all of the white spaces between that the user inputs into the card number field */
  function remove_spaces($text)   {
    return str_replace(" ", "", $text);
  }
  /* Applying the remove_spaces function to the card number string */
  $cardnumber_spaceless =  remove_spaces($card_number);
  /* This will split the the new spaceless card number into 4 numbers */
  $split_cardnumber = str_split($cardnumber_spaceless, 4);
  /* We will then fill the spaces between each 4 numbers with a - to comply with form requirements */
  $full_cardnumber = implode("-", $split_cardnumber);
  /* Now printing out the card number in the format we want it i.e. no spaces and - between ever 4 numbers*/
  echo "Cardnumber =" . " " . $full_cardnumber;
  }
  /* This is the beginning of a better method to output this data */ 
  $required_fields = array(
    'firstname' => 'firstname',
    'surname' => 'surname',
    'cardnumber' => 'cardnumber',
    'cvc_number' => 'cvc number');

  /* This is a foreach statment that will determine that what ever required_field is empty it will header redirect back to the index.php file and echo a specfic error */

  foreach ($required_fields as $required_field) {
    if (empty($_POST[$required_field])){
    /* If empty Header redirect back to index.php file */
    header("Location: http://192.168.33.10/vagrant-project/index.php?required_fields");
    }else{
      header("location: http://192.168.33.10/vagrant-project/homework-form-success.php?required_fields=true");
    }
  }

?>