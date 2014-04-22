<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<div class='poll-result demo-rumble-js' style='width:280px;display:none;'>

<form style='margin:0'>
<input type='hidden' name='msg-thank-you' value='Thank you for voting!' />

<!-- [BEGIN] Title -->
<div style="font-weight:bold;text-align:center;margin:10px;">
<?php echo $poll->attr( "title" ); ?>
</div>
<!-- [END] Title -->

<?php $poll->setMaxWidth( 240 ); ?>

<div style='margin:20px 10px'>
<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<div style='margin:4px 5px;text-align:left;font-size:13px;'>
	<?php echo $item->getName(); ?>
	<div class='ap-bar'
		style='display:none;width:<?php echo $item->getWidth(); ?>px;
			margin:2px 0;height:5px;background-color:#ffffaf;'>
	</div>
	<span><?php echo $item->getPercent(); ?>%</span>
	<span><?php echo $item->getCount(); ?></span>
</div>
<?php } ?>
<!-- [END] Looping through all the items -->
</div>

<!-- [BEGIN] Show total vote counts -->
<div style='text-align:center;margin:10px 10px;'>
	<span style='font-weight:bold;'><?php echo $poll->getTotal(); ?>
		vote<?php if ( $poll->getTotal() != 1 ) echo "s"; ?> total</span>
</div>
<!-- [END] Show total vote counts -->

<!-- [BEGIN] Back button -->
<div style='text-align:center;margin:10px 10px;'>
	<input value=" Back " type="button" class="ap-front my-button" />
</div>
<!-- [END] Back button -->

</form>

</div>
