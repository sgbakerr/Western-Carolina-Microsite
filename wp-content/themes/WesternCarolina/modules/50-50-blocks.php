<?
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
<div class="fifty-blocks"><? 
$count = 0;
foreach($blocks as $block) : 
// var_dump();
if($count % 2 === 0) {
  $class = 'even';
} else {
  $class = 'odd';
}
?>

<div class="block <?= $class ?>">
  
  <figure>
    <img src="<?= $block['image']['sizes']['fifty'] ?>" />
  </figure>
  <div>
    <h3 class="display"><?= $block['header']?></h3>
    <p><?= $block['copy']; ?></p>
    <?  if(($block['button'])){ ?> 
    <a class="button " href="<?= $block['button']['url'] ?>"><?=  $block['button']['title'] ?></a>
    <? }?>
    
  </div> 

</div><?
$count++;
endforeach; ?>

</div>