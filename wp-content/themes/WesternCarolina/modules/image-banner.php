<?php
// Collage Module
global $field, $cardColor, $header, $copy;
$cardColor = 'white';
$header = $field['header'];
$copy = $field['copy'];
$image = $field['image'];

$alt = $image['alt'];
  if($image['alt'] === '') {
    $alt = $image['filename'];
  }

// $buttonColor = 
?>
<div class="image-banner">
  <div class="card-row">
    <?php echo get_template_part('modules/module-parts/card') ?>
  </div>
  <figure class="image">
    <img src="<?php echo $image['sizes']['image_banner']?>" alt="<?php echo $alt ?>" />
    <img class="weave" src="<?php echo get_template_directory_uri() ?>/assets/img/basket-weave.png" alt="basket weave">
  </figure>
</div>
