<?php if (!defined('BASE_CHECK')) exit(); ?>
<?php
/*
 * Copyright (C) Brimbox LLC
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License Version 3 (GNU GPL v3)
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

/* SAMPLE TEMPLATE CALLED TEMPLATE FOR SAMPLE INTERFACE */

/*
@module_name = bb_sample_template;
@friendly_name = Template;
@interface = bb_sample;
@module_type = 1;
@module_version = 2.0;
@description = This is the Template tab of the sample interface.;
*/
?>
<?php
// it is good idea to check the permission
$main->check_permission ( "1_bb_sample" );

/* PROCESS STATE */
// get $POST variable
$POST = $main->retrieve ( $con );

// get state from db
$arr_state = $main->load ( $con, $module );

// process form variable and state
$sample = $main->process ( 'sample', $module, $arr_state, "" );

// update state, back to db
$main->update ( $con, $module, $arr_state );

echo "<br><p class=\"message spaced larger\">Variable Output: <span class=\"bold\">" . $sample . "</span></p>";

/* MODULE OUTPUT */
echo "<br>";
echo "<p style=\"width:400px;\" class=\"spaced padded border note\">Lorem ipsum dolor sit amet, in ius periculis percipitur, an sale sonet dicunt quo, est cu dictas commodo iuvaret. Ea omnes petentium vix. Vim eirmod copiosae an. His cu labore eripuit euismod, ei eam ipsum mandamus. Sale elaboraret honestatis per te, an per solum oportere, cum ut verear menandri. Cu nostro feugait eos, no possit epicurei pericula mea, sea nisl delicata liberavisse et. Ne vel malorum copiosae, magna efficiendi assueverit vix et.</p>";
echo "<br>";

/* MODULE FORM WITH SAMPLE VAR */
// echos out the form called bb_form
$main->echo_form_begin ();
// echos out the current module variable
$main->echo_module_vars ();

/* EXAMPLE VARIABLE FOR POSTBACK */
$params = array (
		'label' => "Sample Variable Post with State: ",
		'position' => "begin",
		'type' => "text",
		'label_class' => "spaced bold",
		'input_class' => 'spaced' 
);
$main->echo_input ( "sample", $sample, $params );
$params = array (
		"class" => "spaced",
		"number" => 1,
		"target" => $module,
		"passthis" => true,
		"label" => "Submit Variable" 
);
$main->echo_button ( "submit_variable", $params );

// form end
$main->echo_form_end ();
?>
