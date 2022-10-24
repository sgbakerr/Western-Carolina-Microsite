<?php
// Collage Module
global $field, $cardColor, $header, $copy;
$cardColor = 'white';
$header = $field['header'];
$copy = $field['copy'];
$image = $field['image'];
$orientation = $field['card_orientation'];

if($orientation === 'side') {
  $cardColor = 'purple';
}

$alt = $image['alt'];
  if($image['alt'] === '') {
    $alt = $image['filename'];
  }

?>
<div class="image-banner <?php echo $orientation ?> ">
  <div class="card-row">
    <?php echo get_template_part('modules/module-parts/card') ?>
  </div>
  <figure class="image">
    <img src="<?php echo $image['sizes']['image_banner']?>" alt="<?php echo $alt ?>" />
  
  </figure>
</div>
