<?php
  //include '../../krumo/class.krumo.php';
  //krumo($_POST);
  session_start();
  $_SESSION['errors'] = array();
  //required fields for the form

  $required_fields = array(
    'firstname' => $_POST['firstname'],
    'surname' => $_POST['surname'],
    'card_number' => $_POST['card_number'],
    'cvc_number' => $_POST['cvc_number'],
  );

 $_SESSION['required_fields'] = $required_fields;

  include 'process-fields-exist.php';
  include 'process-fields-not-empty.php';
  include 'process-fields-letters-only.php';
  include 'process-fields-numbers-only.php';
  include 'process-fields-numeric-checks.php';
  include 'unit-tests.php';
  
  //krumo($required_fields_letters_only);
  //only redirect if error are empty
  if (!empty($_SESSION['errors'])){
    header('location:../index.php');
  }

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "form";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  echo "Connected successfully";

  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $card_number = $_POST['card_number'];
  $cvc_number = $_POST['cvc_number'];

  $sql = "INSERT INTO carddetails (firstname, surname, cardnumber, cvcnumber)
  VALUES ('$firstname', '$surname', '$card_number', '$cvc_number')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header('location:../includes/output.php');

  $conn->close();
?>
