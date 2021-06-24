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
 * Service Functions.
 *
 * @package    block_lingellearning
 * @copyright  2021 Arjun Singh
 * @author     Arjun Singh <arjunsingh0037@gmail.com>
 */

defined('MOODLE_INTERNAL') || die();

$functions = array(

    'block_lingellearning_get_course_modules' => array(
        'classpath' => 'block/lingellearning/classes/external.php',
        'classname'   => 'block_lingellearning_external',
        'methodname'  => 'get_course_modules',
        'description' => 'Get course modules details.',
        'type'        => 'read',
        'ajax'        => true,
    ),
);

