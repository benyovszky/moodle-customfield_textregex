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
 * Strings for component 'customfield_textregex', language 'en'.
 *
 * @package   customfield_textregex
 * @category  string
 * @author    Bence Molnar <molbence@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright 2024 onwards Bence Molnar
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'Form input size';
$string['errorconfigdefault'] = 'The provided default value is not matching the regex.';
$string['errorconfigdisplaysize'] = 'The form input size must be between 1 and 200 characters.';
$string['errorconfiglinkplaceholder'] = 'The link must contain a placeholder $$.';
$string['errorconfiglinksyntax'] = 'The link must be a valid URL starting with either http:// or https://.';
$string['errorconfigregex'] = 'The provided regex is not a valid regex.';
$string['errorregex'] = 'Entered value does not match against regex: {$a}';
$string['islink'] = 'Link field';
$string['islink_help'] = 'To transform the text into a link, enter a URL containing $$ as a placeholder, where $$ will be replaced with the text. For example, to transform a Twitter ID to a link, enter https://twitter.com/$$.';
$string['linktarget'] = 'Link target';
$string['newwindow'] = 'New window';
$string['none'] = 'None';
$string['pluginname'] = 'Short text with regex validation';
$string['privacy:metadata'] = 'The Short text with validation  field type plugin doesn\'t store any personal data; it uses tables defined in core.';
$string['regex'] = 'Regular expression';
$string['regex_help'] = 'Perl style regular expression to test the field value against. The regex should align with the \'required\' setting, if it is not required, regex has to allow empty field as well. And also take a look at <a href="{$a}">Strictness setting</a>. Please also include the delimiters. E.g: \"/^TEST[0-9A-F]{3}\/\$_postfix/\".';
$string['sameframe'] = 'Same frame';
$string['samewindow'] = 'Same window';
$string['specificsettings'] = 'Short text with validation field settings';
