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
 * Theme almondb footer select.
 *
 * @package   theme_almondb
 * @copyright 2022 ThemesAlmond  - http://themesalmond.com
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Footer select
 *
 * @return url
 */
function theme_almondb_footer_select() {
    global $OUTPUT;

    $theme = theme_config::load('almondb');

    if ($theme->settings->footerselect == "1") {
        $templatecontext['footerselect1'] = $theme->settings->footerselect;
    } else if (($theme->settings->footerselect == "2")) {
        $templatecontext['footerselect2'] = $theme->settings->footerselect;
    } else {
        $templatecontext['footerselect3'] = $theme->settings->footerselect;
    }
    return $templatecontext;
}
