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
 * Privacy Subsystem implementation for 'customfield_textregex'.
 *
 * @package   customfield_textregex
 * @category  privacy
 * @author    Bence Molnar <molbence@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright 2024 onwards Bence Molnar
 */
namespace customfield_textregex\privacy;

use core_customfield\data_controller;
use core_customfield\privacy\customfield_provider;
use core_privacy\local\metadata\null_provider;
use core_privacy\local\request\writer;
use stdClass;

/**
 * Privacy Subsystem for customfield_textregex implementing null_provider.
 *
 * @author    Bence Molnar <molbence@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright 2024 onwards Bence Molnar
 */
class provider implements null_provider, customfield_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return string
     */
    public static function get_reason(): string {
        return 'privacy:metadata';
    }

    /**
     * Preprocesses data object that is going to be exported
     *
     * @param data_controller $data
     * @param stdClass $exportdata
     * @param array $subcontext
     */
    public static function export_customfield_data(data_controller $data, stdClass $exportdata, array $subcontext): void {
        $context = $data->get_context();
        // For text fields we want to apply format_string even to raw value to avoid CSS.
        $exportdata->{$data->datafield()} = $data->export_value();
        writer::with_context($context)->export_data($subcontext, $exportdata);
    }

    /**
     * Allows plugins to delete everything they store related to the data (usually files)
     *
     * @param string $dataidstest
     * @param array $params
     * @param array $contextids
     * @return void
     */
    public static function before_delete_data(string $dataidstest, array $params, array $contextids): void {
    }

    /**
     * Allows plugins to delete everything they store related to the field configuration (usually files)
     *
     * @param string $fieldidstest
     * @param array $params
     * @param array $contextids
     */
    public static function before_delete_fields(string $fieldidstest, array $params, array $contextids): void {
    }
}
