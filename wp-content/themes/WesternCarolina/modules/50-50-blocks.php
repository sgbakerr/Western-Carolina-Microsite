<?php
global $field;
  


$blocks = $field['5050_blocks']; ?>
<div class="fifty-blocks"><?php 
$count = 0;
foreach($blocks as $block) : 
  
  if($count % 2 === 0) {
    $class = 'even';
    $color = 'purple';
  } else {
    $class = 'odd';
    $color = '';
} ?>

<div class="block <?php echo $class ?>">

  <figure>
    <img src="<?php echo $block['image']['sizes']['fifty'] ?>" />
  </figure>
  <div>
    <div class="card no-shadow <?php echo $color; ?>">
    <?php if( $block['eyebrow_text']) : ?>
      <h4 class="eyebrow sans-serif"><?php echo $block['eyebrow_text'] ?></h4>
    <?php endif; ?>
    <?php if( $block['header']) : ?>
      <h3 class="display"><?php echo $block['header']?></h3>
    <?php endif; ?>
    <?php if($block['copy'])  :?>
      <p><?php echo $block['copy']; ?></p>
    <?php endif; ?>
      
    <?php  if(($block['button'])){ ?> 
    <a class="button " href="<?php echo $block['button']['url'] ?>"><?php echo  $block['button']['title'] ?></a>
    <?php }?>
    </div>  
  </div> 

</div><?php
$count++;
endforeach; ?>

</div>