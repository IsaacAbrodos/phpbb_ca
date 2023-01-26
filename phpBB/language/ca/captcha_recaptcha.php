<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'ca', // Find the language/country code on https://developers.google.com/recaptcha/docs/language - If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Per tal d’utilitzar reCaptcha heu de crear un compte al lloc web <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'La solució que heu proporcionat és incorrecta',
	'RECAPTCHA_NOSCRIPT'			=> 'Habiliteu el JavaScript al vostre navegador per carregar el repte.',

	'RECAPTCHA_PUBLIC'				=> 'Clau del lloc web',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'La clau reCaptcha del vostre lloc web. Podeu aconseguir claus al lloc web <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Si us plau, utilitzeu el distintiu de tipus reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_PRIVATE'				=> 'Clau secreta',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'La vostra clau reCaptcha secreta. Podeu aconseguir claus al lloc web <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Si us plau, utilitzeu el distintiu de tipus reCAPTCHA v2 &gt; Invisible reCAPTCHA.',

	'RECAPTCHA_INVISIBLE'			=> 'Aquest CAPTCHA és invisible. Per verificar que funciona, hauria d’aparèixer una icona petita al cantó inferior dret d’aquesta pàgina.',
));
