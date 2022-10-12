<?php 
// Base module for the flexible content fields in ACF
// this module will have a correpsonding field created in ACF 
// and will be looped in page.php 
global $field;
// var_dump(
$header = $field['header'];
$map = $field['map_image'];
$button = $field['button'];
$stats = $field['stats'];
?>
<div class="map-feauture">
  <div class="container">
    <figure>
      <img src="<?= $map['url'] ?>" />
    </figure>
    <div class="content">
      <h3 class="display black"><?= $header ?></h3>
      <div class="stats">
        <? 
      foreach($stats as $stat) : ?>
        <div class="stat">
          <h3 class="sans-serif"><?= $stat['header'] ?></h3>
          <h6 class="sans-serif"><?= $stat['subheader'] ?></h6>
          <p><?= $stat['copy'] ?></p>
        </div>
        <?
      endforeach; ?>
      </div>
      <? if($button) { ?> 
        <a class="button" href="<?= $button['url'] ?>"><?= $button['title'] ?></a><? } ?>
    </div>
  </div>
</div>