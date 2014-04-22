<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->

<!--
	mouse-over demo:

	The 9 lines of javascript below does the mouse over trick.
	The style of mouse-over is defined as "my-mouse-over-sel"
	in the style section.
-->

<!-- [BEGIN] Mouse Over -->
<script>
(function($){
	$(document).ready(function() {
		$( '.demo-mouse-over .my-mouse-over' ).mouseover( function() {
			$( this ).addClass( "my-mouse-over-sel" );
		}).mouseout( function() {
			$( this ).removeClass( "my-mouse-over-sel" );
		});
	});
}(jQuery));
</script>
<!-- [END] Mouse Over -->

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
	//filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#265AC5', endColorstr='#5DBBFC'); 
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

<div class='poll-front demo-mouse-over' style='display:none;width:280px;'>

<form style='margin:0;'>
<input type='hidden' name='msg-select-one' value='Please select one option' />
<input type='hidden' name='msg-already-voted' value='You have already voted!' />

<div style="font-weight:bold;text-align:center;margin:10px;">
<?php echo $poll->attr( "title" ); ?>
</div>

<div style='margin:20px 10px'>
<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<div class='ap-container my-mouse-over' style='margin:4px 5px;text-align:left;font-size:13px;'>
	<input type="radio" name="answer"
		value="<?php echo $item->getName(); ?>"
		style='vertical-align:-15%;'/>
	<?php echo $item->getName(); ?>
</div>
<?php } ?>
<!-- [END] Looping through all the items -->
</div>

<!-- [BEGIN] Vote & View Buttons -->
<div style='text-align:center;margin:10px 10px;'>
	<input type="submit" class="ap-vote my-button" value=" Vote " />
	&nbsp;&nbsp;
	<input type="submit" class="ap-result my-button" value=" View " />
</div>
<!-- [END] Vote & View Buttons -->

<?php if ( false ): ?>
<!-- [BEGIN] Reset Button -->
<div style='text-align:center;padding:0 10px 10px 10px;'>
<input type="submit" class="ap-clear-block" value="    Clear IP & Cookie Blocks   " />
</div>
<!-- [END] Reset Button -->
<?php endif; ?>

</form>

</div>
