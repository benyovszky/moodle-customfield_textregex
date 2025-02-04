<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'customfield_textregex', language 'hu'.
 *
 * @package   customfield_textregex
 * @category  string
 * @author    Bence Molnar <molbence@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright 2024 onwards Bence Molnar
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'Beviteli mező hossza';
$string['errorconfigdefault'] = 'A megadott alapérték nem felel meg a reguláris kifejezésnek.';
$string['errorconfigdisplaysize'] = 'A beviteli mező hosszának 1 és 200 között kell lennie.';
$string['errorconfiglinkplaceholder'] = 'A hivatkozásnak $$ helyőrzőt kell tartalmaznia.';
$string['errorconfiglinksyntax'] = 'A hivatkozáshoz érvényes http:// vagy https:// kezdetű webcímet kell megadni.';
$string['errorconfigregex'] = 'A megadott reguláris kifejezés érvénytelen.';
$string['errorregex'] = 'A megadott érték nem felel meg a következő ellenőrzésnek: {$a}';
$string['islink'] = 'Hivatkozásmező';
$string['islink_help'] = 'A szöveg hivatkozássá alakításához adja meg a $$-t tartalmazó webcímet, ahol a szöveg az $$ helyére kerül. Pl. egy twitteres azonosító hivatkozássá alakításához adja meg a http://twitter.com/$$-t.';
$string['linktarget'] = 'Hivatkozás célpontja';
$string['newwindow'] = 'Új ablak';
$string['none'] = 'Nincs';
$string['pluginname'] = 'Ellenőrzött rövid szöveges mező';
$string['privacy:metadata'] = 'Az ellenőrzött rövid szöveges mező nem tárol semmilyen személyes adatot; az alaprendszer adattábláit használja.';
$string['regex'] = 'Reguláris kifejezés';
$string['regex_help'] = 'A beviteli mező ellenőrzésére szolgáló Perl típusu reguláris kifejezés. A kifejezés legyen összhangban a \'Kötelező\' beállítással, ha a mező nem kötelező, akkor a kifejezés is engedje meg az üres értéket. Érdemes egy pillantást vetni az üres mező ellenőrzés <a href="/admin/search.php?query=strictformsrequired">szigorúságát befolyásoló globális beállítsra</a>. Az elhatároló (delimeter) karakternek szerepelnie kell az elején és a végén. Pl: \"/^TEST[0-9A-F]{3}\/\$_utotag/\".';
$string['sameframe'] = 'Ugyanaz a keret';
$string['samewindow'] = 'Ugyanaz az ablak';
$string['specificsettings'] = 'Ellenőrzött rövid szöveges mező beállításai';
