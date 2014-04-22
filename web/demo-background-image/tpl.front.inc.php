<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<?php $url_folder = $this->getFolderUrl(); ?>
<!--
//////////////////////////////////////////////////////////////////

	[ NOTE ]

	getFolderUrl() function returns the URL path to this folder.
	Appending "images/bg-front.png", you can obtain the URL path to
	an image inside the folder.

	The function is useful to specify the URLs of any files that
	are included in the folder.

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
	background-image:url({$url_folder}images/bg-front.png);
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

<div class='poll-front demo-background-image' style='display:none;'>

<form style='margin:0;'>
<input type='hidden' name='msg-select-one' value='Please select one option' />
<input type='hidden' name='msg-already-voted' value='You have already voted!' />

<table style="margin:0 auto;width:240px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<tr>
	<td style="font-weight:bold;text-align:center;font-size:16px;padding:0 10px;">
	<?php echo $poll->attr( "title" ); ?>
	</td>
</tr>

<tr>
	<td>&nbsp;</td>
</tr>

<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<tr>
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?>
	</td>
</tr>
<?php } ?>
<!-- [END] Looping through all the items -->

<!-- [BEGIN] Vote & View Buttons -->
<tr>
	<td style='text-align:center;'>
		<img id='blinking-vote-button'
			src="<?php echo $url_folder; ?>images/btn-vote.png"
			class="ap-vote my-button" alt=" Vote " />
	</td>
</tr>

<tr>
	<td style='text-align:left;'>
		<a href='#' class="ap-result my-link">View Results</a>
	</td>
</tr>
<!-- [END] Vote & View Buttons -->

</table>

<!-- [BEGIN] Reset Button -->
<div style='text-align:center;margin-top:10px;'>
<input type="submit" class="ap-clear-block" value="    Clear IP & Cookie Blocks   " />
</div>
<!-- [END] Reset Button -->

<!-- [BEGIN] Blink Vote Button -->
<script>
(function($){
	function run()
	{
		var obj = $('#blinking-vote-button');
		obj.fadeTo( 500, 1.0, function() {
			obj.fadeTo( 500, 0.0, function() {
				window.setTimeout(run, 1);
			});
		});
	}
	$(document).ready(function() {
		run();
	});
})(jQuery);
</script>
<!-- [END] Blink Vote Button -->

</form>

</div>
