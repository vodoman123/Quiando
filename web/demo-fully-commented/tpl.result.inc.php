<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<!--

	This is a HTML template for the result page of Ajax-Poll.
	The file contains some PHP tags to make the template dynamic!

	These PHP tags will be replaced with poll data or do something
	useful for you at a runtime.

	Here is quick reference for the PHP tags used in "tpl.front.inc.php"
	and "tpl.result.inc.php"

//////////////////////////////////////////////////////////////////
  PHP Tags Quick Reference
//////////////////////////////////////////////////////////////////

	$poll->setMaxWidth( Width )
		Specifies the width of the widest bar in pixel.
		For example, suppose "Titanic" got the highest votes of all.
		You want to display the bar of "Titanic" in 80px. To do so,
		execute $poll->setMaxWidth( 80 ). The width of other poll items 
		are adjusted accordingly.

	$poll->getItem()       : Returns a poll item
	$poll->getItem( Name ) : Returns the poll item specified by name parameter
	$poll->getTotal()      : Returns the total number of votes
	$poll->attr( Key )     : Returns the attribute specified by Key parameter

	$item->getName()       : Returns the name of the item
	$item->getWidth()      : Returns the bar width of the item
	$item->getPercent()    : Returns the vote percentage of the item
	$item->getCount()      : Returns the vote count of the item
	$item->attr( Key )     : Returns the attribute specified by Key parameter

//////////////////////////////////////////////////////////////////
-->

<div class='poll-result' style='display:none;'>

<form>

<!--

	The following hidden <input> tag, "msg-thank-you" specifies the message that
	pops up after a visitor makes a vote.

	If you don't want the script to show the message, delete or comment out the tag.

-->

<input type='hidden' name='msg-thank-you' value='Thank you for voting!' />

<!--

	Now, let's display the poll!

	I used <table> to layout the poll but you can use any HTML tags to do so.
	Use <div>, <br>, <hr> or whatever. You have complete freedom!

-->

<table style="margin:10px auto;width:260px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<tr>
	<td style="font-weight:bold;text-align:center;" colspan="4">

<!-- 

	The following php tag, "$poll->attr( "title" );" will displays "Which Movie Do You Like Best?"
	Rather than using the php tag, you can just type "Which Movie Do You Like Best?" there.
	However, it's a good practice to keep your poll text and HTML templates separated so you can
	easily reuse HTML templates for your next poll with a different set of texts.

-->

	<?php echo $poll->attr( "title" ); ?>

<!--

	Oh, by the way, "attr" is an abbreviation of "attribute." So where can you set the "title"
	attribute of the poll? Check out "class.inc.php." It's in the same folder as this file.

-->
	</td>
</tr>

<tr>
	<td colspan="4">&nbsp;</td>
</tr>

<?php $poll->setMaxWidth( 80 ); ?>

<!-- [BEGIN] 1st Item -->
<?php $item = $poll->getItem(); ?><!-- Returns the first item, "Harry Potter" -->
<tr>
	<td align='right'><?php echo $item->getName(); ?></td>
	<td align='left' width='80'>
		<!-- "ap-bar" will be discussed at the end of this file -->
		<div class='ap-bar'
			style='display:none;width:<?php echo $item->getWidth(); ?>px;
				height:15px;background-color:#006000;'>
		</div>
	</td>
	<td align='right' width='40'><?php echo $item->getPercent(); ?>%</td>
	<td align='right' width='30'><?php echo $item->getCount(); ?></td>
</tr>
<!-- [END] 1st Item -->

<!-- [BEGIN] 2nd Item -->
<?php $item = $poll->getItem(); ?><!-- Returns the second item, "Titanic" -->
<tr>
	<td align='right'><?php echo $item->getName(); ?></td>
	<td align='left' width='80'>
		<div class='ap-bar'
			style='display:none;width:<?php echo $item->getWidth(); ?>px;
				height:15px;background-color:#009000;'>
		</div>
	</td>
	<td align='right' width='40'><?php echo $item->getPercent(); ?>%</td>
	<td align='right' width='30'><?php echo $item->getCount(); ?></td>
</tr>
<!-- [END] 2nd Item -->

<!-- [BEGIN] 3rd Item -->
<?php $item = $poll->getItem(); ?><!-- Returns the third item, "Forest Gump" -->
<tr>
	<td align='right'><?php echo $item->getName(); ?></td>
	<td align='left' width='80'>
		<div class='ap-bar'
			style='display:none;width:<?php echo $item->getWidth(); ?>px;
				height:15px;background-color:#00C000;'>
		</div>
	</td>
	<td align='right' width='40'><?php echo $item->getPercent(); ?>%</td>
	<td align='right' width='30'><?php echo $item->getCount(); ?></td>
</tr>
<!-- [END] 3rd Item -->

<!--

Are you ready to add a new item?

There is the 4th item, "Star Wars" below but it's disabled by default.

You can enable 'Star Wars' by erasing the two lines marked as "Erase this line..."

