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

/* MODULE TEMPLATE */
/* The below is the minimum header needed to install a module */
/*
@module_name = bb_sample_home;
@friendly_name = Home;
@interface = bb_sample;
@module_type = 1;
@module_version = 1.0;
@maintain_state = Yes;
@description = This is the Sample tab of the sample interface.;
*/
?>
<?php
//it is good idea to check the permission 
$main->check_permission("bb_sample", array(1));

/* Begin State */
//it is necessary to retrieve the state to echo it back into the form
$main->retrieve($con, $array_state);

/* DATABASE STATS */
echo "<div class=\"floatright\">";
$main->logout_link();
echo "</div>";

echo "<div class=\"floatleft\">";
$main->database_stats();
$main->archive_link();
echo "<br>";
$main->userrole_switch();
echo "</div>";
echo "<div class=\"clear\"></div>";

/* MODULE OUTPUT */
echo "<br>";
echo "<p style=\"width:400px;\" class=\"padded border note\">In sea fabulas consectetuer, id vis nisl solet necessitatibus. Delenit lucilius vis no. Cum in natum insolens, mollis intellegebat est cu, at eam illud antiopam. Per ad velit tibique, cum quidam sanctus perpetua ea, an nec scripta periculis. Mandamus argumentum temporibus in eam, velit dictas repudiandae est at. Id stet euripidis repudiandae his, est ne veri clita aperiam..</p>";
echo "<br>";

/* REQUIRED FORM */
//echos out the form called bb_form
$main->echo_form_begin();
//echos out the current module variable 
$main->echo_module_vars($module);
//echos out the state
$main->echo_state($array_state);
//form end
$main->echo_form_end();
?>
