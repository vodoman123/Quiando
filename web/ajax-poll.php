<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Ajax Poll Script v2.05
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : AP201-205
// URL : http://www.phpkobo.com/ajax_poll.php
//
// This software is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; version 2 of the
// License.
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<

//----------------------------------------------------------------
// URL_APP_ROOT
//----------------------------------------------------------------
//
// Specifies the url that points to the root folder of this
// application. Set it only when this entry page is placed
// outside of the application folder.
//
// (default) Commented out for automatic detection
//

//define( 'URL_APP_ROOT', '' );

//-- jQuery selector to be processed
define( 'APP_OBJECT_SELECTOR', '.ajax-poll' );

//-- default tclass value
define( 'APP_DEFAULT_TCLASS', 'app.ajax-poll' );

//-- default tid value
define( 'APP_DEFAULT_TID', 'def' );

//-- start-up command from client side
define( 'APP_INIT_CMD', 'init' );

//-- the permission to be assigned for a new tclass data folder 
define( 'TCLASS_DATA_FOLDER_PERMISSION', 0777 );

//----------------------------------------------------------------
// Start-Up
//----------------------------------------------------------------

include( dirname(__FILE__) . "/app.code/common.inc.php" );

?>