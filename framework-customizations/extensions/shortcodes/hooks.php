<?php if (!defined('FW')) die('Forbidden');

/** @internal */
function _filter_disable_shortcodes($to_disable)
{
	$to_disable[] = 'demo_disabled';
	$to_disable[] = 'table';
	$to_disable[] = 'calendar';
//	$to_disable[] = 'icon-box';
	return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', '_filter_disable_shortcodes');