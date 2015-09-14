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
	'ACP_QUICKREPLY'				=> 'Szybka odpowiedź',
	'ACP_QUICKREPLY_EXPLAIN'		=> 'Ustawienia szybkiej odpowiedzi',

	'ACP_QR_BBCODE'					=> 'Włącz BBCode',
	'ACP_QR_BBCODE_EXPLAIN'			=> 'Włącza przyciski BBCode w szybkiej odpowiedzi.',
	'ACP_QR_COMMA'					=> 'Dodaj przecinek po nazwie użytkownika',
	'ACP_QR_COMMA_EXPLAIN'			=> 'Automatycznie dodaje przecinek przy użyciu “Odnieś się do użytkownika”.',
	'ACP_QR_CTRLENTER'				=> 'Włącz wysyłanie przez “Ctrl+Enter”',
	'ACP_QR_CTRLENTER_EXPLAIN'		=> 'Pozwala na wysyłanie przez naciśnięcie “Ctrl+Enter”.',
	'ACP_QR_ENABLE_RE'				=> 'Włącz “Re:”',
	'ACP_QR_ENABLE_RE_EXPLAIN'		=> 'Automatycznie dodaje prefiks “Re:” w “Temacie posta” w szybkiej odpowiedzi.',
	'ACP_QR_QUICKNICK'				=> 'Dodaj nazwę użytkownika',
	'ACP_QR_QUICKNICK_EXPLAIN'		=> 'Pozwala dodawać nazwę użytkownika, kiedy klikniesz na link "Odnieś się do użytkownika".',
	'ACP_QR_QUICKNICK_REF'			=> 'Włącz tag do odnoszenia się do użytkownika',
	'ACP_QR_QUICKNICK_REF_EXPLAIN'	=> 'BBCode [ref] będzue użyte, zamiast [b] w “Odnieś się do użytkownika”.',
	'ACP_QR_QUICKNICK_PM'			=> 'Dodaj przycisk «Odpowiedz w PM» w dropdown-ie “Odnieś się do użytkownika”',
	'ACP_QR_QUICKQUOTE'				=> 'Włącz szybki cytat',
	'ACP_QR_QUICKQUOTE_EXPLAIN'		=> 'Pozwala cytować poprzez “popup”, który pojawia sie gdy zaznaczysz tekst w wiadomości.',
	'ACP_QR_QUICKQUOTE_LINK'		=> 'Dodaj link do profilu autora posta kiedy używasz szybkiej odpowiedzi',
	'ACP_QR_FULL_QUOTE'				=> 'Dodaj pełny cytat do szybkiej odpowiedzi',
	'ACP_QR_FULL_QUOTE_EXPLAIN'		=> 'Zmień standardowe zachowanie przycisku “Odpowiedz cytatem”.',
	'ACP_QR_SMILIES'				=> 'Włącz emotikony',
	'ACP_QR_SMILIES_EXPLAIN'		=> 'Pozwala pokazywać emotikony w szybkiej odpowiedzi.',
	'ACP_QR_CAPSLOCK'				=> 'Włącz zmianę na wielkie / małe litery',
	'ACP_QR_SHOW_BUTTON_TRANSLIT'	=> 'Pokaż przycisk “Konwertuj”',
	'ACP_QR_AJAX_SUBMIT'			=> 'Włącz odpowiedzi przez Ajax',
	'ACP_QR_AJAX_SUBMIT_EXPLAIN'	=> 'Pozwala odpowiadać bez przeładowania strony.',
	'ACP_QR_AJAX_PAGINATION'		=> 'Pozwala nawigować bez przeładowania strony',
	'ACP_QR_AJAX_PAGINATION_EXPLAIN'=> 'Pozwól użytkownikami ustawić “Nie odświeżaj szybkiej odpowiedzi, gdy nawigujesz po temacie”.',
	'ACP_QR_SCROLL_TIME'			=> 'Czas na scroll i animację',
	'ACP_QR_SCROLL_TIME_EXPLAIN'	=> 'Czas w milisekundach na "soft scroll". Wpisz 0 dla standardowego.',
	'ACP_QR_SHOW_SUBJECTS'			=> 'Pokaż tematy postów w tematach',
	'ACP_QR_SHOW_SUBJECTS_IN_SEARCH'=> 'Pokaż tematy postów w wynikach wyszukiwania',
	'ACP_QR_SOURCE_POST'			=> 'Dodaj link do cytowanej wiadomości',
	'ACP_QR_ATTACH'					=> 'Pozwól na załączniki',
	'ACP_QR_ALLOW_FOR_GUESTS'		=> 'Pozwala na załączniki dla gości, jeśli włączeni',
	'ACP_QR_COLOUR_NICKNAME'		=> 'Dodaj kolor, gdy odnosisz sie do użytkownika',
));
