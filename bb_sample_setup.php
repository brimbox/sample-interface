<?php
/*
Copyright (C) 2012  Kermit Will Richardson, Brimbox LLC

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License Version 3 (“GNU GPL v3”)
as published by the Free Software Foundation. 

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU GPL v3 for more details. 

You should have received a copy of the GNU GPL v3 along with this program.
If not, see http://www.gnu.org/licenses/
*/

/* SETUP TEMPLATE FOR SAMPLE INTERFACE*/
/* The below is the minimum header needed to install a module */
/*
@module_name = bb_sample_setup;
@friendly_name = Setup;
@interface = bb_sample;
@module_type = 2;
@module_version = 1.0;
@maintain_state = Yes;
@description = This is the Setup button of the sample interface.;
*/
?>
<?php
//it is good idea to check the permission 
$main->check_permission("bb_sample", array(1));

/* RETRIEVE STATE */
$main->retrieve($con, $array_state);

echo "<br>";
echo "<p style=\"width:400px;\" class=\"spaced padded border note\">Sea primis vituperata in, partem indoctum hendrerit te sea, duo ceteros denique ut. In nam novum legendos argumentum, ei vim cibo legimus complectitur. Graeci dolorum assentior quo te, mel at illum utinam reformidans. Laboramus necessitatibus usu an, iusto petentium usu ne. Ex eum stet honestatis, dicunt malorum ei pro, mundi adversarium eum in.<br></p>";
echo "<br>";

/* RTEQUIRED FORM */
//echos out the form called bb_form
$main->echo_form_begin();
//echos out the current module variable 
$main->echo_module_vars($module);
//echos out the state
$main->echo_state($array_state);
//form end
$main->echo_form_end();
?>
