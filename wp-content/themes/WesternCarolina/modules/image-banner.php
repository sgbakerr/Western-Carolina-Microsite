<?
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
    <?= get_template_part('modules/module-parts/card') ?>
  </div>
  <figure class="image">
    <img src="<?= $image['sizes']['image_banner']?>" />
  </figure>
</div>
