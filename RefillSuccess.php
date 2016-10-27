<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=REFILLTITLE?></td>
	</tr>
	<tr>
		<td id="mainTD">
		<h3 class="ac"><?=THANKYOU?></h3>
        <p class="ac p-5"><?=ACCTPAYBLURB?> <?=LCURRENCYSYMBOL?><span class="red"><?=$total_charge?></span><?=RCURRENCYSYMBOL?></p>
		<br />
		<p class="al p-5"><strong><?=ACCTBALANCEBLURB?></strong>: <?=LCURRENCYSYMBOL?><span class="red"><?=$availablecredit?></span><?=RCURRENCYSYMBOL?></p>
		<br />
		<p class="al p-5"><strong><?=PENDBALANCEBLURB?></strong>: <?=LCURRENCYSYMBOL?><span class="red"><?=$pendingcredit?></span><?=RCURRENCYSYMBOL?></p>
		<br />
        <p class="ac p-5"><?=REFILLBLURB?></p>
        <p class="ac p-5"><?=THANKYOU?><br /><?=$companyname?></p>
        <p class="ac p-5"><?=REFILLBLURB2?></p>
		<p class="ac bold"><?=PPTHANKSAD?></p>

		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
