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
echo $params->get('intro');?>
<br><br>
<div id="tiles">

<?php //print_r($tiles);
foreach ($tiles as $tile) : ?>
	<div class="tile">
		<div class="title">
			<?php echo $tile->title;?>
		</div>
		<div class="image">
			<?php if ($tile->choose == 'image'):?>
			<img class="img-responsive" src="<?php echo $tile->img;?>" alt="" />
			<?php else: ?>
				<?php echo $tile->icon; ?>
			<?php endif;?>
		</div>
		<div class="description">
			<?php echo $tile->description;?>
		</div>
	</div>
  
<?php endforeach; 
?>

	
	
</div>