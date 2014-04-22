<?php $poll =& $this->poll; ?>

<div class='poll-front' style='display:none;'>

<form>
<input type='hidden' name='msg-select-one' value='Please select one option' />
<input type='hidden' name='msg-already-voted' value='You have already voted!' />

<table style="margin:10px auto;width:240px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<!-- [BEGIN] Title -->
<tr>
	<td style="font-weight:bold;text-align:center;">
	<?php echo $poll->attr( "title" ); ?>
	</td>
</tr>
<!-- [END] Title -->

<tr>
	<td>&nbsp;</td>
</tr>

<!-- [BEGIN] 1st Item -->
<?php $item = $poll->getItem(); ?>
<tr>
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?>
	</td>
</tr>
<!-- [END] 1st Item -->

<!-- [BEGIN] 2nd Item -->
<?php $item = $poll->getItem(); ?>
<tr>
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?>
	</td>
</tr>
<!-- [END] 2nd Item -->

<!-- [BEGIN] 3rd Item -->
<?php $item = $poll->getItem(); ?>
<tr>
	<td class='ap-container' align='left'>
		<input type="radio" name="answer"
			value="<?php echo $item->getName(); ?>"
			style='vertical-align:-15%;'/>
		<?php echo $item->getName(); ?>
	</td>
</tr>
<!-- [END] 3rd Item -->

<tr>
	<td>&nbsp;</td>
</tr>

<!-- [BEGIN] Vote & View Button -->
<tr>
	<td style='text-align:center;'>
		<input type="submit" class="ap-vote" value=" Vote " />
		&nbsp;&nbsp;
		<input type="submit" class="ap-result" value=" View " />
	</td>
</tr>
<!-- [END] Vote & View Button -->

</table>

<!-- [BEGIN] Clear Button -->
<div style='text-align:center;padding:0 10px 10px 10px;'>
<input type="submit" class="ap-clear-block" value="    Clear IP & Cookie Blocks   " />
</div>
<!-- [END] Clear Button -->

</form>

</div>
