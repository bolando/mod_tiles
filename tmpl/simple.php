<?php
 
// no direct access
defined('_JEXEC') or die;
echo $params->get('intro');?>
<br><br>
<div id="tiles"  class="col<?php echo $params->get('kolumny')?>">

<?php //print_r($tiles);
foreach ($tiles as $tile) : ?>
	<div class="tile ">
		
		<div class="image">
			<?php if ($tile->choose == 'image'):?>
			<img class="img-responsive" src="<?php echo $tile->img;?>" alt="" />
			<?php else: ?>
				<?php echo $tile->icon; ?>
			<?php endif;?>
		</div>
		<div class="title">
			<?php echo $tile->title;?>
		</div>
	</div>
  
<?php endforeach; 
?>

	
	
</div>