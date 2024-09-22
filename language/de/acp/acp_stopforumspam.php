<?php
/**
*
* Stop forum Spam extension for the phpBB Forum Software package.
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
	'SFS_SETTINGS'					=> 'Einstellungen',
	'SFS_ENABLED'					=> 'Stop Forum Spam aktivieren',
	'SFS_ENABLED_EXPLAIN'			=> 'Aktiviere oder deaktiviere die Erweiterung. Dies gilt sowohl für die Benutzerregistrierung als auch für Gastbeiträge.',
	'SFS_THRESHOLD_SCORE'			=> 'Schwellenwert Stop Forum Spam',
	'SFS_THRESHOLD_SCORE_EXPLAIN'	=> 'Die Erweiterung prüft einen Schwellenwert (z. B. die Häufigkeit, mit der ein Benutzername, eine E-Mail- oder IP-Adresse in der Datenbank von Stop Forum Spam gefunden wird). Du kannst eine beliebige Zahl zwischen 1 und 99 eingeben. Je niedriger die Zahl, desto größer die Wahrscheinlichkeit eines Fehlalarms.',
	'SFS_LOG_MESSAGE'				=> 'Nachricht protokollieren',
	'SFS_LOG_MESSAGE_EXPLAIN'		=> 'Wenn auf "Ja" gesetzt, werden Nachrichten im ACP entweder in den Admin- oder Benutzerprotokollen protokolliert, die die durchgeführte Aktion angeben.',
	'SFS_BAN_IP'					=> 'Benutzer blocken',
	'SFS_BAN_IP_EXPLAIN'			=> 'Wenn "Ja", wird die IP oder der Benutzername des Benutzers gemäß der Einstellung "Dauer der Sperre" gesperrt.',
	'SFS_BAN_REASON'				=> 'Grund bei Sperrung anzeigen',
	'SFS_BAN_REASON_EXPLAIN'		=> 'Wenn "Benutzer blocken" auf "Ja" gesetzt ist, kannst Du wählen, ob dem gesperrten Benutzer eine Nachricht angezeigt wird oder nicht.',
	'SFS_DOWN'						=> 'Zulassen, wenn Stop Forum Spam nicht verfügbar ist',
	'SFS_DOWN_EXPLAIN'				=> 'Soll die Registrierung/das Posten erlaubt sein, wenn die Stop Forum Spam-Website ausgefallen ist?',
	'SFS_API_KEY'					=> 'Stop Forum Spam API Schlüssel',
	'SFS_API_KEY_EXPLAIN'			=> 'Wenn Du Spammer an die Stop Forum Spam Datenbank senden möchtest, gebe Deinen API-Schlüssel von <a target="_blank" href="https://www.stopforumspam.com/keys" rel="noreferrer noopener">Stop Forum Spam</a> hier ein. Du mußt auf der SFS-Website registriert sein, um einen API-Schlüssel zu erhalten.',
	'SFS_NEED_CACHE'				=> 'Es gibt einen API-Schlüssel, aber es wurde kein Cache für Admins und Mods erstellt. Bitte klicke auf den Button um den Cache für Admins und Mods zu generieren, ansonsten können diese gemeldet werden.',
	'SFS_NOTIFY'					=> 'Board Benachrichtigung',
	'SFS_NOTIFY_EXPLAIN'			=> 'Wenn "Ja" ausgewählt und oben ein API-Schlüssel festgelegt ist, werden auch Board-Benachrichtigungen ausgelöst, wenn ein Beitrag gemeldet wird, um Foren Spam zu stoppen',
	'SFS_CLEAR'						=> 'Gemeldete Beiträge zurücksetzen',
	'SFS_CLEAR_EXPLAIN'				=> 'Setzt alle gemeldeten Beiträge ( %1s insgesamt ) und private Nachrichten ( %2s insgesamt ) zurück, die an Stop Forum Spam gemeldet wurden',
	'SFS_CLEAR_SURE'				=> 'Lösche Stop Forum Spam Berichte',
	'SFS_CLEAR_SURE_CONFIRM'		=> 'Möchtest Du wirklich alle gemeldeten Beiträge und privaten Nachrichten löschen?',
	'SFS_BUILD'						=> 'Cache der Admins und Mods erstellen',
	'SFS_BUILD_EXPLAIN'				=> 'Erstellt einen Cache mit Admins und globalen Mods zur Verwendung beim melden an SFS',
	'SFS_NEEDS_API'					=> 'Um den Cache zu erstellen, benötigst Du einen API-Schlüssel von Stop Forum Spam',
	// ACP messages
	'SFS_BY_NAME'					=> 'Überprüfe den Benutzernamen',
	'SFS_BY_EMAIL'					=> 'Überprüfe die eMail-Adresse',
	'SFS_BY_IP'						=> 'Überprüfe die IP-Adresse',
	'SFS_ALLOW_PM_REPORT'			=> 'Melden von PMs zulassen',
	'SFS_PM_REPORT_EXPLAIN'			=> 'Wenn Du einen API-Schlüssel habst und dies zulässt, kann jeder Benutzer eine PM an Stop Forum Spam melden. Deine Benutzer könnten "wahllos" sein, daher ist es möglicherweise am besten, wenn Du diese Einstellung auf "Nein" beläst.',
	'TOO_SMALL_SFS_THRESHOLD'		=> 'Der Schwellenwert ist zu klein.',
	'TOO_LARGE_SFS_THRESHOLD'		=> 'Der Schwellenwert ist zu groß.',
	'SFS_SETTINGS_ERROR'			=> 'Beim Speichern Deiner Einstellungen ist ein Fehler aufgetreten. Bitte reiche den Backtrace mit Deinem Fehlerbericht ein.',
	'SFS_SETTINGS_SUCCESS'			=> 'Die Einstellungen wurden erfolgreich gespeichert.',
	'SFS_REPORTED_CLEARED'			=> 'An Stop Forum Spam gemeldete Beiträge und private Nachrichten wurden zurückgesetzt.',
	//Donation
	'PAYPAL_IMAGE_URL'				=> 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'					=> 'Spende über PayPal',
	'BUY_ME_A_BEER_URL'				=> 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'					=> 'Kauf mir ein Bier, für die Erstellung dieser Erweiterung',
	'BUY_ME_A_BEER_SHORT'			=> 'Spende für diese Erweiterung',
	'BUY_ME_A_BEER_EXPLAIN'			=> 'Diese Erweiterung ist völlig kostenlos. Es ist ein Projekt, mit dem ich meine Zeit zum Vergnügen und zur Nutzung der phpBB-Community verbringe. Wenn Du diese Erweiterung gerne verwendest oder Dein Forum davon profitiert hat, denke doch bitte daran <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">mir ein Bier zu kaufen</a>. Ich wäre sehr dankbar. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
	'SFS_CONTACTADMIN_EXT'			=> 'Erweiterung "Contact Admin" zulassen',
	'SFS_CONTACTADMIN_EXT_EXPLAIN'	=> 'Wenn Ja festgelegt und die Erweiterung "Contact Admin" installiert ist, wird diese Erweiterung in die Erweiterung "Contact Admin" integriert.'
]);
