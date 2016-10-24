<?=$header?>
<?=$top?>
<script type="text/javascript">window.addEvent('domready', function() { $$('.cartRemoveItem').each(function(el) { el.addEvent('click', function(e) { e.stop(); if (confirm('<?=REMOVEFROMCART?>')) { window.location = el.get('href'); } });  }); });</script>
<!-- Contents /s -->
<div id="cart">
   <?php if($config_extras!=1 and !$check_preconfig) { $summary = "1"; } ?>
   <table id="mainData">
      <tr>
         <td id="tablehead">
					 <h1><?=$carttitle?>&nbsp;<?=$help_icon?></h1>
           <div class="subcartmsg"><?=$cartblurb?></div>
           <div class="cart-msg"><?=$dmsg?></div>
				 </td>
      </tr>
      <tr>
         <td id="mainTD">
            <table class="width-100 data">
               <tr>
                  <td<?php if ($summary == "1") { echo " colspan=\"2\""; } ?>>
                     <div class="awform cart-container">
                        <?=$boxtop?>
                        <fieldset>
                           <legend><span class="boxlegend"><?=$header1d?></span></legend>
                           <?=$row2?>
                           <?php if($usehosting==1 and $config_extras!=1) { echo $row3; } ?>
                           <?=$row4?>
                           <?php if (!$summary and !$needsform) { echo "</table></form>"; } ?>
                        </fieldset>
                        <?=$boxbottom?>
                     </div>
                  </td>
               </tr>
            </table>
						<?php if ($summary == "1") { ?>
							<div class="row">
								<div class="col-md-6">
									<?php if($coupons==1){ include(WORKDIR."/templates/{$templatedir}/cartcoupons.php"); } ?>
								</div>
								<div class="col-md-6">
									<?php include(WORKDIR."/templates/{$templatedir}/cartordersummary.php"); ?>
								</div>
							</div>
						<?php } ?>
						<div class="labels-title"><?=SPINLEGEND?></div>
						<table class="width-100 labels">
							 <tr>
									<td><?=ORDERLEGEND1?></td>
									<td><?=ORDERLEGEND2?></td>
							 </tr>
						</table>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
