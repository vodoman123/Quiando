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
		$poll->attr( "title", "So what do you think about mouse-over effect?" );

		$item = $poll->addItem( "Cool!" );
		$item->attr( "bar-color", "#ffffaf" );

		$item = $poll->addItem( "Fantastic!" );
		$item->attr( "bar-color", "#ffffaf" );

		$item = $poll->addItem( "Ummm...maybe I don't need it" );
		$item->attr( "bar-color", "#ffffaf" );

		return true;
	}
}

?>