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
      <? if($header) { ?>
        <h1 class="display"><?= $header ?></h1>
      <? } ?>
      <? if($copy) { ?>
        <p class="serif"><?= $copy ?></p>
      <? } ?>
      <? if($link) { ?>
        <a class="button secondary"  href="<?= $link['url'] ?>"> <?= $link['title'] ?></a>
      <? } ?>

    </div>
    <figure>
      <img src="<?= $image['url'] ?>" />
    </figure>
  </div>

</div>