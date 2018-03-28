<?php
/**
Controller
 */

// no direct access
defined('_JEXEC') or die;

// get the repeatable field value and decode it
//print_r ($params->get('tiles'));
$tiles 	 = $params->get('tiles');
$styl 	 = $params->get('styl');
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles.css');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
switch ($styl) {
	case 'default_link':
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles_default_link.css');
        require JModuleHelper::getLayoutPath('mod_tiles', $params->get('layout', 'default_link'));
        break;
	case 'full':
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles_full.css');
        require JModuleHelper::getLayoutPath('mod_tiles', $params->get('layout', 'full'));
        break;
	case 'slider':
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles_slider.css');
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/jquery.bxslider.min.css');
		$doc->addScript(JURI::Root(true).'/modules/mod_tiles/js/jquery.bxslider.min.js');
        require JModuleHelper::getLayoutPath('mod_tiles', $params->get('layout', 'slider'));
        break;
	case 'simple':
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles_simple.css');
        require JModuleHelper::getLayoutPath('mod_tiles', $params->get('layout', 'simple'));
        break;
    
    default:
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_tiles/css/mod_tiles_default.css');
        require JModuleHelper::getLayoutPath('mod_tiles', $params->get('layout', 'default'));
        break;
}
?>