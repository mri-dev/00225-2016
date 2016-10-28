<?=$header?>
<?=$top?>
<!-- Contents /s -->
<script language="javascript" type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('form1', {
		display : {
			fadeDuration : 50,
			errorsLocation : 3,
			indicateErrors : 2,
			showErrors : 1
		}
	})});
</script>
<table id="mainData" class="account-page">
	<tr>
		<td id="tablehead"><?=ACCTREFILLTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
			<?php if (!$clientportal) { ?>
	    <div class="account-page-holder">
	      <div class="sidemenu vlt">
	        <?=$umenu?>
	      </div>
	      <div class="account-contant-container">
					<form method="post" action="acctrefill.php" id="form1" name="form1" class="awform">
			      <input type="hidden" name="action" value="check" />
					  <?php if ( $cAction != "check" ) { ?>
							<div class="">
							<?=$boxtop?>
							<fieldset>
								<legend><?=DEPINFO?></legend>
									<div class="desc">
										<?=strip_tags(ACCTREFILLBLURB)?>
									</div>
									<br>
	                <table class="width-100 data">
	                    <tr>
	                    	<td class="al vlt width-50 bold" nowrap="nowrap"><?=MINDEPOSIT?>:&nbsp;</td>
	                      <td class="ar vlt width-50 green" nowrap="nowrap"><?=LCURRENCYSYMBOL?><?=$min_refill?> <?=RCURRENCYSYMBOL?></td>
	                    </tr>
	                    <tr>
	                    	<td class="al vlt width-50 bold" nowrap="nowrap"><?=MAXDEPOSIT?>:&nbsp;</td>
	                      <td class="ar vlt width-50 green" nowrap="nowrap"><?=LCURRENCYSYMBOL?><?=$max_refill?> <?=RCURRENCYSYMBOL?></td>
	                    </tr>
	                    <tr>
	                    	<td class="al vlt width-50 bold" nowrap="nowrap"><?=MAXBALANCE?>:&nbsp;</td>
	                      <td class="ar vlt width-50 green" nowrap="nowrap"><?=LCURRENCYSYMBOL?><?=$max_acct?> <?=RCURRENCYSYMBOL?></td>
	                    </tr>
	                </table>
	              </div>
							</fieldset>
							<?=$boxbottom?>

							<?=$boxtop?>
							<fieldset>
								<legend><?=ACCTREFILLBOX?></legend>
									<table class="data width-100">
										<tr>
											<td class="al"><?=LIVECREDITS?></td>
											<td class="bold ar">
												<span class="green"><?=LCURRENCYSYMBOL?><?=$availablecredit?> <?=RCURRENCYSYMBOL?></span>
											</td>
										</tr>
										<tr>
											<td class="al"><?=PENDINGCREDITS?></td>
											<td class="bold ar">
												<span class="orange"><?=LCURRENCYSYMBOL?><?=$pendingcredit?> <?=RCURRENCYSYMBOL?></span>
											</td>
										</tr>
									</table>
									<div class="row">
										<div class="col-md-12 ar">
											<div class="topup">
											<?=REFILLAMOUNT?>:
											<?=LCURRENCYSYMBOL?>&nbsp;<input type="text" maxlength="20" size="8" name="total_charge" class="validate['digit'] red ac bold" id="idsld" /><?=RCURRENCYSYMBOL?>
											<input type="submit" name="Submit" value="<?=SUBMIT?>" />
											</div>
										</div>
									</div>
							</fieldset>
							<?=$boxbottom?>
							<div class="ac p-20"><?=$payment_images?></div>
						<?php } ?>
					</form>
	      </div>
	    </div>
	    <?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
