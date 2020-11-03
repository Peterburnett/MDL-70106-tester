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
            'core:docs' => 'fa-folder',
            'core:help' => 'fa-folder',
            'core:req' => 'fa-folder',
            'core:a/add_file' => 'fa-folder',
            'core:a/create_folder' => 'fa-folder',
            'core:a/download_all' => 'fa-folder',
            'core:a/help' => 'fa-folder',
            'core:a/logout' => 'fa-folder',
            'core:a/refresh' => 'fa-folder',
            'core:a/search' => 'fa-folder',
            'core:a/setting' => 'fa-folder',
            'core:a/view_icon_active' => 'fa-folder',
            'core:a/view_list_active' => 'fa-folder',
            'core:a/view_tree_active' => 'fa-folder',
            'core:b/bookmark-new' => 'fa-folder',
            'core:b/document-edit' => 'fa-folder',
            'core:b/document-new' => 'fa-folder',
            'core:b/document-properties' => 'fa-folder',
            'core:b/edit-copy' => 'fa-folder',
            'core:b/edit-delete' => 'fa-folder',
            'core:e/abbr' => 'fa-folder',
            'core:e/absolute' => 'fa-folder',
            'core:e/accessibility_checker' => 'fa-folder',
            'core:e/acronym' => 'fa-folder',
            'core:e/advance_hr' => 'fa-folder',
            'core:e/align_center' => 'fa-folder',
            'core:e/align_left' => 'fa-folder',
            'core:e/align_right' => 'fa-folder',
            'core:e/anchor' => 'fa-folder',
            'core:e/backward' => 'fa-folder',
            'core:e/bold' => 'fa-folder',
            'core:e/bullet_list' => 'fa-folder',
            'core:e/cancel' => 'fa-folder',
            'core:e/cell_props' => 'fa-folder',
            'core:e/cite' => 'fa-folder',
            'core:e/cleanup_messy_code' => 'fa-folder',
            'core:e/clear_formatting' => 'fa-folder',
            'core:e/copy' => 'fa-folder',
            'core:e/cut' => 'fa-folder',
            'core:e/decrease_indent' => 'fa-folder',
            'core:e/delete_col' => 'fa-folder',
            'core:e/delete_row' => 'fa-folder',
            'core:e/delete' => 'fa-folder',
            'core:e/delete_table' => 'fa-folder',
            'core:e/document_properties' => 'fa-folder',
            'core:e/emoticons' => 'fa-folder',
            'core:e/find_replace' => 'fa-folder',
            'core:e/forward' => 'fa-folder',
            'core:e/fullpage' => 'fa-folder',
            'core:e/fullscreen' => 'fa-folder',
            'core:e/help' => 'fa-folder',
            'core:e/increase_indent' => 'fa-folder',
            'core:e/insert_col_after' => 'fa-folder',
            'core:e/insert_col_before' => 'fa-folder',
            'core:e/insert_date' => 'fa-folder',
            'core:e/insert_edit_image' => 'fa-folder',
            'core:e/insert_edit_link' => 'fa-folder',
            'core:e/insert_edit_video' => 'fa-folder',
            'core:e/insert_file' => 'fa-folder',
            'core:e/insert_horizontal_ruler' => 'fa-folder',
            'core:e/insert_nonbreaking_space' => 'fa-folder',
            'core:e/insert_page_break' => 'fa-folder',
            'core:e/insert_row_after' => 'fa-folder',
            'core:e/insert_row_before' => 'fa-folder',
            'core:e/insert' => 'fa-folder',
            'core:e/insert_time' => 'fa-folder',
            'core:e/italic' => 'fa-folder',
            'core:e/justify' => 'fa-folder',
            'core:e/layers_over' => 'fa-folder',
            'core:e/layers' => 'fa-folder',
            'core:e/layers_under' => 'fa-folder',
            'core:e/left_to_right' => 'fa-folder',
            'core:e/manage_files' => 'fa-folder',
            'core:e/math' => 'fa-folder',
            'core:e/merge_cells' => 'fa-folder',
            'core:e/new_document' => 'fa-folder',
            'core:e/numbered_list' => 'fa-folder',
            'core:e/page_break' => 'fa-folder',
            'core:e/paste' => 'fa-folder',
            'core:e/paste_text' => 'fa-folder',
            'core:e/paste_word' => 'fa-folder',
            'core:e/prevent_autolink' => 'fa-folder',
            'core:e/preview' => 'fa-folder',
            'core:e/print' => 'fa-folder',
            'core:e/question' => 'fa-folder',
            'core:e/redo' => 'fa-folder',
            'core:e/remove_link' => 'fa-folder',
            'core:e/remove_page_break' => 'fa-folder',
            'core:e/resize' => 'fa-folder',
            'core:e/restore_draft' => 'fa-folder',
            'core:e/restore_last_draft' => 'fa-folder',
            'core:e/right_to_left' => 'fa-folder',
            'core:e/row_props' => 'fa-folder',
            'core:e/save' => 'fa-folder',
            'core:e/screenreader_helper' => 'fa-folder',
            'core:e/search' => 'fa-folder',
            'core:e/select_all' => 'fa-folder',
            'core:e/show_invisible_characters' => 'fa-folder',
            'core:e/source_code' => 'fa-folder',
            'core:e/special_character' => 'fa-folder',
            'core:e/spellcheck' => 'fa-folder',
            'core:e/split_cells' => 'fa-folder',
            'core:e/strikethrough' => 'fa-folder',
            'core:e/styleprops' => 'fa-folder',
            'core:e/subscript' => 'fa-folder',
            'core:e/superscript' => 'fa-folder',
            'core:e/table_props' => 'fa-folder',
            'core:e/table' => 'fa-folder',
            'core:e/template' => 'fa-folder',
            'core:e/text_color_picker' => 'fa-folder',
            'core:e/text_color' => 'fa-folder',
            'core:e/text_highlight_picker' => 'fa-folder',
            'core:e/text_highlight' => 'fa-folder',
            'core:e/tick' => 'fa-folder',
            'core:e/toggle_blockquote' => 'fa-folder',
            'core:e/underline' => 'fa-folder',
            'core:e/undo' => 'fa-folder',
            'core:e/visual_aid' => 'fa-folder',
            'core:e/visual_blocks' => 'fa-folder',
            'theme:fp/add_file' => 'fa-folder',
            'theme:fp/alias' => 'fa-folder',
            'theme:fp/alias_sm' => 'fa-folder',
            'theme:fp/check' => 'fa-folder',
            'theme:fp/create_folder' => 'fa-folder',
            'theme:fp/cross' => 'fa-folder',
            'theme:fp/download_all' => 'fa-folder',
            'theme:fp/help' => 'fa-folder',
            'theme:fp/link' => 'fa-folder',
            'theme:fp/link_sm' => 'fa-folder',
            'theme:fp/logout' => 'fa-folder',
            'theme:fp/path_folder' => 'fa-folder',
            'theme:fp/path_folder_rtl' => 'fa-folder',
            'theme:fp/refresh' => 'fa-folder',
            'theme:fp/search' => 'fa-folder',
            'theme:fp/setting' => 'fa-folder',
            'theme:fp/view_icon_active' => 'fa-folder',
            'theme:fp/view_list_active' => 'fa-folder',
            'theme:fp/view_tree_active' => 'fa-folder',
            'core:i/addblock' => 'fa-folder',
            'core:i/assignroles' => 'fa-folder',
            'core:i/backup' => 'fa-folder',
            'core:i/badge' => 'fa-folder',
            'core:i/calc' => 'fa-folder',
            'core:i/calendar' => 'fa-folder',
            'core:i/calendareventdescription' => 'fa-folder',
            'core:i/calendareventtime' => 'fa-folder',
            'core:i/caution' => 'fa-folder',
            'core:i/checked' => 'fa-folder',
            'core:i/checkpermissions' => 'fa-folder',
            'core:i/cohort' => 'fa-folder',
            'core:i/competencies' => 'fa-folder',
            'core:i/completion_self' => 'fa-folder',
            'core:i/dashboard' => 'fa-folder',
            'core:i/lock' => 'fa-folder',
            'core:i/categoryevent' => 'fa-folder',
            'core:i/contentbank' => 'fa-folder',
            'core:i/course' => 'fa-folder',
            'core:i/courseevent' => 'fa-folder',
            'core:i/db' => 'fa-folder',
            'core:i/delete' => 'fa-folder',
            'core:i/down' => 'fa-folder',
            'core:i/dragdrop' => 'fa-folder',
            'core:i/duration' => 'fa-folder',
            'core:i/edit' => 'fa-folder',
            'core:i/email' => 'fa-folder',
            'core:i/enrolmentsuspended' => 'fa-folder',
            'core:i/enrolusers' => 'fa-folder',
            'core:i/expired' => 'fa-folder',
            'core:i/export' => 'fa-folder',
            'core:i/files' => 'fa-folder',
            'core:i/filter' => 'fa-folder',
            'core:i/flagged' => 'fa-folder',
            'core:i/folder' => 'fa-folder',
            'core:i/grade_correct' => 'fa-folder',
            'core:i/grade_incorrect' => 'fa-folder',
            'core:i/grade_partiallycorrect' => 'fa-folder',
            'core:i/grades' => 'fa-folder',
            'core:i/groupevent' => 'fa-folder',
            'core:i/groupn' => 'fa-folder',
            'core:i/group' => 'fa-folder',
            'core:i/groups' => 'fa-folder',
            'core:i/groupv' => 'fa-folder',
            'core:i/home' => 'fa-folder',
            'core:i/hide' => 'fa-folder',
            'core:i/hierarchylock' => 'fa-folder',
            'core:i/import' => 'fa-folder',
            'core:i/info' => 'fa-folder',
            'core:i/invalid' => 'fa-folder',
            'core:i/item' => 'fa-folder',
            'core:i/loading' => 'fa-folder',
            'core:i/loading_small' => 'fa-folder',
            'core:i/lock' => 'fa-folder',
            'core:i/log' => 'fa-folder',
            'core:i/mahara_host' => 'fa-folder',
            'core:i/manual_item' => 'fa-folder',
            'core:i/marked' => 'fa-folder',
            'core:i/marker' => 'fa-folder',
            'core:i/mean' => 'fa-folder',
            'core:i/menu' => 'fa-folder',
            'core:i/menubars' => 'fa-folder',
            'core:i/mnethost' => 'fa-folder',
            'core:i/moodle_host' => 'fa-folder',
            'core:i/move_2d' => 'fa-folder',
            'core:i/navigationitem' => 'fa-folder',
            'core:i/ne_red_mark' => 'fa-folder',
            'core:i/new' => 'fa-folder',
            'core:i/news' => 'fa-folder',
            'core:i/nosubcat' => 'fa-folder',
            'core:i/notifications' => 'fa-folder',
            'core:i/open' => 'fa-folder',
            'core:i/outcomes' => 'fa-folder',
            'core:i/payment' => 'fa-folder',
            'core:i/permissionlock' => 'fa-folder',
            'core:i/permissions' => 'fa-folder',
            'core:i/persona_sign_in_black' => 'fa-folder',
            'core:i/portfolio' => 'fa-folder',
            'core:i/preview' => 'fa-folder',
            'core:i/privatefiles' => 'fa-folder',
            'core:i/progressbar' => 'fa-folder',
            'core:i/publish' => 'fa-folder',
            'core:i/questions' => 'fa-folder',
            'core:i/reload' => 'fa-folder',
            'core:i/report' => 'fa-folder',
            'core:i/repository' => 'fa-folder',
            'core:i/restore' => 'fa-folder',
            'core:i/return' => 'fa-folder',
            'core:i/risk_config' => 'fa-folder',
            'core:i/risk_managetrust' => 'fa-folder',
            'core:i/risk_personal' => 'fa-folder',
            'core:i/risk_spam' => 'fa-folder',
            'core:i/risk_xss' => 'fa-folder',
            'core:i/role' => 'fa-folder',
            'core:i/rss' => 'fa-folder',
            'core:i/rsssitelogo' => 'fa-folder',
            'core:i/scales' => 'fa-folder',
            'core:i/scheduled' => 'fa-folder',
            'core:i/search' => 'fa-folder',
            'core:i/section' => 'fa-folder',
            'core:i/settings' => 'fa-folder',
            'core:i/show' => 'fa-folder',
            'core:i/siteevent' => 'fa-folder',
            'core:i/star-rating' => 'fa-folder',
            'core:i/stats' => 'fa-folder',
            'core:i/switch' => 'fa-folder',
            'core:i/switchrole' => 'fa-folder',
            'core:i/twoway' => 'fa-folder',
            'core:i/unchecked' => 'fa-folder',
            'core:i/unflagged' => 'fa-folder',
            'core:i/unlock' => 'fa-folder',
            'core:i/up' => 'fa-folder',
            'core:i/userevent' => 'fa-folder',
            'core:i/user' => 'fa-folder',
            'core:i/users' => 'fa-folder',
            'core:i/valid' => 'fa-folder',
            'core:i/warning' => 'fa-folder',
            'core:i/withsubcat' => 'fa-folder',
            'core:m/USD' => 'fa-folder',
            'core:t/addcontact' => 'fa-folder',
            'core:t/add' => 'fa-folder',
            'core:t/approve' => 'fa-folder',
            'core:t/assignroles' => 'fa-folder',
            'core:t/award' => 'fa-folder',
            'core:t/backpack' => 'fa-folder',
            'core:t/backup' => 'fa-folder',
            'core:t/block' => 'fa-folder',
            'core:t/block_to_dock_rtl' => 'fa-folder',
            'core:t/block_to_dock' => 'fa-folder',
            'core:t/calc_off' => 'fa-folder',
            'core:t/calc' => 'fa-folder',
            'core:t/check' => 'fa-folder',
            'core:t/cohort' => 'fa-folder',
            'core:t/collapsed_empty_rtl' => 'fa-folder',
            'core:t/collapsed_empty' => 'fa-folder',
            'core:t/collapsed_rtl' => 'fa-folder',
            'core:t/collapsed' => 'fa-folder',
            'core:t/contextmenu' => 'fa-folder',
            'core:t/copy' => 'fa-folder',
            'core:t/delete' => 'fa-folder',
            'core:t/dockclose' => 'fa-folder',
            'core:t/dock_to_block_rtl' => 'fa-folder',
            'core:t/dock_to_block' => 'fa-folder',
            'core:t/download' => 'fa-folder',
            'core:t/down' => 'fa-folder',
            'core:t/dropdown' => 'fa-folder',
            'core:t/editinline' => 'fa-folder',
            'core:t/edit_menu' => 'fa-folder',
            'core:t/editstring' => 'fa-folder',
            'core:t/edit' => 'fa-folder',
            'core:t/emailno' => 'fa-folder',
            'core:t/email' => 'fa-folder',
            'core:t/enrolusers' => 'fa-folder',
            'core:t/expanded' => 'fa-folder',
            'core:t/go' => 'fa-folder',
            'core:t/grades' => 'fa-folder',
            'core:t/groupn' => 'fa-folder',
            'core:t/groups' => 'fa-folder',
            'core:t/groupv' => 'fa-folder',
            'core:t/hide' => 'fa-folder',
            'core:t/left' => 'fa-folder',
            'core:t/less' => 'fa-folder',
            'core:t/locked' => 'fa-folder',
            'core:t/lock' => 'fa-folder',
            'core:t/locktime' => 'fa-folder',
            'core:t/markasread' => 'fa-folder',
            'core:t/messages' => 'fa-folder',
            'core:t/message' => 'fa-folder',
            'core:t/more' => 'fa-folder',
            'core:t/move' => 'fa-folder',
            'core:t/passwordunmask-edit' => 'fa-folder',
            'core:t/passwordunmask-reveal' => 'fa-folder',
            'core:t/portfolioadd' => 'fa-folder',
            'core:t/preferences' => 'fa-folder',
            'core:t/preview' => 'fa-folder',
            'core:t/print' => 'fa-folder',
            'core:t/removecontact' => 'fa-folder',
            'core:t/reset' => 'fa-folder',
            'core:t/restore' => 'fa-folder',
            'core:t/right' => 'fa-folder',
            'core:t/show' => 'fa-folder',
            'core:t/sort_asc' => 'fa-folder',
            'core:t/sort_desc' => 'fa-folder',
            'core:t/sort' => 'fa-folder',
            'core:t/stop' => 'fa-folder',
            'core:t/switch_minus' => 'fa-folder',
            'core:t/switch_plus' => 'fa-folder',
            'core:t/switch_whole' => 'fa-folder',
            'core:t/unblock' => 'fa-folder',
            'core:t/unlocked' => 'fa-folder',
            'core:t/unlock' => 'fa-folder',
            'core:t/up' => 'fa-folder',
            'core:t/user' => 'fa-folder',
            'core:t/viewdetails' => 'fa-folder',
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
