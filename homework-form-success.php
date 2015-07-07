<html>
<head>
  <link rel="stylesheet" type="text/css" href="homework-form.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <form>
    <div class="container">
      <h1> Thank you </h1>
      <h2> For signing up</h2>

      <?php

      if(isset($_GET[$required_fields]))
        {
          echo "Firstname =" . " " . $firstname . "</br>";
          echo "Surname =" . " " . $surname . "</br>";
          echo "CVC number =" . " " . $cvc_number . "</br>";
          echo "Cardnumber =" . " " . $full_cardnumber;
        };

      ?>
    </div>
  <form>
</body>
</html>