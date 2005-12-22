<?php
/*
  $Id: advanced_search.php 153 2005-08-04 12:57:59Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
*/

  define('BREADCRUMB_SEARCH', 'Erweiterte Suche');
  define('BREADCRUMB_SEARCH_RESULTS', 'Suchergebnisse');

  define('HEADING_TITLE_SEARCH', 'Geben Sie Ihre Suchkriterien ein');
  define('HEADING_TITLE_SEARCH_RESULTS', 'Artikel, welche den Suchkriterien entsprechen');

  define('TEXT_SEARCH_CRITERIA', 'Geben Sie Ihre Stichworte ein');
  define('ENTRY_CATEGORIES', 'Kategorien:');
  define('ENTRY_INCLUDE_SUBCATEGORIES', 'Unterkategorien mit einbeziehen');
  define('ENTRY_MANUFACTURERS', 'Hersteller:');
  define('ENTRY_PRICE_FROM', 'Preis ab:');
  define('ENTRY_PRICE_TO', 'Preis bis:');
  define('ENTRY_DATE_FROM', 'hinzugef&uuml;gt von:');
  define('ENTRY_DATE_TO', 'hinzugef&uuml;gt bis:');

  define('TEXT_SEARCH_HELP_LINK', '<u>Hilfe zur erweiterten Suche</u> [?]');

  define('TEXT_ALL_CATEGORIES', 'Alle Kategorien');
  define('TEXT_ALL_MANUFACTURERS', 'Alle Hersteller');

  define('HEADING_SEARCH_HELP', 'Hilfe zur erweiterten Suche');
  define('TEXT_SEARCH_HELP', 'Die Suchfunktion erm&ouml;glicht Ihnen die Suche in den Produktnamen, Produktbeschreibungen, Herstellern und Artikelnummern.<br /><br />Sie haben die M&ouml;glichkeit logische Operatoren wie "AND" (Und) und "OR" (oder) zu verwenden.<br /><br />Als Beispiel k&ouml;nnten Sie also angeben: <u>Microsoft AND Maus</u>.<br /><br />Desweiteren k&ouml;nnen Sie Klammern verwenden um die Suche zu verschachteln, also z.B.:<br /><br /><u>Microsoft AND (Maus OR Tastatur OR "Visual Basic")</u>.<br /><br />Mit Anf&uuml;hrungszeichen k&ouml;nnen Sie mehrere Worte zu einem Suchbegriff zusammenfassen.');
  define('TEXT_CLOSE_WINDOW', '<u>Fenster schliessen</u> [x]');

  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Artikelnummer');
  define('TABLE_HEADING_PRODUCTS', 'Bezeichnung');
  define('TABLE_HEADING_MANUFACTURER', 'Hersteller');
  define('TABLE_HEADING_QUANTITY', 'Anzahl');
  define('TABLE_HEADING_PRICE', 'Einzelpreis');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'jetzt bestellen');

  define('TEXT_NO_PRODUCTS', 'Es wurden keine Artikel gefunden, die den Suchkriterien entsprechen.');

  define('ERROR_AT_LEAST_ONE_INPUT', 'Wenigstens ein Feld des Suchformulars muss ausgef�llt werden.');
  define('ERROR_INVALID_FROM_DATE', 'Unzul&auml;ssiges <b>von</b> Datum');
  define('ERROR_INVALID_TO_DATE', 'Unzul&auml;ssiges <b>bis jetzt</b> Datum');
  define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Das Datum <b>von</b> muss gr&ouml;sser oder gleich dem <b>bis jetzt</b> Datum sein');
  define('ERROR_PRICE_FROM_MUST_BE_NUM', '<b>Preis ab</b> muss eine Zahl sein');
  define('ERROR_PRICE_TO_MUST_BE_NUM', '<b>Preis bis</b> muss eine Zahl sein');
  define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '<b>Preis bis</b> muss gr&ouml;&szlig;er oder gleich <b>Preis ab</b> sein.');
  define('ERROR_INVALID_KEYWORDS', 'Suchbegriff unzul&aum&auml;ssig');
?>