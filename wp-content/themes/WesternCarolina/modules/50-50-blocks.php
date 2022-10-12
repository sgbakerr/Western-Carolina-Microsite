<?php
// Collage Module
global $field;
// var_dump();
// $cardColor = 'purple';
// $header = $field['header'];
// $copy = $field['copy'];
// $images = $field['images'];
// $buttonColor = 
$blocks = $field['5050_blocks'];
?>
<div class="fifty-blocks"><?php 
$count = 0;
foreach($blocks as $block) : 
// var_dump();
if($count % 2 === 0) {
  $class = 'even';
} else {
  $class = 'odd';
}
?>

<div class="block <?php echo $class ?>">
  
  <figure>
    <img src="<?php echo $block['image']['sizes']['fifty'] ?>" />
  </figure>
  <div>
    <h3 class="display"><?php echo $block['header']?></h3>
    <p><?php echo $block['copy']; ?></p>
    <?php  if(($block['button'])){ ?> 
    <a class="button " href="<?php echo $block['button']['url'] ?>">?php echo  $block['button']['title'] ?></a>
    <?php }?>
    
  </div> 

</div><?php
$count++;
endforeach; ?>

</div>