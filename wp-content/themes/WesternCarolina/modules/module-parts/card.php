<? 
global $field,
$cardColor, 
$header, 
$copy ?>

<div class="card <?php echo $cardColor ?>"><?
  if($header) { ?>
    <h2 class="serif"><?php echo $header ?></h2><? 
  }
  if($copy) { 
    echo $copy;
  } ?>
</div>