<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<!--
	This demo uses "foreach" to loop through all the poll items.
-->

<div class='poll-result' style='display:none;'>

<form>
<input type='hidden' name='msg-thank-you' value='Thank you for voting!' />

<table style="margin:10px auto;width:360px;font-family:'Verdana';font-size:13px;"
	border="0" cellpadding="2" cellspacing="0">

<tr>
	<td style="font-weight:bold;text-align:center;" colspan="4">
	<?php echo $poll->attr( "title" ); ?>
	</td>
</tr>

<tr>
	<td colspan="4">&nbsp;</td>
</tr>

<?php $poll->setMaxWidth( 80 ); ?>

<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<tr>
	<td align='right'><?php echo $item->getName(); ?></td>
	<td align='left' width='80'>
		<div class='ap-bar'
			style='display:none;width:<?php echo $item->getWidth(); ?>px;
				height:10px;background-color:<?php echo $item->attr( 'bar-color' ); ?>;'>
		</div>
	</td>
	<td align='right' width='40'><?php echo $item->getPercent(); ?>%</td>
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
	<td align='center' colspan='4'>
	<input value=" Back " type="button" class="ap-front" />
	</td>
</tr>
<!-- [END] Back button -->

</table>

</form>

</div>
