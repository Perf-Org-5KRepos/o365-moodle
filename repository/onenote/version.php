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
 * Version details for OneNote repository
 * @package    repository_onenote
 * @author Vinayak (Vin) Bhalerao (v-vibhal@microsoft.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright  Microsoft Open Technologies, Inc. (based on files by 2012 Lancaster University Network Services Ltd)
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2015060102;
$plugin->requires = 2015051100;
$plugin->component = 'repository_onenote';
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '29.0.0.2';
$plugin->dependencies = [
	'local_onenote' => 2015060104
];