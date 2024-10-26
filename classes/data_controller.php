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
 * Data controller for 'customfield_textregex'.
 *
 * @package   customfield_textregex
 * @author    Bence Molnar <molbence@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright 2024 onwards Bence Molnar
 */

namespace customfield_textregex;

use coding_exception;
use MoodleQuickForm;

/**
 * Class data
 *
 * @package   customfield_textregex
 * @author    Bence Molnar <molbence@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright 2024 onwards Bence Molnar
 */
class data_controller extends \core_customfield\data_controller {

    /**
     * Return the name of the field where the information is stored
     * @return string
     */
    public function datafield(): string {
        return 'charvalue';
    }

    /**
     * Add fields for editing a text field.
     *
     * @param MoodleQuickForm $mform
     * @throws coding_exception
     */
    public function instance_form_definition(MoodleQuickForm $mform): void {
        $field = $this->get_field();
        $type = 'text';
        $elementname = $this->get_form_element_name();
        $regex = $field->get_configdata_property('regex');
        $defaultvalue = $field->get_configdata_property('defaultvalue');
        $displaysize = (int) $field->get_configdata_property('displaysize');
        $mform->addElement($type, $elementname, $field->get_formatted_name(), 'size=' . $displaysize);
        $mform->setType($elementname, PARAM_RAW);
        if (!empty($defaultvalue)) {
            $mform->setDefault($elementname, $defaultvalue);
        }
        if ($field->get_configdata_property('required')) {
            $mform->addRule($elementname, null, 'required', null, 'client');
        }
        $mform->addRule($elementname, get_string('errorregex', 'customfield_textregex', $regex), 'regex', $regex, 'client');
    }

    /**
     * Validates data for this field.
     *
     * @param array $data
     * @param array $files
     * @return array
     * @throws coding_exception
     */
    public function instance_form_validation(array $data, array $files): array {

        $errors = parent::instance_form_validation($data, $files);
        $regex = $this->get_field()->get_configdata_property('regex');
        $elementname = $this->get_form_element_name();

        if (!preg_match($regex, $data[$elementname])) {
            $errors[$elementname] = get_string('errorregex', 'customfield_textregex', $regex);
        }
        return $errors;
    }

    /**
     * Returns the default value as it would be stored in the database (not in human-readable format).
     *
     * @return string
     */
    public function get_default_value(): string {
        return $this->get_field()->get_configdata_property('defaultvalue');
    }

    /**
     * Returns value in a human-readable format
     *
     * @return string|null value or null if empty
     */
    public function export_value(): null|string {
        $value = parent::export_value();
        $regex = $this->get_field()->get_configdata_property('regex');
        if (is_null($value) || !preg_match($regex, $value)) {
            return null;
        }

        return $value;
    }
}
