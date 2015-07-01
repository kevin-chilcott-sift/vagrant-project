<html>
<body>

  <?php
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
    /* original method of checking ifg each required field in the form is empty, if so it will return to the index.php file and a error message will be displayed */
    if(empty($_POST['firstname'])){
      header("Location: http://192.168.33.10/vagrant-project/homework-form-index.php?fail-firstname");

    }else{
      header("Location: http://192.168.33.10/vagrant-project/homework-form-success.php");
    }

    if(empty($_POST['surname'])){
      header("Location: http://192.168.33.10/vagrant-project/homework-form-index.php?fail-surname");

    }else{
      header("Location: http://192.168.33.10/vagrant-project/homework-form-success.php");
    }

    if(empty($_POST['cvc_number'])){
      header("Location: http://192.168.33.10/vagrant-project/homework-form-index.php?fail-cvc_number");

    }else{
      header("Location: http://192.168.33.10/vagrant-project/homework-form-success.php");
    }

    if(empty($_POST['full_cardnumber'])){
      header("Location: http://192.168.33.10/vagrant-project/homework-form-index.php?fail-full_cardnumber");

    }else{
      header("Location: http://192.168.33.10/vagrant-project/homework-form-success.php");
    }
    /* This is the beginning of a better method to output this data */
    $required_fields = array{


    }

    /*This is a foreach statment that will determine that what ever required_field is empty it will header redirect back to the index.php file and echo a specfic error */
    foreach ($required_fields as $required_field => $value) {
      if (empty($_POST)$required_field){
      header("Location: http://192.168.33.10/vagrant-project/homework-form-index.php?empty-field");
      }
    }
  ?>

</body>
</html>