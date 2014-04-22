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
// <style>
//----------------------------------------------------------------
$style=<<<_EOM_
<style>
.demo-rumble-js {
	color:white;
	border:0;
	margin:0;
	padding:10px;

	-moz-box-shadow:    3px 3px 5px 2px #ccc;
	-webkit-box-shadow: 3px 3px 5px 2px #ccc;
	box-shadow:         3px 3px 5px 2px #ccc;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 10px;

	/* for webkit browsers */
	background: -webkit-gradient(linear, left top, left bottom, from(#282828), to(#a65b4d)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #282828,  #a65b4d); 
	/* for IE */
	//filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#282828', endColorstr='#a65b4d'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #282828, #a65b4d);
	/* catch all */
	background-color:#282828;
}

.demo-rumble-js .my-button {
	cursor:pointer;
	color:white;
	border:0;
	margin:0;
	padding:10px;

	-moz-box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;
	box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 10px;

	/* for webkit browsers */
	background: -webkit-gradient(linear, left top, left bottom, from(#181818), to(#a65b4d)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #181818,  #a65b4d); 
	/* for IE */
	//filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#181818', endColorstr='#a65b4d'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #181818, #a65b4d);
	/* catch all */
	background-color:#181818;
}

</style>
_EOM_;
$this->addStyle($style);

?>

<span class='tip-box-select-one' style="
	display:none;

	text-align:center;
	padding:10px;
	margin:10px;
	font-size:15px;
	font-weight:bold;
	font-style:italic;
	font-family:times;
	color:#ffffff;
	background-color:#60a060;
	border:3px solid #cfcfcf;

	-moz-box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;
	box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 10px;

	/* for webkit browsers */
	background: -webkit-gradient(linear, left top, left bottom, from(#181818), to(#a65b4d)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #181818,  #a65b4d); 
	/* for IE */
	//filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#181818', endColorstr='#a65b4d'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #181818, #a65b4d);
	/* catch all */
	background-color:#181818;
">Please select one option.</span>

<span class='tip-box-already-voted' style="
	display:none;

	text-align:center;
	padding:10px;
	margin:10px;
	font-size:15px;
	font-weight:bold;
	font-style:italic;
	font-family:times;
	color:#ffffff;
	background-color:#60a060;
	border:3px solid #cfcfcf;

	-moz-box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;
	box-shadow: rgba(0, 0, 0, 0.277344) 0px 0px 13px 2px;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 10px;

	/* for webkit browsers */
	background: -webkit-gradient(linear, left top, left bottom, from(#181818), to(#a65b4d)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #181818,  #a65b4d); 
	/* for IE */
	//filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#181818', endColorstr='#a65b4d'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #181818, #a65b4d);
	/* catch all */
	background-color:#181818;
">You have already voted!</span>

