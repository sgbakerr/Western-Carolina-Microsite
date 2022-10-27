<?php 
// Base module for the flexible content fields in ACF
// this module will have a correpsonding field created in ACF 
// and will be looped in page.php 
global $field, $module_id;
$header = $field['video_hero']['header'];
$copy = $field['video_hero']['copy'];
$link = $field['video_hero']['link'];
$video = $field['video_hero']['video_link'];
$video_modal = $field['video_hero']['video_link_modal'];
?>
<div class="video-hero">
  <div class="video-embed">
    <video autoplay="true" muted>
      <?php foreach ($video as $vid) :  ?>
      <source src="<?php echo $vid['video_url'] ?>" type="video/<?php echo $vid['file_type'] ?>" ?>
      <?php endforeach;  ?>
    </video>
  </div>
  <div class="container">
    <div class="content">
      <?php if($header) { ?>
      <h1 class="display"><?php echo $header ?></h1>
      <?php } ?>
      <?php if($copy) { ?>
      <p class="serif"><?php echo $copy ?></p>
      <?php } ?>
      <?php if($link) { ?>
      <button data-modal="video-hero-modal-<?php echo $module_id ?>"
        class="modal-show button secondary"><?php echo $link ?></button>

      <?php } ?>
    </div>
  </div>
</div>

<div class="modal" id="video-hero-modal-<?php echo $module_id ?>">
  <button class="close">Close</button>
  <div class="video-wrap">
  <video controls>
    <?php foreach($video_modal as $modal_vid) : ?>
    <source src="<?php echo $modal_vid['video_url'] ?>" type="video/<?php echo $modal_vid['file_type'] ?>">
    <?php
      endforeach;?>
  </video>
 
  </div>
        
      
</div>