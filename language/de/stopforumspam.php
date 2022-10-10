<?php
/**
*
* Stop Forum Spam extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'CANNOT_REPORT_ANONYMOUS'		=> 'Du hast keine Berechtigung um das anonyme Konto zu melden.',
    'CANNOT_REPORT_ADMINS_MODS'		=> 'Du hast keine Berechtigungum  Admins oder Mods dieses Forums zu melden.',
    'FORUM_NOT_EXIST'				=> 'Das ausgewählte Forum existiert nicht.',
    'INFO_NOT_FOUND'				=> 'Die Kombination aus Benutzer-ID und Post-ID existiert nicht.',
    'POST_NOT_EXIST'				=> 'Der von Dir ausgewählte Beitrag existiert nicht.',
    'NO_SOUP_FOR_YOU'				=> 'Das wird hier nichts! Offenbar wurdest Du als Spammer markiert.<br>Wenn Du der Meinung bist, dass diese Entscheidung irrtümlich getroffen wurde, wenden Dich bitte an den %Board-Administrator%s.',
    'NO_SOUP_FOR_YOU_NO_CONTACT'	=> 'Das wird hier nichts! Anscheinend wurdest Du als Spammer gekennzeichnet.',
    'PM_NOT_EXIST'					=> 'PM existiert nicht',
    'SFS_ANONYMIZED_IP'				=> 'Die IP des Benutzers wurde anonymisiert, auf 127.0.0.1 gesetzt, wahrscheinlich aufgrund einer Erweiterung.',
    'SFS_MISSING_DATA'				=> 'Es wurden nicht alle Informationen bereitgestellt, um Forum-Spam zu melden.',
    'SFS_IP_STOPPED_SCORE'			=> '<a target="_blank" title="IP auf Stop Forum Spam.com prüfen (öffnet sich in einem neuen Fenster)" href="http://www.Stop Forum Spam.com/ipcheck/%1$s" rel="noreferrer noopener">%1$s</a>',
    'SFS_USERNAME_STOPPED_SCORE'	=> '<a target="_blank" title="Überprüfe den Benutzernamen bei Stop Forum Spam.com (öffnet sich in einem neuen Fenster)" href="http://www.Stop Forum Spam.com/search/?q=%1$s" rel="noreferrer noopener">%1$s</a>',
    'SFS_EMAIL_STOPPED_SCORE'		=> '<a target="_blank" title="Überprüfe die E-Mail Adresse bei Stop Forum Spam.com (öffnet sich in einem neuen Fenster)" href="http://www.Stop Forum Spam.com/search/?q=%1$s" rel="noreferrer noopener">%1$s</a>',
    'SFS_FREQUENCY'					=> ' » %d mal in der Stop Forum Spam-Datenbank gefunden',
    'SFS_IP_STOPPED'				=> '<a target="_blank" title="IP auf Stop Forum Spam.com prüfen (öffnet sich in einem neuen Fenster)" href="http://www.Stop Forum Spam.com/ipcheck/%1$s" rel="noreferrer noopener">%1$s</a>',
    'SFS_USERNAME_STOPPED'			=> '<a target="_blank" title="Überprüfe den Benutzernamen bei Stop Forum Spam.com (öffnet sich in einem neuen Fenster)" href="http://www.Stop Forum Spam.com/search/?q=%1$s" rel="noreferrer noopener">%1$s</a>',
    'SFS_EMAIL_STOPPED'				=> '<a target="_blank" title="Überprüfe die E-Mail Adresse bei Stop Forum Spam.com (öffnet sich in einem neuen Fenster)" href="http://www.Stop Forum Spam.com/search/?q=%1$s" rel="noreferrer noopener">%1$s</a>',
    'SFS_ERROR_MESSAGE'				=> 'Leider können wir Deine Anfrage aufgrund von Problemen mit einer externen Partei derzeit nicht bearbeiten. Du kannst es später erneut versuchen.',
	'SFS_BANNED'	=> [
		1 => 'Einmal in der Stop Forum Spam-Datenbank gefunden',
		2 => '%d mal in der Stop Forum Spam-Datenbank gefunden',
	],
    'SFS_USER_BANNED'				=> 'Aufgrund eines Beitrags im Forum gesperrt',
    'SFS_REPORTED'					=> 'Beitrag wurde bereits gemeldet',
    'SFS_PM_REPORTED'				=> 'PN wurde schon gemeldet',
    'REPORT_TO_SFS'					=> 'Report an Stop Forum Spam',
    'BUTTON_SFS'					=> 'Report to SFS',
    'SFS_SUCCESS_MESSAGE'			=> 'Der Benutzer wurde erfolgreich an die Datenbank von Stop Forum Spam gemeldet',
    'SFS_WAS_REPORTED'				=> 'Beitrag wurde Stop Forum Spam gemeldet',
    'SFS_PM_WAS_REPORTED'			=> 'PN wurde Stop Forum Spam gemeldet',
    'SFS_PM_REPORT_NOT_ALLOWED'		=> 'Melden ist nicht erlaubt',
    'SFS_NEED_CURL'					=> 'Die Erweiterung erfordert cURL, die anscheinend nicht installiert ist',
    'EXTENSION_REQUIREMENTS'		=> 'Die Erweiterung erfordert mindestens die phpBB-Version %1$s. Sie müssen Ihre phpBB-Version aktualisieren, um diese Erweiterung verwenden zu können.',
    'INVALID_IP_ADDRESS'			=> 'ungültige IP-Adresse',
    'SFS_CONFIRM'					=> 'An die Datenbank von Stop Forum Spam melden?',
    'SFS_SUCCESS'					=> 'Forum Spam erfolgreich gestoppt',
    'SFS_OPERATION_CANCELED' 		=> 'Vorgang abgebrochen',
    'SFS_NOT_CHECKED'				=> ' » <em>Parameter wurde nicht gemäß den Einstellungen in der Erweiterung überprüft</em>',
]);
