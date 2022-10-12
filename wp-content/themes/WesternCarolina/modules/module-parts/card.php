<? 
global $field,
$cardColor, 
$header, 
$copy ?>

<div class="card <?= $cardColor ?>"><?
  if($header) { ?>
    <h2 class="serif"><?= $header ?></h2><? 
  }
  if($copy) { 
    echo $copy;
  } ?>
</div>