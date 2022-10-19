<?php
// Collage Module
global $field, $cardColor, $header, $copy;
$cardColor = 'purple';
$header = $field['header'];
$copy = $field['copy'];
$images = $field['images']; ?>
<div class="collage">
  <div class="card-row">
  <?php echo get_template_part('modules/module-parts/card') ?>
  </div>
  <div class="images">
    <?php
  $count = 0;
  foreach($images as $image) : 
  $alt = $image['image']['alt'];
  if($image['image']['alt'] === '') {
    $alt = $image['image']['filename'];
  }
  if($count === 0) $size = 'collage_full'; 
  if($count === 1) $size = 'collage_med';
  if($count === 2) $size = 'collage_sm';
  if($count <= 2) { ?>
    <div class="image-<?php echo $count ?> image-contain">
      <!-- <pre></pre> -->
      <img  src="<?php echo $image['image']['sizes'][$size]?>" alt="<?php echo $alt ?>"/>
  </div><?php
  }
  $count++;
  endforeach; ?>
  </div>
</div>