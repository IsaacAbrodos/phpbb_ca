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
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'ca',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',
	
	'RECAPTCHA_INCORRECT'			=> 'La solució que heu proporcionat és incorrecta',
	'RECAPTCHA_NOSCRIPT'			=> 'Habiliteu el JavaScript al vostre navegador per carregar el repte.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Per tal d’utilitzar reCaptcha heu de crear un compte al lloc web <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'Aquest CAPTCHA és invisible. Per verificar que funciona, hauria d’aparèixer una icona petita al cantó inferior dret d’aquesta pàgina.',

	'RECAPTCHA_PUBLIC'				=> 'Clau del lloc web',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'La clau reCaptcha del vostre lloc web. Podeu aconseguir claus al lloc web <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Si us plau, utilitzeu el distintiu de tipus reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'La clau reCaptcha del vostre lloc web. Podeu aconseguir claus al lloc web <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Si us plau, utilitzeu el distintiu de tipus reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Clau secreta',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'La vostra clau reCaptcha secreta. Podeu aconseguir claus al lloc web <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Si us plau, utilitzeu el distintiu de tipus reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'La vostra clau reCaptcha secreta. Podeu aconseguir claus al lloc web <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Si us plau, utilitzeu el distintiu de tipus reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Domini de la petició',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'El domini des d’on s’ha d’obtenir l’script i que s’utilitza per verificar la petició.<br>Utilitzeu <samp>recaptcha.net</samp> quan <samp>google.com</samp> no sigui accessible.',

	'RECAPTCHA_V3_METHOD'				=> 'Mètode de la petició',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'El mètode a utilitzar quan es verifica la petició.<br>Les opcions inhabilitades no estan disponibles en la vostra configuració.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Llindar per defecte',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'S’utilitza quan no aplica cap de les altres accions.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Llindar per iniciar la sessió',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Llindar per fer publicacions',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Llindar per registrar-se',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Llindar per enviar informes',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Llindars',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 torna una puntuació (<samp>1.0</samp> és, molt probablement, una interacció de qualitat, <samp>0.0</samp> segurament és un robot). Aquí podeu indicar la puntació mínima per cada acció.',
));
