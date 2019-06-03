<?php
/**
 * @version		$Id: mod_multijscss.php  2019-06-15 
 * @subpackage	mod_multijscss
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Plugin\CMSPlugin;


HTMLHelper::_('jquery.framework'); 

HTMLHelper::_('bootstrap.framework');
 
if ($params->def('prepare_content', 1))
{
	PluginHelper::importPlugin('content');

	$module->content = HTMLHelper::_('content.prepare', $module->content, '', 'mod_multijscss');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$css_file = $params->get( 'stylesheet', 'nothing.css');
if ( $css_file ) { 

$css_url = HTMLHelper::_('stylesheet', 'mod_multijscss/' . $css_file, array('version' => 'auto', 'relative' => true));

}

$js_file = $params->get( 'javascript', 'nothing.js' );
if ( $js_file ) { 

$js_url = HTMLHelper::_('script', 'mod_multijscss/' . $js_file, array('version' => 'auto', 'relative' => true));

}
$js_file2 = $params->get( 'javascript2', 'nothing2.js' );
if ( $js_file2 ) { 

	$js2_url = HTMLHelper::_('script', 'mod_multijscss/' . $js_file2, array('version' => 'auto', 'relative' => true));
}

require ModuleHelper::getLayoutPath('mod_multijscss', $params->get('layout', 'default'));