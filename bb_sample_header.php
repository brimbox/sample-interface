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

/* SAMPLE INTERFACE HEADER MODULE */
/* The below is the minimum header needed to install a module */
/*
@module_name = bb_sample_header;
@friendly_name = Sample Header;
@interface = bb_sample;
@module_type = -3;
@module_version = 1.0;
@maintain_state = Code;
@description = This is the Hook Include of the sample interface.;
*/
?>
<?php
# INTERFACE DECLARATION #
//You should declare an interface name
//$array_interface_name -- required
$array_header['bb_sample']['interface_name'] = "Sample";
//$array_userroles -- required, 0 is locked by default
$array_header['bb_sample']['userroles'] = array(1=>'User');
//careful, standard install must have 0-5 populated, names may be changed, database stores the integer values
//$array_module_types -- required
$array_header['bb_sample']['module_types'] = array(1=>"Tab",2=>"Admin");
//this defines the tab layout

# CUSTOM SECURITY #
//all values custom, Must be enabled in module "Interface Enable"
$array_header['bb_sample']['row_security'] = array(0=>"Open", 1=>"Low", 2=>"Medium",3=>"High");
$array_header['bb_sample']['row_archive'] = array(0=>"Current", 1=>"Archived", 2=>"Deep Archive");
$array_header['bb_sample']['layout_security'] = array(0=>"Open",1=>"Guarded",2=>"Secure");
$array_header['bb_sample']['column_security'] = array(0=>"Open",1=>"Guarded",2=>"Secure");

# CUSTOM DATA VALIDATION TYPE#
//one type added on with function in function module
$array_header['bb_sample']['validation']['range'] = array('function'=>'bb_sample::validate_range','name'=>"Range",'use'=>"Recommended");

# GUEST INDEX #
//guest index will include column securities 0 and 1
$array_header['bb_sample']['guest_index'] = array(0,1);
?>