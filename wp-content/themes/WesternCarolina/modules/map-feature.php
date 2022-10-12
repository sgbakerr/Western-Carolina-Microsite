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
      <img src="<?php echo $map['url'] ?>" />
    </figure>
    <div class="content">
      <h3 class="display black"><?php echo $header ?></h3>
      <div class="stats">
      <?php
      foreach($stats as $stat) : ?>
        <div class="stat">
          <h3 class="sans-serif"><?php echo $stat['header'] ?></h3>
          <h6 class="sans-serif"><?php echo $stat['subheader'] ?></h6>
          <p><?php echo $stat['copy'] ?></p>
        </div>
        <?php
      endforeach; ?>
      </div>
      <?php if($button) { ?> 
        <a class="button" href="<?php echo $button['url'] ?>"><?php echo $button['title'] ?></a><?php 
      } ?>
    </div>
  </div>
</div>