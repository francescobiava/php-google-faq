<?php

  function printFAQ ($array) {
    foreach ($array as $topic) {
      ?>
        <h3><?php echo $topic['question']; ?></h3>
      <?php
      foreach ($topic['answer'] as $par) {
        ?>
          <p><?php echo $par; ?></p>
        <?php
      }
    }
  } 

?>