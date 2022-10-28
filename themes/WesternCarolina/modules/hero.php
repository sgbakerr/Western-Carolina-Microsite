<?php 
// Base module for the flexible content fields in ACF
// this module will have a correpsonding field created in ACF 
// and will be looped in page.php 
global $field;
$header = $field['hero']['header'];
$copy = $field['hero']['copy'];
$link = $field['hero']['link'];
$image = $field['hero']['image'];
?>
<div class="hero">
  <div class="container">
    <div class="content">
      <?php if($header) { ?>
        <h1 class="display"><?php echo $header ?></h1>
      <?php } ?>
      <?php if($copy) { ?>
        <p class="serif"><?php echo $copy ?></p>
      <?php } ?>
      <?php if($link) { ?>
        <a class="button secondary"  href="<?php echo $link['url'] ?>"> <?php echo $link['title'] ?></a>
      <?php } ?>

    </div>
    <figure>
      <img src="<?php echo $image['url'] ?>" />
    </figure>
  </div>

</div>