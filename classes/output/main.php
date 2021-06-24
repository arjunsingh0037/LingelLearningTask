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
 * Class Containing Data for Lingel Learning Block.
 *
 * @package    block_lingellearning
 * @copyright  2021 Arjun Singh
 * @author     Arjun Singh <arjunsingh0037@gmail.com>
 */

namespace block_lingellearning\output;
defined('MOODLE_INTERNAL') || die();

use renderable;
use renderer_base;
use templatable;

require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->libdir . '/completionlib.php');

class main implements renderable, templatable {

    /**
     * Export data so it can be used in mustache template.
     *
     */
    public function export_for_template(renderer_base $output) {
        global $USER, $PAGE;
        return [
            'displaycourse' => $PAGE->course->id
        ];
    }
}
