<?php
// Collage Module
global $field;

?>

<div id="instagram-feed"></div>

<div class="form-banner" style="background-image: url(<?php echo $field['image']['sizes']['form_banner'] ?>); background-size:cover;">
  <div class="card form">
    <?php echo $field['form'] ?>
    <div id="form_embed">Loading...</div>
  </div>
</div>