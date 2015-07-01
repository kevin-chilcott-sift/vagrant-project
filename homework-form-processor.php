<html>
<body>

  <?php

    if(isset($_POST['submit'])){
      $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
      $surname = isset($_POST['surname']) ? $_POST['surname'] : null;
      $card_number = isset($_POST['card_number']) ? $_POST['card_number'] : null;
      $cvc_number = isset($_POST['cvc_number']) ? $_POST['cvc_number'] : null;

    echo "Firstname =" . " " . $firstname . "</br>";
    echo "Surname =" . " " . $surname . "</br>";
    echo "CVC number =" . " " . $cvc_number . "</br>";

    function remove_spaces($text)   {
      return str_replace(" ", "", $text);
    }

    $cardnumber_spaceless =  remove_spaces($card_number);
    
    $split_cardnumber = str_split($cardnumber_spaceless, 4);

    $full_cardnumber = implode("-", $split_cardnumber);

    echo "Cardnumber =" . " " . $full_cardnumber;
    }

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
  /*if (condition) {
    header("Location: http://192.168.33.10/vagrant-project/homework-form-success.php");
  }else{
    header("Location: http://192.168.33.10/vagrant-project/homework-form-index.php");
  }*/

  ?>

</body>
</html>