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
		$poll->attr( "title", "Which Movie Do You Like Best?" );

		$item = $poll->addItem( "Harry Potter" );
		$item->attr( "bar-color", "#000060" );

		$item = $poll->addItem( "Titanic" );
		$item->attr( "bar-color", "#000064" );

		$item = $poll->addItem( "Forest Gump" );
		$item->attr( "bar-color", "#000068" );

		$item = $poll->addItem( "Star Wars" );
		$item->attr( "bar-color", "#00006C" );

		$item = $poll->addItem( "The Godfather" );
		$item->attr( "bar-color", "#000070" );

		$item = $poll->addItem( "The Shawshank Redemption" );
		$item->attr( "bar-color", "#000074" );

		$item = $poll->addItem( "Casablanca" );
		$item->attr( "bar-color", "#000078" );

		$item = $poll->addItem( "It's a Wonderful Life" );
		$item->attr( "bar-color", "#00007C" );

		$item = $poll->addItem( "Schindler's List" );
		$item->attr( "bar-color", "#000080" );

		$item = $poll->addItem( "Gone With the Wind" );
		$item->attr( "bar-color", "#000084" );

		$item = $poll->addItem( "The Wizard of Oz" );
		$item->attr( "bar-color", "#000088" );

		$item = $poll->addItem( "To Kill a Mockingbird" );
		$item->attr( "bar-color", "#00008C" );

		$item = $poll->addItem( "Pulp Fiction" );
		$item->attr( "bar-color", "#000090" );

		$item = $poll->addItem( "Psycho" );
		$item->attr( "bar-color", "#000094" );

		$item = $poll->addItem( "Citizen Kane" );
		$item->attr( "bar-color", "#000098" );

		$item = $poll->addItem( "Rear Window" );
		$item->attr( "bar-color", "#00009C" );

		$item = $poll->addItem( "Jaws" );
		$item->attr( "bar-color", "#0000A0" );

		$item = $poll->addItem( "North by Northwest" );
		$item->attr( "bar-color", "#0000A4" );

		$item = $poll->addItem( "Vertigo" );
		$item->attr( "bar-color", "#0000A8" );

		$item = $poll->addItem( "Apocalypse Now" );
		$item->attr( "bar-color", "#0000AC" );

		$item = $poll->addItem( "Taxi Driver" );
		$item->attr( "bar-color", "#0000B0" );

		return true;
	}
}

?>