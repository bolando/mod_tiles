<?php
/**
 * Photo text slider
 *
 * @package 	Photo text slider
 * @subpackage 	Photo text slider
 * @version   	3.6
 * @author    	Gopi Ramasamy
 * @copyright 	Copyright (C) 2010 - 2016 www.gopiplus.com, LLC
 * @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * http://www.gopiplus.com/extensions/2012/03/photo-text-slider-joomla-module/
 *
 */
 
// no direct access
defined('_JEXEC') or die;
if ($params->get('intro')):?>
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