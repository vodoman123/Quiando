<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<?php $url_folder = $this->getFolderUrl(); ?>
<!--
//////////////////////////////////////////////////////////////////

	[ NOTE ]

	getFolderUrl() function returns the URL path to this folder.
	Appending "images/bg-result.png", you can obtain the URL path to
	an image inside the folder.

	This function is useful to find the URLs of any files that are included
	in the folder. Use it to make a self-contained poll folder.

//////////////////////////////////////////////////////////////////
-->

<?php
//----------------------------------------------------------------
// <style>
//----------------------------------------------------------------
$style=<<<_EOM_
<style>
.demo-background-image {
	font-size:16px;
	width:310px;
	padding:20px 0;
	color:white;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 10px;
}

.demo-background-image .my-button {
	cursor:pointer;
	margin:0;
	padding:5px 10px;
}

.demo-background-image .my-link:link,
.demo-background-image .my-link:visited
{
	cursor:pointer;
	color:white;
	font-size:10px;
}

.demo-background-image .my-link:hover,
.demo-background-image .my-link:active
{
	color:yellow;
}
</style>
_EOM_;
$this->addStyle($style);
?>

<div class='poll-result demo-background-image' style='display:none;
	background-image:url(<?php echo $url_folder; ?>images/bg-result.png);'>

<form style='margin:0;'>
<input type='hidden' name='msg-thank-you' value='Thank you for voting!' />

<table style="margin:0px auto;width:260px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<tr>
	<td style="font-weight:bold;text-align:center;font-size:16px;padding:0 10px;" colspan="4">
	<?php echo $poll->attr( "title" ); ?>
	</td>
</tr>

<tr>
	<td colspan="4">&nbsp;</td>
</tr>

<?php $poll->setMaxWidth( 55 ); ?>

<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<tr>
	<td align='right'><?php echo $item->getName(); ?></td>
	<td align='left' width='55'>
		<div class='ap-bar'
			style='display:none;width:<?php echo $item->getWidth(); ?>px;
				height:6px;background-color:white;'>
		</div>
	</td>
	<td align='right' width='40'><?php echo $item->getPercent(1); ?>%</td>
	<td align='right' width='30'><?php echo $item->getCount(); ?></td>
</tr>
<?php } ?>
<!-- [END] Looping through all the items -->

<!-- [BEGIN] Show total vote counts -->
<tr>
	<td align='right' colspan='4'>
	<span style='font-weight:bold;'><?php echo $poll->getTotal(); ?>
		vote<?php if ( $poll->getTotal() != 1 ) echo "s"; ?> total</span>
	</td>
</tr>
<!-- [END] Show total vote counts -->

<!-- [BEGIN] Back button -->
<tr>
	<td style='text-align:left;'>
		<a href='#' class="ap-front my-link">Return To Poll</a>
	</td>
</tr>
<!-- [END] Back button -->

</table>

</form>

</div>
