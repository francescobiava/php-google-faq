<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

<?php
  include 'data.php';
  include 'helper.php';
?>

</head>
<body>
  
  <div class="container">
    <?php
      printFAQ($faq);
    ?>
  </div>

</body>
</html>