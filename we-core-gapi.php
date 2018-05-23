<?php
/*
Plugin Name:  WE CORE GOOGLE API
Plugin URI:   https://www.webenfold.com
description:  This plugin is a part of WebEnfold's WE-Core Engine and intended to use with only WE-Core Engine. This contains Google's API Script for PHP Application.
Version:      1.2
Author:       WebEnfold
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

require 'updater/plugin-update-checker.php';
$update_checker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/webenfold/we-core-gapi/',
	__FILE__,
	'we-core-gapi'
);
