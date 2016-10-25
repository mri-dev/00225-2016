<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead">
         <h1><?=PAYINVTITLE?></h1>
      </td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=$dmsg?>
         <?=$boxtop?>
         <table class="width-100 alc">
            <tr>
               <td class="vlt">
								 <fieldset>
								 	<legend><?=PAYINFO?></legend>
									<div class="row">
										<div class="col-md-6">
											<strong><?=INVID?>:</strong>
											<?=$display_arr['ID']?>
										</div>
										<div class="col-md-6">
											<strong><?=TOTALDUE?>:</strong>
											<?=$display_arr['total_charge']?>
										</div>
									</div>
								 </fieldset>
								 <fieldset>
								 	<legend><?=PAYMENTOPTIONS?></legend>
									<?php if(stristr($cc_group,"<div class=\"error\">")){ ?>
										<div class="row">
											<div class="col-md-12">
												<?=$cc_group?>
												<?=$hiddeninc?>
											</div>
										</div>
									<?php }else{ ?>
										<form method="post" id="payform1" name="payform1" class="awform" action="pay_invoice.php" onsubmit="submitonce(this); showObject(false,true);" style="margin:0;padding:0;">
										<div class="row">
											<div class="col-md-12">
												<?=$cc_group?>
												<?=$hiddeninc?>
												<hr>
												<div class="ac"><input type="submit" name="submit" class="btn-green" value="<?=SUBMIT?>" /></div>
												<br>
												<p class="ac"><?=THANKYOU?></p>
											</div>
										</div>
										</form>
									<?php } ?>
								 </fieldset>
               </td>
            </tr>
         </table>
         <?=$boxbottom?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
