<?php if (!defined('BASE_CHECK')) exit(); ?>
<?php

/*
 * Copyright (C) Brimbox LLC
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License Version 3 (“GNU GPL v3”)
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU GPL v3 for more details.
 *
 * You should have received a copy of the GNU GPL v3 along with this program.
 * If not, see http://www.gnu.org/licenses/
 */

/* FUNCTIONS FOR SAMPLE INTERFACE */

/*
@module_name = bb_sample_functions;
@friendly_name = Sample Function;
@interface = bb_sample;
@module_type = -1;
@module_version = 2.0;
@description = This is the Hook Include of the sample interface.;
*/
?>
<?php
// INTERFACE DECLARATION #
// You should declare an interface name
$main->add_value ( 'header', array (
		'name' => "Sample",
		'controller' => "/bb-box/bb_box.php" 
), 'bb_sample' );

/* INTERFACE DEFINTION */
// this define the standard controller layout
$main->add_action ( 'interface', 'bb_sample', array (
		'interface_type' => 'Standard',
		'userroles' => array (
				'1_bb_sample' 
		),
		'module_type_name' => 'Addon' 
), 1 );
$main->add_action ( 'interface', 'bb_sample', array (
		'interface_type' => 'Auxiliary',
		'userroles' => array (
				'1_bb_sample' 
		),
		'module_type_name' => 'Custom' 
), 2 );

/* ADD USERROLE */
// this will add the userrole
$main->add_value ( 'userroles', array (
		'name' => 'Sample' 
), '1_bb_sample' );

// CUSTOM SECURITY
// will overwrite default values
$main->add_value ( 'security', array (
		0 => "Open",
		1 => "Low",
		2 => "Medium",
		3 => "High" 
), 'row_security' );
$main->add_value ( 'security', array (
		0 => "Current",
		1 => "Archived",
		2 => "Deep Archive" 
), 'row_archive' );
$main->add_value ( 'security', array (
		0 => "Open",
		1 => "Guarded",
		2 => "Secure" 
), 'layout_security' );
$main->add_value ( 'security', array (
		0 => "Open",
		1 => "Guarded",
		2 => "Secure" 
), 'column_security' );
// GUEST INDEX #
// guest index will include column securities 0 and 1
$main->add_value ( 'security', array (0,1), 'guest_index' );

// CUSTOM DATA VALIDATION TYPE
// one type added on with function in function module
$main->add_value ( 'validation', array (
		'func' => 'bb_sample::validate_range',
		'name' => "Email",
		'use' => "Required" 
), "bb_brimbox_email" );

/* SAMPLE VALIDATION FUNCTION */
class bb_sample {
	// tests if number and to be in range between 1000 and 1200 inclusive
	function range() {
		// validate numeric
		if (! is_numeric ( $field )) {
			$return_value = $error ? "Error: Must be numeric." : true;
		} else {
			if ($field >= 1000 && $field <= 1200) {
				$return_value = false;
			} else {
				$return_value = $error ? "Error: Must be between 1000 and 1200 inclusive." : true;
			}
		}
		return $return_value;
	}
}

?>
