<?php
// Collage Module
global $field;
$images = $field['images'];



?>
<div class="image-grid"><?php 
  foreach($images as $image) :
    $alt = $image['image']['alt'];
    if($alt === '') 
      $alt = $image['image']['name']; ?>
  <div class="image-block">
    <img src="<?php echo $image['image']['sizes']['image_grid'] ?>" alt="<?php echo $alt ?>" />
  </div>
  <?php endforeach; ?>
</div>