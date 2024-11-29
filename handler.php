<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>
  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Circumference and area -->
        <span class="mdl-layout-title">PI</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Pi</span>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">

        <body>

          <?php
          $myVariable = 'number_of_digits';
          $number_of_digits = 0;
          $pi = '';
          if (isset($_POST['number_of_digits'])) {
            $number_of_digits = $_POST['number_of_digits'];
          }
          echo "number of digits is", $number_of_digits;
          if ($number_of_digits <= 0) {

            echo "Reenter number digits : number must be greater than 0.";
          } else {
            echo " number is good";

            function findPi($digits)
            {
              $result = 0;
              for ($i = 0; $i < $digits; $i++) {
                $result += 4 * pow(-1, $i) / (2 * $i + 1);
              }
              return $result;
        }
          echo "<h1></h1>\n";
          echo "<p> Pi: " . $result[1] . "</p>\n";
          
          ?>

        </body>

</html>