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
 * Custom icon system
 *
 * @package    theme_boosticonsbroken
 * @copyright
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_boosticonsbroken\util;

use core\output\icon_system as core_icon_system;
use core\output\icon_system_fontawesome;
use renderer_base;
use pix_icon;

defined('MOODLE_INTERNAL') || die();

/**
 * Class allowing different systems for mapping and rendering icons.
 *
 * @package    theme_catawesome
 * @copyright  2017 Willian Mano - http://catalyst-eu.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class icon_system extends icon_system_fontawesome {

    /**
     * @var array $map Cached map of moodle icon names to font awesome icon names.
     */
    private $map = [];

    /**
     * Get the icon mapping
     *
     * @return array
     */
    public function get_core_icon_map() {
        $fontawesome = core_icon_system::instance(core_icon_system::FONTAWESOME);
        return [
            'core:docs' => 'fa-star',
            'core:help' => 'fa-star',
            'core:req' => 'fa-star',
            'core:a/add_file' => 'fa-star',
            'core:a/create_folder' => 'fa-star',
            'core:a/download_all' => 'fa-star',
            'core:a/help' => 'fa-star',
            'core:a/logout' => 'fa-star',
            'core:a/refresh' => 'fa-star',
            'core:a/search' => 'fa-star',
            'core:a/setting' => 'fa-star',
            'core:a/view_icon_active' => 'fa-star',
            'core:a/view_list_active' => 'fa-star',
            'core:a/view_tree_active' => 'fa-star',
            'core:b/bookmark-new' => 'fa-star',
            'core:b/document-edit' => 'fa-star',
            'core:b/document-new' => 'fa-star',
            'core:b/document-properties' => 'fa-star',
            'core:b/edit-copy' => 'fa-star',
            'core:b/edit-delete' => 'fa-star',
            'core:e/abbr' => 'fa-star',
            'core:e/absolute' => 'fa-star',
            'core:e/accessibility_checker' => 'fa-star',
            'core:e/acronym' => 'fa-star',
            'core:e/advance_hr' => 'fa-star',
            'core:e/align_center' => 'fa-star',
            'core:e/align_left' => 'fa-star',
            'core:e/align_right' => 'fa-star',
            'core:e/anchor' => 'fa-star',
            'core:e/backward' => 'fa-star',
            'core:e/bold' => 'fa-star',
            'core:e/bullet_list' => 'fa-star',
            'core:e/cancel' => 'fa-star',
            'core:e/cell_props' => 'fa-star',
            'core:e/cite' => 'fa-star',
            'core:e/cleanup_messy_code' => 'fa-star',
            'core:e/clear_formatting' => 'fa-star',
            'core:e/copy' => 'fa-star',
            'core:e/cut' => 'fa-star',
            'core:e/decrease_indent' => 'fa-star',
            'core:e/delete_col' => 'fa-star',
            'core:e/delete_row' => 'fa-star',
            'core:e/delete' => 'fa-star',
            'core:e/delete_table' => 'fa-star',
            'core:e/document_properties' => 'fa-star',
            'core:e/emoticons' => 'fa-star',
            'core:e/find_replace' => 'fa-star',
            'core:e/forward' => 'fa-star',
            'core:e/fullpage' => 'fa-star',
            'core:e/fullscreen' => 'fa-star',
            'core:e/help' => 'fa-star',
            'core:e/increase_indent' => 'fa-star',
            'core:e/insert_col_after' => 'fa-star',
            'core:e/insert_col_before' => 'fa-star',
            'core:e/insert_date' => 'fa-star',
            'core:e/insert_edit_image' => 'fa-star',
            'core:e/insert_edit_link' => 'fa-star',
            'core:e/insert_edit_video' => 'fa-star',
            'core:e/insert_file' => 'fa-star',
            'core:e/insert_horizontal_ruler' => 'fa-star',
            'core:e/insert_nonbreaking_space' => 'fa-star',
            'core:e/insert_page_break' => 'fa-star',
            'core:e/insert_row_after' => 'fa-star',
            'core:e/insert_row_before' => 'fa-star',
            'core:e/insert' => 'fa-star',
            'core:e/insert_time' => 'fa-star',
            'core:e/italic' => 'fa-star',
            'core:e/justify' => 'fa-star',
            'core:e/layers_over' => 'fa-star',
            'core:e/layers' => 'fa-star',
            'core:e/layers_under' => 'fa-star',
            'core:e/left_to_right' => 'fa-star',
            'core:e/manage_files' => 'fa-star',
            'core:e/math' => 'fa-star',
            'core:e/merge_cells' => 'fa-star',
            'core:e/new_document' => 'fa-star',
            'core:e/numbered_list' => 'fa-star',
            'core:e/page_break' => 'fa-star',
            'core:e/paste' => 'fa-star',
            'core:e/paste_text' => 'fa-star',
            'core:e/paste_word' => 'fa-star',
            'core:e/prevent_autolink' => 'fa-star',
            'core:e/preview' => 'fa-star',
            'core:e/print' => 'fa-star',
            'core:e/question' => 'fa-star',
            'core:e/redo' => 'fa-star',
            'core:e/remove_link' => 'fa-star',
            'core:e/remove_page_break' => 'fa-star',
            'core:e/resize' => 'fa-star',
            'core:e/restore_draft' => 'fa-star',
            'core:e/restore_last_draft' => 'fa-star',
            'core:e/right_to_left' => 'fa-star',
            'core:e/row_props' => 'fa-star',
            'core:e/save' => 'fa-star',
            'core:e/screenreader_helper' => 'fa-star',
            'core:e/search' => 'fa-star',
            'core:e/select_all' => 'fa-star',
            'core:e/show_invisible_characters' => 'fa-star',
            'core:e/source_code' => 'fa-star',
            'core:e/special_character' => 'fa-star',
            'core:e/spellcheck' => 'fa-star',
            'core:e/split_cells' => 'fa-star',
            'core:e/strikethrough' => 'fa-star',
            'core:e/styleprops' => 'fa-star',
            'core:e/subscript' => 'fa-star',
            'core:e/superscript' => 'fa-star',
            'core:e/table_props' => 'fa-star',
            'core:e/table' => 'fa-star',
            'core:e/template' => 'fa-star',
            'core:e/text_color_picker' => 'fa-star',
            'core:e/text_color' => 'fa-star',
            'core:e/text_highlight_picker' => 'fa-star',
            'core:e/text_highlight' => 'fa-star',
            'core:e/tick' => 'fa-star',
            'core:e/toggle_blockquote' => 'fa-star',
            'core:e/underline' => 'fa-star',
            'core:e/undo' => 'fa-star',
            'core:e/visual_aid' => 'fa-star',
            'core:e/visual_blocks' => 'fa-star',
            'theme:fp/add_file' => 'fa-star',
            'theme:fp/alias' => 'fa-star',
            'theme:fp/alias_sm' => 'fa-star',
            'theme:fp/check' => 'fa-star',
            'theme:fp/create_folder' => 'fa-star',
            'theme:fp/cross' => 'fa-star',
            'theme:fp/download_all' => 'fa-star',
            'theme:fp/help' => 'fa-star',
            'theme:fp/link' => 'fa-star',
            'theme:fp/link_sm' => 'fa-star',
            'theme:fp/logout' => 'fa-star',
            'theme:fp/path_folder' => 'fa-star',
            'theme:fp/path_folder_rtl' => 'fa-star',
            'theme:fp/refresh' => 'fa-star',
            'theme:fp/search' => 'fa-star',
            'theme:fp/setting' => 'fa-star',
            'theme:fp/view_icon_active' => 'fa-star',
            'theme:fp/view_list_active' => 'fa-star',
            'theme:fp/view_tree_active' => 'fa-star',
            'core:i/addblock' => 'fa-star',
            'core:i/assignroles' => 'fa-star',
            'core:i/backup' => 'fa-star',
            'core:i/badge' => 'fa-star',
            'core:i/calc' => 'fa-star',
            'core:i/calendar' => 'fa-star',
            'core:i/calendareventdescription' => 'fa-star',
            'core:i/calendareventtime' => 'fa-star',
            'core:i/caution' => 'fa-star',
            'core:i/checked' => 'fa-star',
            'core:i/checkpermissions' => 'fa-star',
            'core:i/cohort' => 'fa-star',
            'core:i/competencies' => 'fa-star',
            'core:i/completion_self' => 'fa-star',
            'core:i/dashboard' => 'fa-star',
            'core:i/lock' => 'fa-star',
            'core:i/categoryevent' => 'fa-star',
            'core:i/contentbank' => 'fa-star',
            'core:i/course' => 'fa-star',
            'core:i/courseevent' => 'fa-star',
            'core:i/db' => 'fa-star',
            'core:i/delete' => 'fa-star',
            'core:i/down' => 'fa-star',
            'core:i/dragdrop' => 'fa-star',
            'core:i/duration' => 'fa-star',
            'core:i/edit' => 'fa-star',
            'core:i/email' => 'fa-star',
            'core:i/enrolmentsuspended' => 'fa-star',
            'core:i/enrolusers' => 'fa-star',
            'core:i/expired' => 'fa-star',
            'core:i/export' => 'fa-star',
            'core:i/files' => 'fa-star',
            'core:i/filter' => 'fa-star',
            'core:i/flagged' => 'fa-star',
            'core:i/folder' => 'fa-star',
            'core:i/grade_correct' => 'fa-star',
            'core:i/grade_incorrect' => 'fa-star',
            'core:i/grade_partiallycorrect' => 'fa-star',
            'core:i/grades' => 'fa-star',
            'core:i/groupevent' => 'fa-star',
            'core:i/groupn' => 'fa-star',
            'core:i/group' => 'fa-star',
            'core:i/groups' => 'fa-star',
            'core:i/groupv' => 'fa-star',
            'core:i/home' => 'fa-star',
            'core:i/hide' => 'fa-star',
            'core:i/hierarchylock' => 'fa-star',
            'core:i/import' => 'fa-star',
            'core:i/info' => 'fa-star',
            'core:i/invalid' => 'fa-star',
            'core:i/item' => 'fa-star',
            'core:i/loading' => 'fa-star',
            'core:i/loading_small' => 'fa-star',
            'core:i/lock' => 'fa-star',
            'core:i/log' => 'fa-star',
            'core:i/mahara_host' => 'fa-star',
            'core:i/manual_item' => 'fa-star',
            'core:i/marked' => 'fa-star',
            'core:i/marker' => 'fa-star',
            'core:i/mean' => 'fa-star',
            'core:i/menu' => 'fa-star',
            'core:i/menubars' => 'fa-star',
            'core:i/mnethost' => 'fa-star',
            'core:i/moodle_host' => 'fa-star',
            'core:i/move_2d' => 'fa-star',
            'core:i/navigationitem' => 'fa-star',
            'core:i/ne_red_mark' => 'fa-star',
            'core:i/new' => 'fa-star',
            'core:i/news' => 'fa-star',
            'core:i/nosubcat' => 'fa-star',
            'core:i/notifications' => 'fa-star',
            'core:i/open' => 'fa-star',
            'core:i/outcomes' => 'fa-star',
            'core:i/payment' => 'fa-star',
            'core:i/permissionlock' => 'fa-star',
            'core:i/permissions' => 'fa-star',
            'core:i/persona_sign_in_black' => 'fa-star',
            'core:i/portfolio' => 'fa-star',
            'core:i/preview' => 'fa-star',
            'core:i/privatefiles' => 'fa-star',
            'core:i/progressbar' => 'fa-star',
            'core:i/publish' => 'fa-star',
            'core:i/questions' => 'fa-star',
            'core:i/reload' => 'fa-star',
            'core:i/report' => 'fa-star',
            'core:i/repository' => 'fa-star',
            'core:i/restore' => 'fa-star',
            'core:i/return' => 'fa-star',
            'core:i/risk_config' => 'fa-star',
            'core:i/risk_managetrust' => 'fa-star',
            'core:i/risk_personal' => 'fa-star',
            'core:i/risk_spam' => 'fa-star',
            'core:i/risk_xss' => 'fa-star',
            'core:i/role' => 'fa-star',
            'core:i/rss' => 'fa-star',
            'core:i/rsssitelogo' => 'fa-star',
            'core:i/scales' => 'fa-star',
            'core:i/scheduled' => 'fa-star',
            'core:i/search' => 'fa-star',
            'core:i/section' => 'fa-star',
            'core:i/settings' => 'fa-star',
            'core:i/show' => 'fa-star',
            'core:i/siteevent' => 'fa-star',
            'core:i/star-rating' => 'fa-star',
            'core:i/stats' => 'fa-star',
            'core:i/switch' => 'fa-star',
            'core:i/switchrole' => 'fa-star',
            'core:i/twoway' => 'fa-star',
            'core:i/unchecked' => 'fa-star',
            'core:i/unflagged' => 'fa-star',
            'core:i/unlock' => 'fa-star',
            'core:i/up' => 'fa-star',
            'core:i/userevent' => 'fa-star',
            'core:i/user' => 'fa-star',
            'core:i/users' => 'fa-star',
            'core:i/valid' => 'fa-star',
            'core:i/warning' => 'fa-star',
            'core:i/withsubcat' => 'fa-star',
            'core:m/USD' => 'fa-star',
            'core:t/addcontact' => 'fa-star',
            'core:t/add' => 'fa-star',
            'core:t/approve' => 'fa-star',
            'core:t/assignroles' => 'fa-star',
            'core:t/award' => 'fa-star',
            'core:t/backpack' => 'fa-star',
            'core:t/backup' => 'fa-star',
            'core:t/block' => 'fa-star',
            'core:t/block_to_dock_rtl' => 'fa-star',
            'core:t/block_to_dock' => 'fa-star',
            'core:t/calc_off' => 'fa-star',
            'core:t/calc' => 'fa-star',
            'core:t/check' => 'fa-star',
            'core:t/cohort' => 'fa-star',
            'core:t/collapsed_empty_rtl' => 'fa-star',
            'core:t/collapsed_empty' => 'fa-star',
            'core:t/collapsed_rtl' => 'fa-star',
            'core:t/collapsed' => 'fa-star',
            'core:t/contextmenu' => 'fa-star',
            'core:t/copy' => 'fa-star',
            'core:t/delete' => 'fa-star',
            'core:t/dockclose' => 'fa-star',
            'core:t/dock_to_block_rtl' => 'fa-star',
            'core:t/dock_to_block' => 'fa-star',
            'core:t/download' => 'fa-star',
            'core:t/down' => 'fa-star',
            'core:t/dropdown' => 'fa-star',
            'core:t/editinline' => 'fa-star',
            'core:t/edit_menu' => 'fa-star',
            'core:t/editstring' => 'fa-star',
            'core:t/edit' => 'fa-star',
            'core:t/emailno' => 'fa-star',
            'core:t/email' => 'fa-star',
            'core:t/enrolusers' => 'fa-star',
            'core:t/expanded' => 'fa-star',
            'core:t/go' => 'fa-star',
            'core:t/grades' => 'fa-star',
            'core:t/groupn' => 'fa-star',
            'core:t/groups' => 'fa-star',
            'core:t/groupv' => 'fa-star',
            'core:t/hide' => 'fa-star',
            'core:t/left' => 'fa-star',
            'core:t/less' => 'fa-star',
            'core:t/locked' => 'fa-star',
            'core:t/lock' => 'fa-star',
            'core:t/locktime' => 'fa-star',
            'core:t/markasread' => 'fa-star',
            'core:t/messages' => 'fa-star',
            'core:t/message' => 'fa-star',
            'core:t/more' => 'fa-star',
            'core:t/move' => 'fa-star',
            'core:t/passwordunmask-edit' => 'fa-star',
            'core:t/passwordunmask-reveal' => 'fa-star',
            'core:t/portfolioadd' => 'fa-star',
            'core:t/preferences' => 'fa-star',
            'core:t/preview' => 'fa-star',
            'core:t/print' => 'fa-star',
            'core:t/removecontact' => 'fa-star',
            'core:t/reset' => 'fa-star',
            'core:t/restore' => 'fa-star',
            'core:t/right' => 'fa-star',
            'core:t/show' => 'fa-star',
            'core:t/sort_asc' => 'fa-star',
            'core:t/sort_desc' => 'fa-star',
            'core:t/sort' => 'fa-star',
            'core:t/stop' => 'fa-star',
            'core:t/switch_minus' => 'fa-star',
            'core:t/switch_plus' => 'fa-star',
            'core:t/switch_whole' => 'fa-star',
            'core:t/unblock' => 'fa-star',
            'core:t/unlocked' => 'fa-star',
            'core:t/unlock' => 'fa-star',
            'core:t/up' => 'fa-star',
            'core:t/user' => 'fa-star',
            'core:t/viewdetails' => 'fa-star',
        ] + parent::get_core_icon_map(); // Backfill missing definitions from Font Awesome.
    }

    /**
     * Overridable function to get a mapping of all icons.
     * Default is to do no mapping.
     *
     * @return array
     */
    public function get_icon_name_map() {
        if ($this->map === []) {
            $cache = \cache::make('core', 'fontawesomeiconmapping');

            $this->map = $cache->get('mapping');

            if (empty($this->map)) {
                $this->map = $this->get_core_icon_map();
                $callback = 'get_fontawesome_icon_map';

                if ($pluginsfunction = get_plugins_with_function($callback)) {
                    foreach ($pluginsfunction as $plugintype => $plugins) {
                        foreach ($plugins as $pluginfunction) {
                            $pluginmap = $pluginfunction();
                            $this->map += $pluginmap;
                        }
                    }
                }
                $cache->set('mapping', $this->map);
            }

        }
        return $this->map;
    }

    /**
     * Get the AMD icon system name.
     *
     * @return string
     */
    public function get_amd_name() {
        return 'core/icon_system_fontawesome';
    }

    /**
     * Renders the pix icon using the icon system
     *
     * @param renderer_base $output
     * @param pix_icon $icon
     * @return mixed
     */
    public function render_pix_icon(renderer_base $output, pix_icon $icon) {
        $subtype = 'pix_icon_fontawesome';
        $subpix = new $subtype($icon);

        $data = $subpix->export_for_template($output);

        if (!$subpix->is_mapped()) {
            $data['unmappedIcon'] = $icon->export_for_template($output);
        }
        return $output->render_from_template('core/pix_icon_fontawesome', $data);
    }
}
