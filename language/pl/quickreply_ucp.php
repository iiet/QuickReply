<?php
/**
*
* quickreply [English]
*
* @package language quickreply
* @copyright (c) 2014 William Jacoby (bonelifer)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'QR_ENABLE_AJAX_PAGINATION'			=> 'Nie odświeżaj szybkiej odpowiedzi, gdy nawigujesz po temacie',
	'QR_ENABLE_SCROLL'					=> 'Włącz automatyczny scroll, gdy nawigujesz po temacie',
	'QR_ENABLE_SOFT_SCROLL'				=> 'Włącz soft scroll i animacje, gdy nawigujesz po temacie',
));