Note: You need to enable "Star Wars" in the following all three files to make it function :

	[1] tpl.front.inc.php
	[2] tpl.result.inc.php
	[3] tpl.class.inc.php

Too many files to modify? Well then read "Looping through items" at the bottom of
this file. You could add a new item by just adding a line if you "looped through
items."

-->

<?php if ( false ) { ?><!-- [Step 1 of 2] Erase this line to enable 'Star Wars' -->

<!-- [BEGIN] 4th Item -->
<?php $item = $poll->getItem(); ?>
<tr>
	<td align='right'><?php echo $item->getName(); ?></td>
	<td align='left' width='80'>
		<div class='ap-bar'
			style='display:none;width:<?php echo $item->getWidth(); ?>px;
				height:15px;background-color:#00C000;'>
		</div>
	</td>
	<td align='right' width='40'><?php echo $item->getPercent(); ?>%</td>
	<td align='right' width='30'><?php echo $item->getCount(); ?></td>
</tr>
<!-- [END] 4th Item -->

<?php } ?><!-- [Step 2 of 2] Erase this line to enable 'Star Wars' -->

<tr>
	<td align='right' colspan='4'>
	<span style='font-weight:bold;'><?php echo $poll->getTotal(); ?>
		vote<?php if ( $poll->getTotal() != 1 ) echo "s"; ?> total</span>
	</td>
</tr>

<!--

	Here is the "Back" button, which takes visitors back to the front page.
	I used <input> tags to create buttons but it can be any clickable HTML tags
	such as <img>, <span> and <div> as long as they are associated the correct class.

	The "Back" button should have the "ap-front" class.

	For example, the following tag is a valid button:

(example)

	<span class="ap-front">This Is My Back Button!</span>

-->

<tr>
	<td align='center' colspan='4'>
	<input value=" Back " type="button" class="ap-front" />
	</td>
</tr>

<!--

	If you want to decorate buttons with css, I recommend you add a new class to the buttons
	instead of directly specifying the style attributes of "ap-front"

	Here is an example:

	<span class="ap-vote my-style-1">This Is My Back Button!</span>

	In the exmaple above, you added "my-style-1" to the class of the button. Now you can
	specify the style attributes of "my-style-1" in your css file like shown below:

(exmaple)

	my-style-1 {
		color:blue;
		font-size:18px;
		font-weight:bold;
	}

	Why not specify the style of "ap-front" directly?
	Well, if you do that, all the back buttons always have exactly the same style.

	You may want to display mutiple polls with different styles on a single web page.
	You can attach "my-style-1" to the back button of the first poll and "my-style-2" to
	the second poll. That way, you can have different button styles on different polls.

	If you directly specified the style of "ap-front", you would get stuck in the same style
	forever becuase every back button must have "ap-front" in the class attribute!

-->

</table>

</form>

</div>

<?php if (false) {//--[BEGIN] Comment ?>
<!-- 
<!-- 
//////////////////////////////////////////////////////////////////

	>>> The "ap-bar" class

	Let's go back to the first poll item and take a closer look at the <div> tag
	around the middle.

	----------------------------------------------------
	<?php $item = $poll->getItem(); ?>
	<tr>
		<td align='right'><?php echo $item->getName(); ?></td>
		<td align='left' width='80'>
			<div class='ap-bar'
				style='display:none;width:<?php echo $item->getWidth(); ?>px;
					height:15px;background-color:#006000;'>
			</div>
		</td>
		<td align='right' width='40'><?php echo $item->getPercent(); ?>%</td>
		<td align='right' width='30'><?php echo $item->getCount(); ?></td>
	</tr>
	----------------------------------------------------

	The <div> tag has the 'ap-bar' class, which does not specify any style
	to <div>.

	In this HTML templates, classes are not used to add styles.

	The <div> tag with the 'ap-bar' class creates a bar for the poll item.

	You can change the style attributes of a bar such as background color and
	height, however, the width must be set by the PHP tag, "$item->getWidth()"

	Another important thing is that "display" must be set to "none" so initially
	bars are completely hidden.


//////////////////////////////////////////////////////////////////

	>>> Looping through items --- a tip to save your time

	Didn't you realize that the HTML code for all poll items are almost identical?
	Yes, they are. That may lead you to think that there is a way to generate HTML codes
	for all poll items by writing code for only one. If you think so, you are correct!
	With a simple php "foreach" loop, you could generate the HTML code for all
	the poll items. I didn't do it in this template because I wanted to show you that you can
	always write straightforward HTML code from the beginning to the end without any 
	restrictions on the format or style.

	If you are interested in looping through items, here is a snippet for you:

	------------------------------------------------------
	<?php foreach( $poll->getAllItems() as $item ) { ?>

	... Write HTML code for a poll item here ...

	<?php } ?>
	------------------------------------------------------

	This technique will save your time when you have many poll items.
	Also, it makes your templates more reusable and manageable!


//////////////////////////////////////////////////////////////////
-->
<?php }//--[END] Comment ?>