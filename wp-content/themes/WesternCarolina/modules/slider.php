<?php 
// Base module for the flexible content fields in ACF
// this module will have a correpsonding field created in ACF 
// and will be looped in page.php 
global $field;
$slides = $field['testimonial_slides'];
// var_dump();
?>
<div class="slider-wrap">
  <h3 class="display"><?= $field['section_header']; ?></h3>
  <button class="previous-button slide-button">
    <svg preserveAspectRatio="xMinYMin meet" width="28" height="46" viewBox="0 0 28 46" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M25 3L5 23L25 43" stroke="white" stroke-width="6" />
    </svg>
    Previous
  </button>
  <div class="slider">
    <? 
  $count = 0;
  foreach($slides as $slide) : 
    $alt = $slide['image']['alt'];
    if($slide['image']['alt'] === '') {
      $alt = $slide['image']['filename'];
    }?>
    <div class="slide" data-modal="modal-<?= $count ?>">
      <button class="play">Play</button>
      <img src="<?= $slide['image']['sizes']['slide_image'] ?>">
    </div>
    <?
    $count++;
  endforeach; ?>
  </div>
  <button class="next-button slide-button">
    Next
    <svg preserveAspectRatio="xMinYMin meet" width="28" height="46" viewBox="0 0 28 46" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M3 43L23 23L3 3" stroke="white" stroke-width="6" />
    </svg>
  </button>
</div>


  <? 
  $count = 0;
  foreach($slides as $modal) : ?>
  <div class="modal" id="modal-<?= $count ?>">
    <button class="close">Close</button>
    <video controls>
      <? foreach($modal['video_urls'] as $vid) : ?>
        <source src="<?= $vid['url'] ?>" type="video/<?= $vid['file_type'] ?>">
      <?
      endforeach;?>
    </video>
  </div>
  <?
    $count++;
  endforeach; ?>