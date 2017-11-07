<?php
// no direct access
defined('_JEXEC') or die;?>
<div class="tiles_module tiles_full">
	<?php if ($params->get('intro')):?>
		<?php echo $params->get('intro');?>
		<br><br>
	<?php endif;?>

	<div id="tiles" class="col<?php echo $params->get('kolumny')?>">
	<?php //print_r($tiles);
	foreach ($tiles as $tile) : ?>
		<div class="tile">
			<a href="<?php echo $tile->link;?>" <?php if ($tile->target == 'yes'):?>target="_blank"<?php endif;?> rel="noopener noreferrer">
				<?php if ($tile->choose == 'image'):?>
				<img class="img-responsive" src="<?php echo $tile->img;?>" alt="" />
				<?php else: ?>
					<?php echo $tile->icon; ?>
				<?php endif;?>
			</a>
			<a href="<?php echo $tile->link;?>" <?php if ($tile->target == 'yes'):?>target="_blank"<?php endif;?> rel="noopener noreferrer">
				<div class="description" style="background:<?php echo $params->get('kolor')?>">
					<?php if ($tile->title):?>
						<div><?php echo $tile->title;?></div>
					<?php endif;?>
					<?php if ($tile->description):?>
						<div><?php echo $tile->description;?></div>
					<?php endif;?>
				</div>
			</a>
		</div>
		
	  
	<?php endforeach; ?>

		
		
	</div>
</div>