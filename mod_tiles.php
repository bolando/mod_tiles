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

// get the repeatable field value and decode it
//print_r ($params->get('tiles'));
$tiles 	 = $params->get('tiles');
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles.css');

require JModuleHelper::getLayoutPath('mod_tiles', $params->get('layout', 'default'));
?>