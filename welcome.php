<?=$header?>
<?=$top?>

<!-- Contents /s -->
<table id="mainData">
   <tr>
      <td id="tablehead"><h1><?=MEMBERHOMETITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=WELCOMEBLURB?>
         <?=$alertext?>
         <?=$invalert?>
         <div class="underline bold">
            <?=HELLO?>,&nbsp;<?=ucfirst($newuid)?><!-- (<?=$first_name?> <?=$last_name?>) -->
         </div>
         <p class="al small"><b><?=LASTLOGIN?></b>:&nbsp;<?=$lastlogin?> &mdash; <b><?=FRMIP?></b>: &nbsp;<?=$lastip?></p>
         <?php if($_SESSION['subuser']){echo "<br /><p class=\"bold center\">".SUBUSERLEVEL."</p>";} ?>
         <?php if (!$clientportal) { ?>
         <div style="height:10px; clear:both;"></div>
         <table class="width-99 alc">
            <tr>
               <td class="width-20 vlt"><?=$umenu?></td>
               <td class="width-1">&nbsp;</td>
               <td class="width-100 vlt" style="margin:0; padding:0;">
                  <?php } ?>
                  <form action="welcome.php" method="post" name="theForm2" class="awform" onsubmit="submitonce(this); showObject(true,false);">
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=QUICKMANAGE?></span></legend>
                        <table class="width-100">
                           <tr>
                              <td class="al paddZero">
                                 <input type="text" name="qdomain" id="fe-searchdomain" class="welcomeDomainSearch" value="<?=QMANAGEBUTTON?>" onclick="if(this.value=='<?=QMANAGEBUTTON?>')this.value='';" onblur="if(this.value=='')this.value='<?=QMANAGEBUTTON?>';" />
                                 <input type="hidden" name="qmanage" value="1" />
                                 <input type="submit" name="submit" value="<?=QUICKMANAGECLICK?>" />
                              </td>
                           </tr>
                        </table>
                     </fieldset>
                     <?=$boxbottom?>
                  </form>
                  <div id="userPanel">
                     <!-- Tabs /s -->
                     <div class="tabPanel"><?=WACCTINFO?></div>
                     <div>
                        <div class="yourstats"><?=YOURSTATS?></div>
                        <table class="width-100">
                           <tr>
                              <td class="width-50 vlt" id="userStatsLeft">
                                 <table class="width-100">
                                    <?php if($_SESSION[subuser]){ ?>
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="4"><img src="templates/<?=$templatedir?>/images/money-trans.png" alt="$$" width="16" height="16" /></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=CURRENTDUE?>:&nbsp;</td>
                                       <td><?=LCURRENCYSYMBOL?>***.**<?=RCURRENCYSYMBOL?></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=PASTDUE?>:&nbsp;</td>
                                       <td><span class="red"><?=LCURRENCYSYMBOL?>***.**<?=RCURRENCYSYMBOL?></span></td>
                                    </tr>
                                    <?php }else{ ?>
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="4"><img src="templates/<?=$templatedir?>/images/money-trans.png" alt="$$" width="16" height="16" /></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=CURRENTDUE?>:&nbsp;</td>
                                       <td><?=LCURRENCYSYMBOL?><?=$invoice_stats[0]?><?=RCURRENCYSYMBOL?></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=PASTDUE?>:&nbsp;</td>
                                       <td><span class="red"><?=LCURRENCYSYMBOL?><?=$invoice_stats[1]?><?=RCURRENCYSYMBOL?></span></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                       <td class="ac bold" colspan="3">[<a href="<?=$securebase?>/imanage.php"><?=VIEWPAY?></a>]</td>
                                    </tr>
                                 </table>
                                 <hr />
                                 <table class="width-100">
                                    <?php if ($usecredits == "True"){ ?>
                                    <?php if($_SESSION[subuser]){ ?>
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="2"><img src="templates/<?=$templatedir?>/images/money-trans.png" alt="$$" width="16" height="16" /></td>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=PENDINGCREDITS?>:&nbsp;</td>
                                       <td><span class="orange"><?=LCURRENCYSYMBOL?>***.**<?=RCURRENCYSYMBOL?></span></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=LIVECREDITS?>:&nbsp;</td>
                                       <td><span class="green"><?=LCURRENCYSYMBOL?>***.**<?=RCURRENCYSYMBOL?></span></td>
                                    </tr>
                                    <?php if ($use_acct_refill == "1"){ ?>
                                    <tr>
                                       <td class="ac bold" colspan="3">[<a href="<?=$securebase?>/acctrefill.php"><?=REFILLACCTLINK?></a>]</td>
                                    </tr>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="3"><img src="templates/<?=$templatedir?>/images/money-trans.png" alt="$$" width="16" height="16" /></td>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=PENDINGCREDITS?>:&nbsp;</td>
                                       <td><span class="orange"><?=LCURRENCYSYMBOL?><?=$pendingcredit?><?=RCURRENCYSYMBOL?></span></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=LIVECREDITS?>:&nbsp;</td>
                                       <td><span class="green"><?=LCURRENCYSYMBOL?><?=$availablecredit?><?=RCURRENCYSYMBOL?></span></td>
                                    </tr>
                                    <?php if ($use_acct_refill == "1"){ ?>
                                    <tr>
                                       <td class="ac bold" colspan="3">[<a href="<?=$securebase?>/acctrefill.php"><?=REFILLACCTLINK?></a>]</td>
                                    </tr>
                                    <?php if($dontpayallwcreds=="1"){ ?>
                                    <tr>
                                       <td class="ac bold" colspan="3">[<a href="#" onclick='window.open("<?=$securebase?>/viewitem.php?action=view_cred_usage&amp;uid=<?=$userid?>","viewer","width=530,height=515,status=yes,scrollbars=1,resizable=1");return false;'><?=ASSIGNCREDS?></a>]</td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="4"><img src="templates/<?=$templatedir?>/images/info-trans.png" alt="!" width="16" height="16" /></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=TOTALDOMAINS?>:&nbsp;</td>
                                       <td>[<a href="<?=$base?>/manage.php"><?=$numdomains?></a>]</td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=TOTALHOSTED?>:&nbsp;</td>
                                       <td>[<a href="<?=$securebase?>/hmanage.php"><?=$numhosted?></a>]</td>
                                    </tr>
                                    <?php if ($support_link == "$securebase/helpdesk.php?search=open") { ?>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=WTICKETS?>:&nbsp;</td>
                                       <td>[<a href="<?=$securebase?>/helpdesk.php"><?=$total_tickets?></a>]</td>
                                    </tr>
                                    <?php }else{ ?>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=TOTALOTHER?>:&nbsp;</td>
                                       <td>[<a href="<?=$securebase?>/omanage.php"><?=$total_other?></a>]</td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                 </table>
                              </td>
                              <td class="vlt al width-50 vlt">
                                 <table class="width-100">
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="3"><img src="templates/<?=$templatedir?>/images/people-trans.png" alt="people" width="22" height="16" /></td>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=DOMAINPROFILES?>:&nbsp;</td>
                                       <td>[<a href="<?=$securebase?>/profilemgmt.php"><?=$counts[domainprofiles]?></a>]</td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=USERSUBACCT?>:&nbsp;</td>
                                       <td>[<a href="<?=$securebase?>/subacctmgmt.php"><?=$counts[subaccounts]?></a>]</td>
                                    </tr>
                                    <tr>
                                       <td class="ac bold" colspan="2">[<a href="<?=$securebase?>/editprofile.php"><?=EDITACCTINFO?></a>]</td>
                                    </tr>
                                 </table>
                                 <hr />
                                 <?php if ($cc_link==1){?>
                                 <table class="width-100">
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="3"><img src="templates/<?=$templatedir?>/images/creditcards-trans.png" alt="creditcards" width="16" height="16" /></td>
                                       <?php if (trim($cc_info[2]) != "") {?>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=CARDNUMBER?>:&nbsp;</td>
                                       <td>*****<?=$cc_info[2]?></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=CARDEXP?>:&nbsp;</td>
                                       <td><?=$cc_info[0]?>/<?=$cc_info[1]?></td>
                                    </tr>
                                    <?php }else{ ?>
                                    <td class="al width-30 bold" nowrap="nowrap"><?=CARDNUMBER?>:&nbsp;</td>
                                    <td>N/A</td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap"><?=CARDEXP?>:&nbsp;</td>
                                       <td>N/A</td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                       <td class="ac bold" colspan="3">[<a href="view_cc.php" onclick='window.open("<?=$securebase?>/viewitem.php?action=viewcc&amp;uid=<?=$userid?>","viewer","width=475,height=515,status=yes,scrollbars=1,resizable=1");return false;'><?=VIEWEDIT?></a>]</td>
                                    </tr>
                                 </table>
                                 <?php }else{ ?>
                                 <table class="width-100">
                                    <tr>
                                       <td class="al width-1 vlt" nowrap="nowrap" rowspan="4"><img src="templates/<?=$templatedir?>/images/info-trans.png" alt="!" width="16" height="16" /></td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap">[<a href="<?=$kb_link?>"><?=WKBLINK?></a>]</td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap">[<a href="<?=$securebase?>/terms.php" rel="external"><?=WTERMS?></a>]</td>
                                    </tr>
                                    <tr>
                                       <td class="al width-30 bold" nowrap="nowrap">[<a href="helpdesk.php"><?=WHELPDESK?></a>]</td>
                                    </tr>
                                 </table>
                                 <?php } ?>
                              </td>
                           </tr>
                        </table>
                        <hr />
                        <div>
                           <?=$boxtop?>
                           <table class="width-100 data">
                              <tr>
                                 <td class="boxtitle  width-70"><span class="boxlegend"><?=WITEM?></span></td>
                                 <td class="boxtitle ac width-15"></td>
                                 <td class="boxtitle ac width-15"></td>
                              </tr>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBERNUMDOMAINS?></td>
                                 <td class="data bold width-15 ac"><?=$numdomains?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/manage.php"><?=VIEWEDIT?></a></td>
                              </tr>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBER30DAYS?></td>
                                 <td class="data bold width-15 ac"><?=$numedomains['thirty']?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/manage.php?search=1&amp;list=30day"><?=VIEWEDIT?></a></td>
                              </tr>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBEREXPIRED?></td>
                                 <td class="data bold width-15 ac"><?=$numedomains['expired']?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/manage.php?search=1&amp;list=expired"><?=VIEWEDIT?></a></td>
                              </tr>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBERTRANSFERS?></td>
                                 <td class="data bold width-15 ac"><?=$numedomains['pendingtransfer']?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/manage.php?search=1&amp;list=transfer"><?=VIEWEDIT?></a></td>
                              </tr>
                              <?php if($usehosting==1 and $hosting_active==1){ ?>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBERHOSTING?></td>
                                 <td class="data bold width-15 ac"><?=$numhosted?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/hmanage.php"><?=VIEWEDIT?></a></td>
                              </tr>
                              <?php } ?>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBEROTHER?></td>
                                 <td class="data bold width-15 ac"><?=$total_other?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/omanage.php"><?=VIEWEDIT?></a></td>
                              </tr>
                              <?php if($usehosting==1 and $hosting_active==1){ ?>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBERSERVERS?></td>
                                 <td class="data bold width-15 ac"><?=$numservers?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/smanage.php"><?=VIEWEDIT?></a></td>
                              </tr>
                              <?php } ?>
                              <?php if($usehosting==1 and $seoactive=="1"){ ?>
                              <tr>
                                 <td class="data width-70 al"><?=MEMBERSEOS?></td>
                                 <td class="data bold width-15 ac"><?=$numseo?></td>
                                 <td class="data bold width-15 ac"><a href="<?=$base?>/seomanage.php"><?=VIEWEDIT?></a></td>
                              </tr>
                              <?php } ?>
                           </table>
                           <?=$boxbottom?>
                        </div>
                     </div>
                     <!---->
                     <div class="tabPanel"><?=RECENTTRANS?></div>
                     <div>
                        <?=$boxtop?>
                        <table class="width-100 data">
                           <tr>
                              <td class="boxtitle bold al"><?=WDATE?></td>
                              <td class="boxtitle bold al"><?=WTYPE?></td>
                              <td class="boxtitle bold al"><?=PAYTYPE?></td>
                              <td class="boxtitle bold al"><?=INVOICE?></td>
                              <td class="boxtitle bold al"><?=AMOUNT?></td>
                              <td class="boxtitle bold al">&nbsp;</td>
                           </tr>
                           <?=$reglist?>
                        </table>
                        <?=$boxbottom?>
                        <p class="center">[<a href="<?=$securebase?>/journal.php"><?=VIEWALL?></a>]</p>
                     </div>
                     <!-- Tabs /e -->
                  </div>
                  <?php if (!$clientportal) { ?>
               </td>
            </tr>
         </table>
         <?php } ?>
         <!-- Main contents /e -->
      </td>
   </tr>
</table>
<script type="text/javascript" src="js/common/SimpleTabs.js"></script>
<script type="text/javascript" src="js/common/Autocompleter.js"></script>
<script type="text/javascript" src="js/common/Autocompleter.Request.js"></script>
<script type="text/javascript" src="js/common/Observer.js"></script>
<script type="text/javascript">
   window.addEvent('domready', function() {
   	var categories = new SimpleTabs('userPanel', { selector: 'div.tabPanel' });
   	var news = new SimpleTabs('userStats', { selector: 'div.statPanel' });
   	//Comment/Uncomment out the following line if you want a mouseover event to activate the tabs. Otherwise, leave it commented off.
   	//Categories for the tab 3 categories/News for the news sub-panels under the news panels.

   	//categories.tabs.each(function(elem, index) { elem.toggle.addEvent('mouseenter', function() { this.fireEvent('click'); }); });
   	//news.tabs.each(function(elem, index) { elem.toggle.addEvent('mouseenter', function() { this.fireEvent('click'); }); });

   	//Domain autocomplete!
   	new Autocompleter.Request.JSON('fe-searchdomain', '<?=$base?>/domainsearch.php', {
   		'postVar': 'qdomain',
   	//Determines the number of maximum results per-search.
   		'maxChoices': '15'
   	});
   });
</script>
<!-- Contents /e -->
<?=$bottom?>
