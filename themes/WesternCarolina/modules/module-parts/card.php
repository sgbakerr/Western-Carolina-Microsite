<?php 
global $field,
$cardColor, 
$header, 
$copy ?>

<div class="card <?php echo $cardColor ?>"><?php
  if($header) { ?>
    <h2 class="serif"><?php echo $header ?></h2><?php 
  }
  if($copy) { 
    echo $copy;
  } ?>
</div>