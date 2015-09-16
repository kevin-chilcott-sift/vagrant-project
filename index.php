<?php
session_start();
if (isset($_SESSION['errors'])){
  foreach ($_SESSION['errors'] as $error) {
    echo $error . '<br>';
  }
  $_SESSION['errors']=NULL;
}
?>
<!doctype HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme/styles.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php
        include 'includes/form.php';
    ?>
</body>

<!-- In HTML5, which attribute is used to specify that an input field must be filled out? -->
<!-- In HTML5, contextmenu and spellcheck are:? -->
<!-- This form was made be me Kevin Chilcott -->

</html>