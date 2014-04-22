<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<?php
//----------------------------------------------------------------
// <style>
//----------------------------------------------------------------
$style=<<<_EOM_
<style>
.demo-mouse-over {
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
	background: -webkit-gradient(linear, left top, left bottom, from(#265AC5), to(#5DBBFC)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #265AC5,  #5DBBFC); 
	/* for IE */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#265AC5', endColorstr='#5DBBFC'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #265AC5, #5DBBFC);
	/* catch all */
	background-color:#265AC5;
}

.demo-mouse-over .my-button {
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
	background: -webkit-gradient(linear, left top, left bottom, from(#265AC5), to(#5DBBFC)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #265AC5,  #5DBBFC); 
	/* for IE */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#265AC5', endColorstr='#5DBBFC'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #265AC5, #5DBBFC);
	/* catch all */
	background-color:#265AC5;
}

.demo-mouse-over .my-mouse-over-sel {
	color:white;
	border:0;
	margin:0;
	padding:0;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 10px;

	/* for webkit browsers */
	background: -webkit-gradient(linear, left top, left bottom, from(#265AC5), to(#5DBBFC)); 
	/* for firefox 3.6+ */
	background: -moz-linear-gradient(top,  #265AC5,  #5DBBFC); 
	/* for IE */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#265AC5', endColorstr='#5DBBFC'); 
	/* for opera */
	background-image: -o-linear-gradient(-90deg, #265AC5, #5DBBFC);
	/* catch all */
	background-color:#265AC5;
}
</style>
_EOM_;
$this->addStyle($style);
?>

<div class='poll-result demo-mouse-over' style='display:none;width:280px;'>

<form style='margin:0'>
<input type='hidden' name='msg-thank-you' value='Thank you for voting!' />

<div style="font-weight:bold;text-align:center;margin:10px;">
<?php echo $poll->attr( "title" ); ?>
</div>

<?php $poll->setMaxWidth( 220 ); ?>

<div style='margin:20px 10px'>
<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<div style='margin:4px 5px;text-align:left;font-size:13px;'>
	<?php echo $item->getName(); ?>
	<div class='ap-bar'
		style='display:none;width:<?php echo $item->getWidth(); ?>px;
			margin:2px 0;height:5px;background-color:<?php echo $item->attr( 'bar-color' ); ?>;'>
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
