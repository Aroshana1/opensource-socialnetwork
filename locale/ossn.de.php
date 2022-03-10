<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$de = array(
    'home' => 'Startseite',
    'site:index' => 'Willkommen bei',
    'news:feed' => 'Neuigkeiten',
    'new:feed' => 'Neuigkeiten',
    'photos:ossn' => 'Fotos',
    'admin:view:site' => 'Seiten-Ansicht',

    'home:top:heading' => "Willkommen bei %s!<br>Egal, ob Du neue Freunde oder alte Bekannte suchst: Hier bist Du richtig.",
    'create:account' => 'Mitmachen!',
    'its:free' => 'Es ist umsonst und kostet nichts.',

    'register:ok:message' => "Dein Benutzer-Konto wurde nun eingerichtet, und Du hast eine Aktivierungs-Email erhalten. Sieh in Deinem Spam-Ordner nach, wenn Du die Nachricht im Posteingang nicht findest.",

    'copyright' => '&copy; COPYRIGHT',
    'powered' => 'Powered by the Open Source Social Network.',
	
    'name' => 'Name',
    'birthdate' => 'Geburtstag',
    'first:name' => 'Vorname',
    'last:name' => 'Zuname',
    'email' => 'Email',
    'email:again' => 'Email (nochmal)',
    'username' => 'Benutzer-Name',
    'password' => 'Passwort',
    'day' => 'Tag',
    'month' => 'Monat',
    'year' => 'Jahr',
    'male' => 'männlich',
    'female' => 'weiblich',
    'account:create:notice' => 'Mit der Anmeldung akzeptierst Du unsere',
    'gender' => 'Geschlecht',

    'account:settings' => 'Einstellungen',
    'page:error' => 'Seite nicht gefunden',
    'page:error:text' => 'Oops! Die von Dir angeforderte Seite wurde nicht gefunden!',
    'page:error:heading' => '404',

    'search:users' => 'Personen',
    'admin:logout' => 'Abmelden',
    'logout' => 'Abmelden',

    'admin:components' => 'Komponenten',
    'admin:dashboard' => 'Übersicht',
    'admin:install' => 'Installieren',
    'admin:themes' => 'Themen',
    'admin:basic' => 'Basis',
    'admin:cache' => 'Cache',
    'admin:mode' => 'Modus',
    'configure' => 'Konfigurieren',
    'admin:help' => 'Hilfe',
    'admin:support' => 'Support',

    'ossn:update:check:error' => 'Fehler',

    'upload' => 'Hochladen',
    'save' => 'Speichern',
    'add' => 'Hinzufügen',
    'edit' => 'Bearbeiten',
    'search' => 'Suchen',
	'delete' => 'Löschen',

    'admin:users' => 'Benutzer anzeigen',
    'admin:add:user' => 'Benutzer hinzufügen',
	'admin:user:deleted' => 'Benutzer wurde gelöscht',
	'admin:user:delete:error' => 'Benutzer kann nicht gelöscht werden - versuch es später nochmal',

    'type' => 'Typ',
    'normal' => 'Normaler Benutzer',
    'admin' => 'Administrator',

    'lastlogin' => 'Letzte Anmeldung',

    'my:version' => 'Meine Ossn Version',
    'online:users' => 'Online Benutzer',
    'themes' => 'Themen',
    'users' => 'Benutzer',
    'components' => 'Komponenten',
    'available:updates' => 'Verfügbare Updates',
    'website:name' => 'Webseiten Name',
    'owner:email' => 'Betreiber Email',
    'default:lang' => 'Standard Sprache',

    'timeline' => 'Chronik',
    'photos' => 'Fotos',
    'friends' => 'Freunde',
    'links' => 'Links',
    'ossn:add:user:mail:subject' => "%s, bitte bestätige Deine Email-Adresse bei %s!",
    'ossn:add:user:mail:body' => "Bevor Du %s benutzen kannst, musst Du erst noch Deine Email Adresse bestätigen.

Klicke dazu bitte auf den folgenden Link:

%s

Falls der Link nicht anklickbar ist, kopiere ihn einfach in Deinen Browser.

%s",
    'user:friends' => 'Freunde',
    'user:account:validated' => 'Dein Benutzer-Konto wurde erfolgreich freigeschaltet',
    'user:account:validate:fail' => 'Das Benutzer-Konto kann z. Zt. nicht überprüft werden - versuche es später nochmal',

    'cache:enabled' => 'Cache erfolgreich aktiviert',
    'cache:disabled' => 'Cache erfolgreich de-aktiviert',
    'cache:enable' => 'Cache aktivieren',
    'cache:disable' => 'Cache de-aktivieren',

    'cache:1' => 'aktiviert',
    'cache:0' => 'de-aktiviert',
    'cache:notice' => 'CSS and JS werden im cache gehalten - so verringert sich die Ladezeit der Seite',

    'theme:install:notice' => 'Lade ein neues Thema als .zip-Archiv hoch',
    'com:install:notice' => 'Lade eine neue Komponente als .zip-Archiv hoch',

    'login:error' => 'Fehler bei der Anmeldung: Der Benutzer-Name und/oder das Passwort ist falsch!',
    'login:error:sub' => "Bitte überprüfe beides noch einmal, achte auf Groß- und Klein-Schreibung und probiere es erneut.",
    'login:success' => 'Du bist nun angemeldet',
	
	'ossn:com:installer:create:tmpdir:error' => 'Temporäres Datenverzeichnis kann nicht erstellt werden', 
	'ossn:com:installer:upload:error' => 'Beim Hochladen ist ein Fehler aufgetreten: %s',
	'ossn:com:installer:version:error' => 'Diese Komponente erfordert OSSN %s oder höher',
	'ossn:com:installer:remove:comdir:error' => 'Diese Komponente wurde bereits installiert - bitte lösche sie zuerst aus der Liste auf der Komponentenseite',
	'ossn:com:installer:create:comdir:error' => 'Die Dateien können nicht in das Komponentenverzeichnis kopiert werden',
	'ossn:com:installer:xml:incomplete:error' => 'Komponentenbeschreibungsdatei fehlt oder ist unvollständig',
	'ossn:com:installer:zip:incomplete:error' => 'Komponenten-Zip-Archiv unvollständig',
	'ossn:com:installer:open:zip:error' => 'Zip-Archiv der Komponente kann nicht geöffnet werden',
	'ossn:com:installer:move:uploaded:file:error' => 'Ungültiges Zip-Archiv',
	'ossn:com:installer:com:installation:success' => 'Die Komponente wurde in die Komponentenliste hochgeladen. Du kannst sie nun auf der Seite "Komponenten" aktivieren.',
	
	'ossn:theme:installer:create:tmpdir:error' => 'Temporäres Datenverzeichnis kann nicht erstellt werden', 
	'ossn:theme:installer:upload:error' => 'Beim Hochladen ist ein Fehler aufgetreten: %s',
	'ossn:theme:installer:version:error' => 'Diese Thema erfordert OSSN %s oder höher',
	'ossn:theme:installer:remove:themedir:error' => 'Diese Thema wurde bereits installiert - bitte lösche sie zuerst aus der Liste auf der Themanseite',
	'ossn:theme:installer:create:themedir:error' => 'Die Dateien können nicht in das Themanverzeichnis kopiert werden',
	'ossn:theme:installer:xml:incomplete:error' => 'Themanbeschreibungsdatei fehlt oder ist unvollständig',
	'ossn:theme:installer:zip:incomplete:error' => 'Theman-Zip-Archiv unvollständig',
	'ossn:theme:installer:open:zip:error' => 'Zip-Archiv der Thema kann nicht geöffnet werden',
	'ossn:theme:installer:move:uploaded:file:error' => 'Ungültiges Zip-Archiv',
	'ossn:theme:installer:theme:installation:success' => 'Die Thema wurde in die Themanliste hochgeladen. Du kannst sie nun auf der Seite "Theman" aktivieren.',
	
    'settings:saved' => 'Die Einstellungen wurden gespeichert',
    'com:deleted' => 'Die Komponente wurde gelöscht',
    'com:delete:error' => 'Die Komponente konnte nicht gelöscht werden - versuche es bitte erneut',
    'com:disabled' => 'Die Komponente wurde de-aktiviert',
    'com:enabled' => 'Die Komponente wurde aktiviert',

    'theme:delete:active' => 'Ein aktives Thema kann nicht gelöscht werden',
    'theme:deleted' => 'Das Thema wurde gelöscht',
    'theme:delete:error' => 'Das Thema konnte nicht gelöscht werden - versuche es bitte erneut',
    'theme:enabled' => 'Das Thema wurde aktiviert',
    'theme:installed' => 'Das Thema wurde erfolgreich installiert',
    'theme:install:error' => 'Das Thema konnte nicht installiert werden, überprüfe bitte das zip-Archiv',

    'fields:require' => 'Bitte fülle alle Eingabe-Felder aus',
    'username:error' => 'Der Benutzer-Name muss mindestens 5 Zeichen lang sein',
    'password:error' => 'Das Passwort muss mindestens 6 Zeichen lang sein',
    'account:created' => 'Das Benutzer-Konto wurde angelegt',
    'account:create:error:admin' => 'Das Benutzer-Konto konnte nicht angelegt werden - probiere es später nochmal',
    'user:updated' => 'Die Änderung wurde gespeichert',
    'logged:out' => 'Du bist nun abgemeldet',
	'username:inuse' => 'Dieser Benutzer-Name ist schon vergeben - bitte versuche es mit einem anderen Namen',
	'email:inuse' => 'Diese Email-Adresse ist schon in Benutzung - bitte versuche es mit einer anderen Adresse',
	'email:invalid' => 'Die Email-Adresse ist fehlerhaft - bitte überprüfe sie noch einmal',
	'email:error:matching' => "Die Email-Adressen stimmen nicht überein",
    'account:created:email' => "Dein Benutzer-Konto wurde nun eingerichtet, und Du hast eine Aktivierungs-Email erhalten. Sieh in Deinem Spam-Ordner nach, wenn Du die Nachricht im Posteingang nicht findest",

    'administration' => 'Administration',

    'privacy' => 'Privatsphäre',
    'close' => 'Geschlossen',
    'open' => 'Offen',
    'public' => 'Öffentlich',
    'friends' => 'Freunde',
    'privacy:public:note' => 'Alle sollen das sehen',
    'privacy:friends:note' => 'Nur Deine Freunde sollen das sehen',

    'add:friend' => 'Freunde werden',
    'cancel:request' => 'Freundschafts-Anfrage abbrechen',
    'remove:friend' => 'Freundschaft beenden',
    'no:friends' => 'Keine Freunde',
    'settings' => 'Einstellungen',
    'ossn:add:friend:error' => 'Freund kann nicht hinzugefügt werden',
    'ossn:friend:request:submitted' => 'Deine Freundschafts-Anfrage wurde losgeschickt',

    /* Upgrades */
    'upgrade:file:load:error' => 'Die Aktualisierungs-Datei kann nicht geladen werden',
    'upgrade:success' => "Ossn wurde erfolgreich auf Version %s aktualisiert",
    'upgrade:failed' => "Die Aktualisierung auf Version % ist fehlgeschlagen",
    'upgrade:not:available' => 'Keine Aktualisierungen vorhanden',

    'site:login' => 'Anmelden',
    /* Page errors */
    'system:error:title' => 'Irgendwas ist schiefgelaufen',
    'system:error:text' => 'Irgendwas ist schiefgelaufen - versuche, die Seite noch einmal neu zu laden',

    /* Password Reset */
    'reset:login' => 'Passwort zurücksetzen',
    'reset:password' => 'Setze Dein Passwort zurück',
    'enter:new:password' => 'Gib Dein neues Passwort ein und klicke auf Zurücksetzen',
    'reset' => 'Zurücksetzen',
    'enter:emai:reset:pwd' => 'Um das Passwort zurückzusetzen, gib zuerst die Email-Adresse Deines Benutzer-Kontos ein und klicke dann auf Zurücksetzen ',
    'ossn:reset:password:subject' => 'Hinweise zum Passwort zurücksetzen',
    'ossn:reset:password:body' => "Hallo %s,
	
Um Dein Passwort zurückzusetzen klicke bitte auf den folgenden Link oder kopiere ihn in Deinen Browser:

%s

%s",
    'passord:reset:success' => 'Passwort erfolgreich geändert',
    'passord:reset:fail' => 'Das Passwort kann z. Zt. nicht zurückgesetzt werden - bitte versuche es später nochmal',
    'password:reset:email:required' => 'Das Email-Feld darf nicht leer sein',
    'passord:reset:email:success' => 'Hinweise zum Zurücksetzen des Passwortes wurden an Deine Email-Adresse geschickt',

    'erros:reporting' => 'Fehler Protokollierung',
    'erros:off' => 'Aus',
    'erros:on' => 'Ein',
    'basic:settings' => 'Grund-Einstellungen',

    'ossn:new:version:error' => 'Unbekannt',
    'ossn:version:avaialbe' => "%s",
	
	'ossn:exception:title' => 'Ein System-Fehler ist aufgetreten. Versuche es später nochmal. Benachrichtige den Administrator bei %s',
	'ossn:securitytoken:failed' => 'Das ist eine unerlaubte Aktion.',
	'ossn:component:delete:exception' => 'Bist Du sicher, dass Du diese Komponente löschen willst?',
	'ossn:user:delete:exception' => 'Bist Du sicher, dass Du diesen Benutzer löschen möchtest?',
	
	//access
	'title:access:1' => 'Privat',
	'title:access:2' => 'Öffentlich',
	'title:access:3' => 'Nur Freunde',
	
	'upload:file:error:ini_size' => 'Die hochgeladene Datei ist zu groß.',
	'upload:file:error:form_size' => 'Die hochgeladene Datei ist zu groß.',
	'upload:file:error:partial' => 'Der Hochlade-Vorgang wurde abgebrochen.',
	'upload:file:error:no_file' => 'Keine Datei gewählt.',
	'upload:file:error:no_tmp_dir' => 'Die hochgeladene Datei kann nicht gespeichert werden.',
	'upload:file:error:cant_write' => 'Die hochgeladene Datei kann nicht gespeichert werden.',
	'upload:file:error:extension' => 'Die hochgeladene Datei kann nicht gespeichert werden.',
	'upload:file:error:unknown' => 'Der Hochladen hat aus unbekannten Gründen nicht funktioniert .',
	'upload:file:error:multiple' => '%s von %s Uploads sind fehlgeschlagen.',
	
	'ossn:post:size:exceed' => 'Die Aktion überschreitet die erlaubte Länge.',
	
	'admin:com:installer' => 'Komponenten hinzufügen',
	'admin:theme:installer' => 'Themen hinzufügen',
	'admin:cache:settings' => 'Cache Einstellungen',
	'admin:user:list' => 'Benutzer anzeigen',
	'admin:edit:user' => 'Benutzer bearbeiten',
	'admin:login' => 'Anmelden',
	'admin:notification:email' => 'Benachrichtigungs-Email',
	'notification_email' => 'Benachrichtigungs-Email (noreply@domain.de)',
	'owner_email' => 'Betreiber-Email (administrator@domain.de)',
	'ossn:websitename' => 'Name der Webseite',
	'ossn:user:validation:resend' => 'Du hast Deine Registrierung nicht bestätigt, darum kannst Du Dich nicht anmelden. Eine weitere Aktivierungs-Anforderung wurde Dir per mail jetzt zugesandt.',
	'site:timepassed:text' => 'Vor %s',
	// vergangene Zeiträume bestehend aus 16 Elementen Singular|Plural
	'site:timepassed:data' => 'Sekunde|Sekunden|Minute|Minuten|Stunde|Stunden|Tag|Tagen|Woche|Wochen|Monat|Monaten|Jahr|Jahren|Dekade|Dekaden',
	'ossn:notification:no:notification' => 'keine vorhanden',
	'admin:button:enable' => 'Aktivieren',
    'admin:button:enabled' => 'Aktiv',
	'admin:button:disable' => 'Deaktivieren',
	'admin:button:configure' => 'Konfigurieren',
	'admin:button:delete' => 'Löschen',
	'admin:component:author' => 'Autor',
	'admin:component:website' => 'Webseite',
	'admin:sidemenu:components' => 'Komponenten',
	'admin:sidemenu:themes' => 'Themen',
	'admin:sidemenu:settings' => 'Einstellungen',
	'admin:sidemenu:usermanager' => 'Benutzer Verwaltung',
	'cancel' => 'Abbrechen',
	'ossn:language:complete' => 'Komplett',
	'ossn:pagination:first' => 'Anfang',
	'ossn:pagination:last' => 'Ende',
	'validate' => 'Bestätigen',
	'admin:users:unvalidated' => 'Unbestätigte Benutzer',
	'admin:user:validated' => 'Das Benutzer-Konto wurde bestätigt',
	'admin:user:validate:error' => 'Das Benutzer-Konto konnte nicht bestätigt werden',
	
	//v3.0
	//Administration
	'my:files:version' => 'Meine Ossn Dateien Fassung',
	'cache:flush:error' => 'Der Cache konnte nicht geleert werden. Stelle sicher, dass er bei den Cache Einstellungen aktiviert ist',
	'cache:flushed' => 'Der Cache wurde erfolgreich geleert',
	'ossn:version' => 'OSSN Version', 
	'php:extension' => 'PHP Erweiterung',
	'php:version' => 'PHP Version',
	'php:function' => 'PHP Funktion',
	'admin:old:com' => "Die Datei ossn_com.xml deutet auf eine veraltete Version hin. Bitte aktualisiere die Komponente '%s'.",
	'admin:old:theme' => "Die Datei ossn_theme.xml deutet auf eine veraltete Version hin. Bitte aktualisiere das Thema '%s'.",
	'admin:button:disabled' => 'Deaktiviert',
	'admin:flush:cache' => 'Cache leeren',
	'admin:com:version' => 'Version',
	'admin:com:author' => 'Autor',
	'admin:com:author:url' => 'URL des Autors',
	'admin:com:license' => 'Lizenz',
	'admin:com:requirements' => 'Voraussetzungen',
	'admin:com:requirement' => 'Anforderung',
	'admin:com:fulfilled' => 'Erfüllt',
	'admin:com:used:by' => 'Benutzt von',
	'ossn:exception:make:sure' => 'Bist Du sicher?',
	'ossn:premium' => 'Premium Version',
	'datepicker:days' => "So, Mo, Di, Mi, Do, Fr, Sa",
	'datepicker:months' => "Jan., Feb., März, Apr., Mai, Juni, Juli, Aug., Sept., Okt., Nov., Dez.",
	'male:gendercolor' => '#01ADEF',
	'female:gendercolor' => '#ED008C',
	'ossn:admin:settings:off' => 'ausgeschaltet',
	'ossn:admin:settings:on' => 'eingeschaltet',
	'ossn:admin:settings:saved' => 'Die Einstellungen wurden gespeichert!',
	'ossn:admin:settings:save:error' => 'Die Einstellungen konnten nicht gespeichert werden! Bitte überprüfe die error_log Datei.',
	'php:upload_err_ok' => 'Es liegt kein Fehler vor, die Datei wurde erfolgreich hochgeladen',
	'php:upload_err_ini_size' => 'Die hochgeladene Datei überschreitet die Direktive UPLOAD_MAX_FILESIZE in PHP.INI',
	'php:upload_err_form_size' => 'Die hochgeladene Datei überschreitet die im HTML-Formular angegebene Anweisung MAX_FILE_SIZE',
	'php:upload_err_partial' => 'Die hochgeladene Datei wurde nur teilweise hochgeladen',
	'php:upload_err_no_file' => 'Es wurde keine Datei hochgeladen',
	'php:upload_err_no_tmp_dir' => 'Fehlender temporärer Ordner',
	'php:upload_err_cant_write' => 'Fehler beim Schreiben der Datei auf die Festplatte',
	'php:upload_err_extension' => 'Eine PHP-Erweiterung hat den Datei-Upload gestoppt',
	/*
       * List of ISO 639-1 language codes
       * http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
       */
    "aa" => "Afar",
    "ab" => "Abkhazian",
    "af" => "Afrikaans",
    "am" => "Amharic",
    "ar" => "Arabic",
    "as" => "Assamese",
    "ay" => "Aymara",
    "az" => "Azerbaijani",
    "ba" => "Bashkir",
    "be" => "Byelorussian",
    "bg" => "Bulgarian",
    "bh" => "Bihari",
    "bi" => "Bislama",
    "bn" => "Bengali; Bangla",
    "bo" => "Tibetan",
    "br" => "Breton",
    "ca" => "Catalan",
    "co" => "Corsican",
    "cs" => "Czech",
    "cy" => "Welsh",
    "da" => "Danish",
    "de" => "German",
    "dz" => "Bhutani",
    "el" => "Greek",
    "en" => "English",
    "eo" => "Esperanto",
    "es" => "Spanish",
    "et" => "Estonian",
    "eu" => "Basque",
    "fa" => "Persian",
    "fi" => "Finnish",
    "fj" => "Fiji",
    "fo" => "Faeroese",
    "fr" => "French",
    "fy" => "Frisian",
    "ga" => "Irish",
    "gd" => "Scots / Gaelic",
    "gl" => "Galician",
    "gn" => "Guarani",
    "gu" => "Gujarati",
    "he" => "Hebrew",
    "ha" => "Hausa",
    "hi" => "Hindi",
    "hr" => "Croatian",
    "hu" => "Hungarian",
    "hy" => "Armenian",
    "ia" => "Interlingua",
    "id" => "Indonesian",
    "ie" => "Interlingue",
    "ik" => "Inupiak",
    "is" => "Icelandic",
    "it" => "Italian",
    "iu" => "Inuktitut",
    "iw" => "Hebrew (obsolete)",
    "ja" => "Japanese",
    "ji" => "Yiddish (obsolete)",
    "jw" => "Javanese",
    "ka" => "Georgian",
    "kk" => "Kazakh",
    "kl" => "Greenlandic",
    "km" => "Cambodian",
    "kn" => "Kannada",
    "ko" => "Korean",
    "ks" => "Kashmiri",
    "ku" => "Kurdish",
    "ky" => "Kirghiz",
    "la" => "Latin",
    "ln" => "Lingala",
    "lo" => "Laothian",
    "lt" => "Lithuanian",
    "lv" => "Latvian/Lettish",
    "mg" => "Malagasy",
    "mi" => "Maori",
    "mk" => "Macedonian",
    "ml" => "Malayalam",
    "mn" => "Mongolian",
    "mo" => "Moldavian",
    "mr" => "Marathi",
    "ms" => "Malay",
    "mt" => "Maltese",
    "my" => "Burmese",
    "na" => "Nauru",
    "ne" => "Nepali",
    "nl" => "Dutch",
    "no" => "Norwegian",
    "oc" => "Occitan",
    "om" => "(Afan) Oromo",
    "or" => "Oriya",
    "pa" => "Punjabi",
    "pl" => "Polish",
    "ps" => "Pashto / Pushto",
    "pt" => "Portuguese",
    "qu" => "Quechua",
    "rm" => "Rhaeto-Romance",
    "rn" => "Kirundi",
    "ro" => "Romanian",
    "ru" => "Russian",
    "rw" => "Kinyarwanda",
    "sa" => "Sanskrit",
    "sd" => "Sindhi",
    "sg" => "Sangro",
    "sh" => "Serbo-Croatian",
    "si" => "Singhalese",
    "sk" => "Slovak",
    "sl" => "Slovenian",
    "sm" => "Samoan",
    "sn" => "Shona",
    "so" => "Somali",
    "sq" => "Albanian",
    "sr" => "Serbian",
    "ss" => "Siswati",
    "st" => "Sesotho",
    "su" => "Sundanese",
    "sv" => "Swedish",
    "sw" => "Swahili",
    "ta" => "Tamil",
    "te" => "Tegulu",
    "tg" => "Tajik",
    "th" => "Thai",
    "ti" => "Tigrinya",
    "tk" => "Turkmen",
    "tl" => "Tagalog",
    "tn" => "Setswana",
    "to" => "Tonga",
    "tr" => "Turkish",
    "ts" => "Tsonga",
    "tt" => "Tatar",
    "tw" => "Twi",
    "ug" => "Uigur",
    "uk" => "Ukrainian",
    "ur" => "Urdu",
    "uz" => "Uzbek",
    "vi" => "Vietnamese",
    "vo" => "Volapuk",
    "wo" => "Wolof",
    "xh" => "Xhosa",
    "yi" => "Yiddish",
    "yo" => "Yoruba",
    "za" => "Zuang",
    "zh" => "Chinese",
    "zu" => "Zulu"
);
ossn_register_languages('de', $de);
