<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="payment-page">
   <tr>
      <td id="tablehead">
         <h1><?=ORDEROVERVIEW?></h1>
      </td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=$dmsg?>
         <?=$boxtop?>
         <table class="width-100 alc">
            <tr>
               <td class="vlt">
                  <table class="width-100 alc">
                     <tr>
                        <td colspan="2" class="ac">
                           <h3><?=ORDERINFO?></h3>
                           <hr>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=NAME?>:</strong></div>
                                    <div class="col-md-8"><?=$userstats[fname]?>&nbsp;<?=$userstats[lname]?></div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=COMPANY?>:</strong></div>
                                    <div class="col-md-8"><?=$userstats[org]?></div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=PHONE?>:</strong></div>
                                    <div class="col-md-8"><?=$userstats[phone]?></div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=EMAILADDRESS?>:</strong></div>
                                    <div class="col-md-8"><?=$userstats[email]?></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=ORDERDATE?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="green bold"><?=$cdate?></div>
                                    </div>
                                 </div>
                                 <?php if($total_domain_charge > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALDOMAIN?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_domain_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php if($total_extras > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALEXTRAS?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_extras?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php if($drams_ver=="plus"){ ?>
                                 <?php if($total_hosting_charge > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALHOSTING?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_hosting_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php if($total_servers_charge > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALSERVERS?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_servers_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php if($total_setup_charge > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=SETUPFEES?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_setup_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php if($total_addon_charge > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALADDON?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_addon_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php if($total_other_charge > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALOTHER?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_other_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <?php } ?>
                                 <?php if($total_discount > 0){ ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=DISCOUNTS?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="green">-<?=LCURRENCYSYMBOL?><?=$total_discount?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=SUBTOTAL?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$sub_total?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TAXDUE?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="blue"><?=LCURRENCYSYMBOL?><?=$total_tax?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4"><strong><?=TOTALDUE?>:</strong></div>
                                    <div class="col-md-8">
                                       <div class="red"><?=LCURRENCYSYMBOL?><?=$total_charge?> <?=RCURRENCYSYMBOL?></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <td class="vlt">
                  <table class="width-100">
                     <tr>
                        <td class="ac">
                           <br>
                           <h3><?=PURCHASEOVERVIEW?></h3>
                        </td>
                     </tr>
                     <tr>
                        <td class="vlt">
                           <table class="width-100 data cart-table"><?=$cart?></table>
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <td class="vlt">
                  <?php if ($hasdomain==1){ ?>
                  <form method="post" id="payform1" name="payform1" action="payment.php"onsubmit="submitonce(this); showObject(false,true);">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="ac">
                              <h3><?=$pmsg?></h3>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="ac"><select name="profileid" class="width-40"><?=$profile_group?></select></div>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="ac"><select name="profileid2" class="width-40"><?=$profile_group?></select></div>
                        </div>
                     </div>
                     <?php if(stristr($cc_group,"<div class=\"error\">")){?>
                     <table class="width-100 data">
                        <tr>
                           <td class="ac">
                              <h3><?=PAYMENTOPTIONS?></h3>
                           </td>
                        </tr>
                        <tr>
                           <td class="ac">
                              <div align="center"><?=$cc_group?></div>
                           </td>
                        </tr>
                     </table>
                     <?php }else{ ?>
                     <table class="width-100">
                        <tr>
                           <td class="ac">
														 	<br>
                              <h3><?=PAYMENTOPTIONS?></h3>
															<hr>
                           </td>
                        </tr>
                        <tr>
                           <td class="ac">
                              <div align="center"><?=$cc_group?></div>
                           </td>
                        </tr>
                        <tr>
                           <td class="ac p-10">
                              <?=$hiddeninc?>
                              <table class="width-50 alc">
                                 <tr>
                                    <td class="ar vlt">
                                       <div align="right"><input type="checkbox" name="agree" value="1" />&nbsp;</div>
                                    </td>
                                    <td class="al vlt"><?=AGREE?></td>
                                 </tr>
                                 <tr>
                                    <td class="ac vlt" colspan="2"><br><input type="submit" name="submit" value="<?=SUBMIT?>" /></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                     <?php } ?>
                  </form>
                  <?php }else{ ?>
                  <?php if(stristr($cc_group,"<div class=\"error\">")){?>
                  <table class="width-100">
                     <tr>
                        <td class="ac">
                           <h3><?=PAYMENTOPTIONS?></h3>
                        </td>
                     </tr>
                     <tr>
                        <td class="ac">
                           <div align="center"><?=$cc_group?></div>
                        </td>
                     </tr>
                  </table>
                  <?php }else{ ?>
                  <form method="post" action="payment.php" name="payform1" action="payment.php"onsubmit="submitonce(this); showObject(false,true);">
                     <table class="width-100">
                        <tr>
                           <td class="ac"><h3><?=PAYMENTOPTIONS?></h3></td>
                        </tr>
                        <tr>
                           <td class="ac">
                              <div align="center"><?=$cc_group?></div>
                           </td>
                        </tr>
                        <tr>
                           <td class="ac p-10">
                              <?=$hiddeninc?>
                              <table class="width-50 alc">
                                 <tr>
                                    <td class="ar vlt">
                                       <div align="right"><input type="checkbox" name="agree" value="1" />&nbsp;</div>
                                    </td>
                                    <td class="al"><?=AGREE?></td>
                                 </tr>
                                 <tr>
                                    <td class="ac vlt" colspan="2"><input type="submit" name="submit" value="<?=SUBMIT?>" /></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </form>
                  <?php } ?>
                  <?php } ?>
               </td>
            </tr>
         </table>
         <?=$boxbottom?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
