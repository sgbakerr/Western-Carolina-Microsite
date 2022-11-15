<?php 
// Base module for the flexible content fields in ACF
// this module will have a correpsonding field created in ACF 
// and will be looped in page.php 
global $field;
$slides = $field['testimonial_slides'];
// var_dump();
?>
<div class="slider-wrap">
  <div class="slider-contain">
    <h3 class="display"><?php echo $field['section_header']; ?></h3>
    <button class="previous-button slide-button">
      <svg preserveAspectRatio="xMinYMin meet" width="28" height="46" viewBox="0 0 28 46" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M25 3L5 23L25 43" stroke="white" stroke-width="6" />
      </svg>
      Previous
    </button>
    <div class="slider">
      <?php
  $count = 0;
  foreach($slides as $slide) : 
    $alt = $slide['image']['alt'];
    if($slide['image']['alt'] === '') {
      $alt = $slide['image']['filename'];
    }?>
      <div class="slide" data-modal="modal-<?php echo $count ?>">
        <button class="play">Play</button>
        <img src="<?php echo $slide['image']['sizes']['slide_image'] ?>">
        <video style="display: none;">
          <?php foreach($slide['video_urls'] as $vid) : ?>
          <source src="<?php echo $vid['url'] ?>" type="video/<?php echo $vid['file_type'] ?>">
          <?php
      endforeach;?>
        </video>
      </div>
      <?php
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
</div>