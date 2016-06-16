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

/* ADMIN TEMPLATE FOR SAMPLE INTERFACE */

/*
@module_name = bb_sample_admin;
@friendly_name = Admin;
@interface = bb_sample;
@module_type = 2;
@module_version = 2.0;
@description = This is the Admin button of the sample interface.;
*/
?>
<?php
// it is good idea to check the permission
$main->check_permission ( "1_bb_sample" );

/* RETRIEVE STATE */
$POST = $main->retrieve ( $con );

echo "<br>";
echo "<p style=\"width:400px;\" class=\"spaced padded border note\">In ponderum accusamus usu, elit admodum duo eu, qui ei dicta dicam epicurei. Populo quodsi recteque id eam, sint nihil saepe eum ea. Gubergren efficiantur per te, sit eu case iisque. Ne quod veritus concludaturque has. Urbanitas argumentum cum ne, qui ut erat veniam labore. Nam hinc adipisci ad, sonet feugait senserit pri in.</p>";
echo "<br>";

/* RTEQUIRED FORM */
// echos out the form called bb_form
$main->echo_form_begin ();
// echos out the current module variable
$main->echo_module_vars ();
// form end
$main->echo_form_end ();
?>
