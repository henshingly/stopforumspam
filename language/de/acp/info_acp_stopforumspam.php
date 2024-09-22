<?php
/**
*
* Stop Forum Spam extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, [

	// ACP entries
	'ACP_SFS_TITLE'					=> 'Stop Forum Spam',
	'SFS_CONTROL'					=> 'Einstellungen',
	// ACP message logs
	'LOG_SFS_MESSAGE'				=> '<strong>Stop Forum Spam ausgelöst</strong>:<br />Benutzername: %1$s<br />IP: %2$s<br />Email: %3$s',
	'LOG_SFS_DOWN'					=> '<strong>Stop Forum Spam war während einer Registrierung oder eines Forumsbeitrags ausgefallen</strong>',
	'LOG_SFS_DOWN_USER_ALLOWED'		=> '<strong>Stop Forum Spam war ausgefallen.</strong> Folgender Benutzer wurde im Forum zugelassen:<br />Benutzername: %1$s<br />IP:%2$s<br />Email: %3$s',
	'LOG_SFS_NEED_CURL'				=> 'Die Stop Forum Spam Erweiterung benötigt <strong>cURL</strong>, um korrekt zu funktionieren. Bitte sprechen Sie mit Ihrem Server-Host, um cURL zu installieren und zu aktivieren.',
	'LOG_SFS_CURL_ERROR'			=> '<strong>Stop Forum Spam cURL Fehler</strong><br>» %1$s',
	'LOG_SFS_CONFIG_SAVED'			=> '<strong>Einstellungen Stop Forum Spam geändert</strong>',
	'LOG_SFS_REPORTED'				=> '<strong>Benutzer wurde Stop Forum Spam gemeldet</strong><br>» %1$s',
	'LOG_SFS_PM_REPORTED'			=> '<strong>Benutzer-PM wurde an Stop Forum Spam gemeldet</strong><br>» %1$s',
	'LOG_SFS_REPORTED_CLEARED'		=> 'Gemeldete Beiträge und private Nachrichten an Stop Forum Spam wurden gelöscht',
	'LOG_ADMINSMODS_CACHE_BUILT'	=> 'Stop Forum Spam Cache füt Administratoren und Mods wurde erstellt',
]);
