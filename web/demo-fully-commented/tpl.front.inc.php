<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<!--

	This is a HTML template for the front page of Ajax-Poll.
	The file contains some PHP tags to make the template dynamic!

	These PHP tags will be replaced with poll data or do something
	useful for you at a runtime.

	Here is quick reference for the PHP tags used in "tpl.front.inc.php"
	and "tpl.result.inc.php"

//////////////////////////////////////////////////////////////////
  PHP Tags Quick Reference
//////////////////////////////////////////////////////////////////

	$poll->setMaxWidth( width )
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

<div class='poll-front' style='display:none;'>

<form>

<!--

	The following hidden <input> tag, "msg-select-one" specifies the message that
	pops up when a visitor clicks the vote button without selecting an option.

	If you don't want the script to show the message, delete or comment out the tag.

-->

<input type='hidden' name='msg-select-one' value='Please select one option' />

<!-- 

	The following hidden <input> tag, "msg-already-voted" specifies the message that
	pops up when a visitor trys to vote more than once.

	If you don't want the script to show the message, delete or comment out the tag.

-->

<input type='hidden' name='msg-already-voted' value='You have already voted!' />

<!--

	Now, let's display the poll!

	I used <table> to layout the poll but you can use any HTML tags to do so.
	Use <div>, <br>, <hr> or whatever. You have complete freedom!

-->

<table style="margin:10px auto;width:240px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<tr>
	<td style="font-weight:bold;text-align:center;">
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
	<td>&nbsp;</td>
</tr>

<!-- [BEGIN] 1st Item -->
<?php $item = $poll->getItem(); ?><!-- Returns the first item, "Harry Potter" -->
<tr>
	<td class='ap-container' align='left'><!-- "ap-container" will be discussed at the end of this file -->
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?>
		<!-- 

			Note that "echo $this->getName()" displays "Harry Potter"
			Again, you can just type "Harry Potter" here instead of
			using "$item->getName()" but it's a good practice to
			keep all texts in "class.inc.php"

		-->
	</td>
</tr>
<!-- [END] 1st Item -->

<!-- [BEGIN] 2nd Item -->
<?php $item = $poll->getItem(); ?><!-- Returns the second item, "Titanic" -->
<tr>
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?><!-- getName() displays "Titanic" -->
	</td>
</tr>
<!-- [END] 2nd Item -->

<!-- [BEGIN] 3rd Item -->
<?php $item = $poll->getItem(); ?><!-- Returns the third item, "Forest Gump" -->
<tr>
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?><!-- getName() displays "Forest Gump" -->
	</td>
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
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?>
	</td>
</tr>
<!-- [END] 4th Item -->

<?php } ?><!-- [Step 2 of 2] Erase this line to enable 'Star Wars' -->

<tr>
	<td>&nbsp;</td>
</tr>

<!--

	Here are the "Vote" button and "View" buttons.
	I used <input> tags to create buttons but it can be any clickable HTML tags
	such as <img>, <span>, <div> as long as they are associated the correct class.

	The "Vote" button should have the "ap-vote" class.
	The "View" button should have the "ap-result" class.

	For example, the followings tags are valid buttons:

(example1)

	<span class="ap-vote">This Is My Vote Button!</span>

(example2)

	<div class="ap-result">This Is My View Button!</div>

-->

<tr>
	<td style='text-align:center;'>
		<input type="submit" class="ap-vote" value=" Vote " />
		&nbsp;&nbsp;
		<input type="submit" class="ap-result" value=" View " />
	</td>
</tr>

<!--

	If you want to decorate buttons with css, I recommend you add a new class to the buttons
	instead of directly specifying the style attributes of "ap-vote" or "ap-result"

	Here is an example:

	<span class="ap-vote my-style-1">This Is My Vote Button!</span>

	In the exmaple above, you added "my-style-1" to the class of the button. Now you can
	specify the style attributes of "my-style-1" in your css file like shown below:

(exmaple)

	my-style-1 {
		color:blue;
		font-size:18px;
		font-weight:bold;
	}

	Why not specify the style of "ap-vote" directly?
	Well, if you do that, all the vote buttons always have exactly the same style.

	You may want to display mutiple polls with different styles on a single web page.
	You can attach "my-style-1" to the vote button of the first poll and "my-style-2" to
	the second poll. That way, you can have different button styles on different polls.

	If you directly specified the style of "ap-vote", you would get stuck in the same style
	forever becuase every vote button must have "ap-vote" in the class attribute!

-->

</table>

<!--

	Here is the reset button that clears the IP and Cookie blocks.
	You should remove it for a production use.

-->

<!-- [BEGIN] Reset Button -->
<div style='text-align:center;padding:0 10px 10px 10px;'>
<input type="submit" class="ap-clear-block" value="    Clear IP & Cookie Blocks   " />
</div>
<!-- [END] Reset Button -->

</form>

</div>

<?php if (false) {//--[BEGIN] Comment ?>
<!-- 
//////////////////////////////////////////////////////////////////

	>>> What does "ap-container" do?

	Let's go back to the first poll item and take a closer look at the first <td> tag.

	----------------------------------------------------
	<?php $item = $poll->getItem(); ?>
	<tr>
		<td class='ap-container' align='left'>
			<input type="radio" name="answer"
				value="<?php echo $item->getName(); ?>"
				style='vertical-align:-15%;'/>
			<?php echo $item->getName(); ?>
		</td>
	</tr>
	----------------------------------------------------

	It has the 'ap-container' class. Does this class adds some style to <td>?

	Nope. In this HTML templates, classes are not used to add styles.

	'ap-container' marks <td> as the tag that contains a radio button. When
	a visitor clicks inside the <td>, it propagates the click to the radio button,
	which makes it easy for visitors to select a poll item.

	Actually, the type of tag doesn't have to be <td>. It could be any HTML tag
	that can contain others such as <div> and <span>.

	For example,

	----------------------------------------------------
	<div class='ap-container'>
		<input type="radio" name="answer" value="<?php echo $item->getName(); ?>"/>
	</div>
	----------------------------------------------------


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