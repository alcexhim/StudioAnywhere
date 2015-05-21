<?php
	// =============================================================================
	// Phast bootstrapper - loads the application modules and executes Phast
	// Copyright (C) 2013-2014  Mike Becker
    // 
	// This program is free software: you can redistribute it and/or modify
	// it under the terms of the GNU General Public License as published by
	// the Free Software Foundation, either version 3 of the License, or
	// (at your option) any later version.
    // 
	// This program is distributed in the hope that it will be useful,
	// but WITHOUT ANY WARRANTY; without even the implied warranty of
	// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	// GNU General Public License for more details.
    // 
	// You should have received a copy of the GNU General Public License
	// along with this program.  If not, see <http://www.gnu.org/licenses/>.
	// =============================================================================
	
	// We need to get the root path of the Web site. It's usually something like
	// /var/www/yourdomain.com.
	
	// Now that we have defined the root path, load the Phast content (which also
	// include_once's the modules and other Phast-specific stuff)
	require_once("Phast/System.inc.php");
	require_once("UUID.inc.php");
	
	// Bring in the Phast\System and Phast\IncludeFile classes so we can simply refer
	// to them (in this file only) as "System" and "IncludeFile", respectively, from
	// now on
	use Phast\System;
	
	// Set the application path
	System::SetApplicationPath(dirname(__FILE__));
	
	// Tell WebFX that we are ready to launch the application. This cycles through
	// all of the modules (usually you will define your main application content in
	// 000-Default) and executes the first module page that corresponds to the path
	// the user is GETting.
	System::Launch();
?>