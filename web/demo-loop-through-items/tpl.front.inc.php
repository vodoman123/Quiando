<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<!--
	This demo uses "foreach" to loop through all the poll items.
-->

<div class='poll-front' style='display:none;'>

<form>
<input type='hidden' name='msg-select-one' value='Please select one option' />
<input type='hidden' name='msg-already-voted' value='You have already voted!' />

<table style="margin:10px auto;width:360px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<tr>
	<td style="font-weight:bold;text-align:center;">
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

<tr>
	<td>&nbsp;</td>
</tr>

<!-- [BEGIN] Vote & View Buttons -->
<tr>
	<td style='text-align:center;'>
		<input type="submit" class="ap-vote" value=" Vote " />
		&nbsp;&nbsp;
		<input type="submit" class="ap-result" value=" View " />
	</td>
</tr>
<!-- [END] Vote & View Buttons -->

</table>

<!-- [BEGIN] Reset Button -->
<div style='text-align:center;padding:0 10px 10px 10px;'>
<input type="submit" class="ap-clear-block" value="    Clear IP & Cookie Blocks   " />
</div>
<!-- [END] Reset Button -->

</form>

</div>
