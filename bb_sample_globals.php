<?php if (!defined('BASE_CHECK')) exit(); ?>
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

/* SAMPLE GLOBAL */
/* The below is the minimum header needed to install a module */
/*
@module_name = bb_sample_globals;
@friendly_name = Sample Globals;
@interface = bb_sample;
@module_type = -1;
@module_version = 1.0;
@maintain_state = Code;
@description = This is the Hook Include of the sample interface.;
*/
?>
<?php
/* INTERFACE DEFINTION */

$array = array();
$array[] = array('interface_type'=>'Standard','usertypes'=>array(1),'module_type'=>1);
$array[] = array('interface_type'=>'Auxiliary','usertypes'=>array(1),'module_type'=>2,'friendly_name'=>'Extras');
$array_globals['bb_sample']['interface'] = $array;
unset($array);
?>