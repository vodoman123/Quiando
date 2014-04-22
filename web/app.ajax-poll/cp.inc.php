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

//-- load app.config
define( 'PATH_APP_CONFIG', dirname(dirname(__FILE__)) . "/app.config/" );
include( PATH_APP_CONFIG . 'common.inc.php' );

//-- find tclass name
define( 'TCLASS_NAME', substr( PATH_TCLASS, strlen( dirname( PATH_TCLASS ) ) + 1, -1 ) );

//-- config
include( "config/common.inc.php" );

//-- cp include
define( 'FOLDER_CPINCLUDE', 'cp.include' );
include( dirname(__FILE__) . "/" . FOLDER_CPINCLUDE . "/common.inc.php" );

//----------------------------------------------------------------
// CSystem
//----------------------------------------------------------------
class CSystem extends CSystemBase
{
	//----------------------------------------------------------------
	// setup()
	//----------------------------------------------------------------
	function setup()
	{
		parent::setup();
	}

	//----------------------------------------------------------------
	// printHeadSection()
	//----------------------------------------------------------------
	function printHeadSection()
	{
		parent::printHeadSection();
?>
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../ajax-poll.php"></script>
<?php
	}

	//----------------------------------------------------------------
	// printArticle()
	//----------------------------------------------------------------
	function printArticle()
	{
		try 
		{
			$this->checkVersion();
			$this->checkMbString();
			$this->checkAppDataFolder();
			$this->printTitle();
			$this->printTClass();
			$this->sectAbout();
			$this->sectPreview();
			$this->sectAddPollToWebPage();
		}
		catch( Exception $e )
		{

		}
	}

	//----------------------------------------------------------------
	// sectAbout()
	//----------------------------------------------------------------
	function sectAbout()
	{
		$path = PATH_TCLASS. "about.inc.php";
		if ( file_exists( $path ) )
		{
			$this->printSectTitle( "About" );
			include( $path );
		}
	}

	//----------------------------------------------------------------
	// sectPreview()
	//----------------------------------------------------------------
	function sectPreview()
	{
?>

<?php $this->printSectTitle( "Preview" ); ?>

<table width='100%'><tr><td align='center'>
<div class='<?php echo BASE_TCLASS; ?>' tclass='<?php echo $this->tclass_name; ?>' ></div>
</td></tr></table>

<?php

	}

	//----------------------------------------------------------------
	// sectAddPollToWebPage()
	//----------------------------------------------------------------
	function sectAddPollToWebPage()
	{
?>

<?php $this->printSectTitle( "Adding the Poll to Your Web Page" ); ?>

<p>
<span class='step-number'>Step 1</span> Add <span class='hlls'>the following two lines</span> to the &lt;head&gt; section of your web page.
</p>

<?php
		$txt=<<<_EOM_
[gray%]<head>
...
...[gray]
[hlls#]<script type="text/javascript" src="{$this->url_app_root}jquery.js"></script>
<script type="text/javascript" src="{$this->url_app_root}ajax-poll.php"></script>[hlls][gray%]...
...
</head>[gray]
_EOM_;
		$this->printSourceCode( $txt );
?>

<p><br/></p>

<p>
<span class='step-number'>Step 2</span> Add <span class='hlls'>the following line</span> to the &lt;body&gt; section of the web page.
</p>

<p>The poll will appear inside the &lt;div&gt; tag.</p>

<?php
		$class = BASE_TCLASS;
		$txt=<<<_EOM_
[gray%]<body>
...
...[gray]
[hlls#]<div class='{$class}' tclass='{$this->tclass_name}'></div>[hlls][gray%]...
...
</body>[gray]
_EOM_;
		$this->printSourceCode( $txt );
?>

<p><br/></p>

<p>
<span class='step-number'>Note</span>The following HTML code is a minimalist example of a web page that displays the poll.
</p>

<?php
		$class = BASE_TCLASS;
		$txt=<<<_EOM_
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
[hlls%]<script type="text/javascript" src="{$this->url_app_root}jquery.js"></script>
<script type="text/javascript" src="{$this->url_app_root}ajax-poll.php"></script>[hlls]
</head>
<body>
[hlls%]<div class='{$class}' tclass='{$this->tclass_name}'></div>[hlls]
</body>
</html>
_EOM_;
		$this->printSourceCode( $txt );
	}

	//----------------------------------------------------------------
	// END OF SECT
	//----------------------------------------------------------------
}

?>