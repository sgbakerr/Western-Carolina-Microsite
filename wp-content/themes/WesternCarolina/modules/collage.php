<?
// Collage Module
global $field, $cardColor, $header, $copy;
$cardColor = 'purple';
$header = $field['header'];
$copy = $field['copy'];
$images = $field['images']; ?>
<div class="collage">
  <div class="card-row">
  <?= get_template_part('modules/module-parts/card') ?>
  </div>
  <div class="images">
    <?
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
    <figure class="image-<?= $count ?>">
      <!-- <pre></pre> -->
      <img  src="<?= $image['image']['sizes'][$size]?>" alt="<?= $alt ?>"/>
    </figure><?
  }
  $count++;
  endforeach; ?>
  </div>
</div>