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
		$poll->attr( "title", "Where would you most like to visit?" );

		$poll->addItem( "London" );
		$poll->addItem( "Barcelona" );
		$poll->addItem( "Paris" );
		$poll->addItem( "Maui" );
		$poll->addItem( "New York" );
		$poll->addItem( "San Francisco" );
		$poll->addItem( "Puerto Rico" );
		$poll->addItem( "Vancouver" );
		$poll->addItem( "Virgin Islands" );
		$poll->addItem( "Edinburgh" );

		return true;
	}
}

?>