<?php
// no direct access
defined('_JEXEC') or die;
echo $params->get('intro');?>
<br><br>
<div id="tiles">

<?php //print_r($tiles);
foreach ($tiles as $tile) : ?>
	<div class="tile">
		<div class="title">
			<a href="<?php echo $tile->link;?>" <?php if ($tile->target == 'yes'):?>target="_blank"<?php endif;?>><?php echo $tile->title;?></a>
		</div>
		<div class="image">
			<?php if ($tile->choose == 'image'):?>
			<img class="img-responsive" src="<?php echo $tile->img;?>" alt="" />
			<?php else: ?>
				<?php echo $tile->icon; ?>
			<?php endif;?>
		</div>
		<div class="description" style="background-color:<?php echo $params->get('kolor')?>">
			<?php echo $tile->description;?>
			<a href="<?php echo $tile->link;?>" <?php if ($tile->target == 'yes'):?>target="_blank"<?php endif;?>>więcej</a>
		</div>
		
	</div>
  
<?php endforeach; 
?>

	
	
</div>