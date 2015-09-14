<?php
/**
*
* quickreply [English]
*
* @package quickreply
* @copyright (c) 2014 William Jacoby (bonelifer)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_QUICKREPLY'				=> 'Szybka odpowiedź',
	'ACP_QUICKREPLY_EXPLAIN'		=> 'Ustawienia szybkiej odpowiedzi',

	'ACL_A_QUICKREPLY'			=> 'Może zmienić ustawienia szybkiej odpowiedzi',
	'ACL_F_QR_CHANGE_SUBJECT'	=> 'Może modyfikować temat postu',
));
