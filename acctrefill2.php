<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
	<tr>
		<td id="tablehead"><?=ACCTREFILLTITLE?></td>
	</tr>
	<tr>
		<td id="mainTD">
			<?=$dmsg?>
			<?php if (!$clientportal) { ?>
	    <div class="account-page-holder">
	      <div class="sidemenu vlt">
	        <?=$umenu?>
	      </div>
	      <div class="account-contant-container">
					<?php if($cAction == "check"){ ?>
						<form method="post" action="acctrefill.php" class="awform">
						   <input type="hidden" name="total_charge" value="<?=$total_charge?>" />
						   <input type="hidden" name="action" value="checkout" />
						   <?=$boxtop?>
						   <fieldset>
						      <legend><span class="boxlegend"><?=DEPOSITAMOUNT?>:&nbsp;<?=LCURRENCYSYMBOL?><?=$total_charge?><?=RCURRENCYSYMBOL?></span></legend>
						      <div class="ac p-10"><?=ACCTREFILLBLURB2?></div>
									<hr>
						      <table class="alc">
						         <tr>
						            <td class="ar bold vlt"><?=ACCOUNTNAME?>:&nbsp;</td>
						            <td class="al bold red"><?=$newuid?></td>
						         </tr>
						         <tr>
						            <td class="ar bold vlt"><?=DEPOSITAMOUNT?>:&nbsp;</td>
						            <td class="al bold red"><?=LCURRENCYSYMBOL?><?=$total_charge?><?=RCURRENCYSYMBOL?></td>
						         </tr>
						      </table>
						      <br />
						   </fieldset>
						   <?=$boxbottom?>
						   <div class="ac p-10">
						      <input type="submit" name="submit" value="<?=BUTTONTEXT?>" />
						   </div>
						</form>

					<?php }else{  ?>
					<?php } ?>
	      </div>
	    </div>
	    <?php } ?>






        	<?=$dmsg?>
		 		<?php if (!$clientportal) { ?>
		        <table class="width-99 alc">
		            <tr>
		                <td class="width-20 vlt"><?=$umenu?></td>
		                <td class="width-1">&nbsp;</td>
		                <td class="width-100 vlt">
						<!-- user menu /s -->
				<?php } ?>
                        <?php if($cAction == "check"){?>
													sadsada
                            <form method="post" action="acctrefill.php" class="awform">
                            <input type="hidden" name="total_charge" value="<?=$total_charge?>" />
                            <input type="hidden" name="action" value="checkout" />
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=DEPOSITAMOUNT?>:&nbsp;<?=LCURRENCYSYMBOL?><?=$total_charge?><?=RCURRENCYSYMBOL?></span></legend>
                            <div class="ac p-10"><?=ACCTREFILLBLURB2?></div>
                                <table class="alc">
                                    <tr>
                                        <td class="ar bold vlt"><?=ACCOUNTNAME?>:&nbsp;</td>
                                        <td class="al bold red"><?=$newuid?></td>
                                    </tr>
                                <tr>
                                    <td class="ar bold vlt"><?=DEPOSITAMOUNT?>:&nbsp;</td>
                                    <td class="al bold red"><?=LCURRENCYSYMBOL?><?=$total_charge?><?=RCURRENCYSYMBOL?></td>
                                </tr>
                                </table>
								<br />
</fieldset>
<?=$boxbottom?>
<div class="ac p-10">
									<input type="submit" name="submit" value="<?=BUTTONTEXT?>" /></div>
                            </form>
                        <?php }else{ ?>





						<div class="awform">
						<?=$boxtop?>
<fieldset>
<div><?=PROCESSORDER?></div>
                            <div class="red bold"><a href="imanage.php?id=<?=$inv_id?>&amp;action=pay_invoice" class="red"><?=CLICKHERE?>&nbsp;<?=TOPAY?></a></div>
	</fieldset>
<?=$boxbottom?>	</div>


                            <div><?=VIEWANDPAY?></div>
                            <div><?=THANKYOUBLURB?> <?=$companyname?>!</div>
                        <?php } ?>
							<div class="ac p-20"><?=$payment_images?></div>
                    </td>
                </tr>
            </table>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
