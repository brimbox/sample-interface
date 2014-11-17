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

/* MODULE TEMPLATE */
/* The below is the minimum header needed to install a module */
/*
@module_name = bb_sample_function;
@friendly_name = Sample Function;
@interface = bb_sample;
@module_type = -2;
@module_version = 1.0;
@maintain_state = Code;
@description = This is the Hook Include of the sample interface.;
*/
?>
<?php
/* SAMPLE VALIDATION FUNCTION */
class bb_sample {
    //tests if number and to be in range between 1000 and 1200 inclusive
    function range()
		{
		//validate numeric	
		if (!is_numeric($field))
			{
			$return_value = $error ? "Error: Must be numeric." : true;
			}
		else
			{
            if ($field >= 1000 && $field <= 1200 )
                {
                $return_value = false;
                }
            else
                {
                $return_value = $error ? "Error: Must be between 1000 and 1200 inclusive." : true;    
                }
			}
		return $return_value; 
        }
}
?>
