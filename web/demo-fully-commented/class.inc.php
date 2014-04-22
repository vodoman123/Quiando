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

class CTClass extends CTClassBase
{
	function setupPoll( $poll )
	{
		//-------------------------------------------------------
		//
		// >>> Set the poll title
		//
		// It is not required to set a poll title in this file.
		// You can always type it directly in the templates but
		// it is a good practice to keep texts here so your
		// templates are free from texts specific to
		// a particular poll. 
		//

		$poll->attr( "title", "Which Movie Do You Like Best?" );

		//-------------------------------------------------------
		//
		// Are there any more text that you want to display in 
		// the front and/or result page?
		// If so, list them up here as $poll->attr( Key, Value );
		//
		// Again, it's not required but a good practice!
		//
		// ( examples )
		//
		// $poll->attr( "catchphrase", "Best Poll Ever!" );
		// $poll->attr( "written-by", "John Smith" );
		// $poll->attr( "background-color", "#fffff0" );
		// $poll->attr( "url-icon", "http://www.mydomain.com/..../icon.png" );
		//
		// You can display those attributes in template files with
		// the following PHP code:
		//
		// echo $poll->attr( Key );
		//

		//-------------------------------------------------------
		//
		// >>> Add Poll Items
		//
		// List up all poll items:
		//

		$poll->addItem( "Harry Potter" );
		$poll->addItem( "Titanic" );
		$poll->addItem( "Forest Gump" );

		//-------------------------------------------------------
		//
		// >>> Attributes for Poll Items
		// 
		// Like poll attributes, you can also set any attributes
		// to poll items.
		//
		// ( examples )
		//
		// [Step1] First, add a poll item object:
		//
		// $item = $poll->addItem( "Harry Potter" );
		//
		// [Step2] Then use "$item->attr( Key, Value );" to set an attribute.
		//
		// $item->attr( "catchphrase", "Best Poll Item Ever!" );
		// $item->attr( "written-by", "John Smith" );
		// $item->attr( "background-color", "#fffff0" );
		// $item->attr( "url-icon", "http://www.mydomain.com/..../icon.png" );
		//
		// You can display attributes in template files with
		// the following PHP code:
		//
		// echo $item->attr( Key );
		//

		//-------------------------------------------------------
		//
		//	>>> Add the 4th item to the poll!
		//
		//	Remove "//" in front of "$poll->addItem( "Star Wars" );"
		//	to enable a new poll item, "Star Wars."
		//
		// Note: You need to enable "Star Wars" in the following
		// all three files to make it function :
		//
		// [1] tpl.front.inc.php
		// [2] tpl.result.inc.php
		// [3] tpl.class.inc.php
		//
		// Too many files to modify? Well then read "Looping
		// through items" at the bottom of tpl.front.inc.php or
		// tpl.result.inc.php. You could add a new item by just
		// adding a line if you "looped through items."
		//

		//$poll->addItem( "Star Wars" );

		//-------------------------------------------------------
		// everything is OK and so return "true"

		return true;
	}
}

?>