<?=$header?>
<?=$top?>

<!-- Contents /s -->
<table id="mainData" class="account-page">
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
               <td class="width-100 vlt">
                  <?php } ?>
                  <form action="welcome.php" method="post" name="theForm2" class="awform" onsubmit="submitonce(this); showObject(true,false);">
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=QUICKMANAGE?></span></legend>
                        <div class="domain-search-welcome">
                          <input type="text" name="qdomain" id="fe-searchdomain" class="welcomeDomainSearch" value="<?=QMANAGEBUTTON?>" onclick="if(this.value=='<?=QMANAGEBUTTON?>')this.value='';" onblur="if(this.value=='')this.value='<?=QMANAGEBUTTON?>';" />
                          <input type="hidden" name="qmanage" value="1" />
                          <input type="submit" name="submit" value="<?=QUICKMANAGECLICK?>" />
                        </div>
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
                                <div class="stat-head-title">Pénzügyek</div>
                                <div class="user-stat-holder">
                                <?php if($_SESSION[subuser]){ ?>
                                <div class="row">
                                  <div class="col-md-6 rhead">
                                    <?=CURRENTDUE?>
                                  </div>
                                  <div class="col-md-6 rvar">
                                    <?=LCURRENCYSYMBOL?>***.** <?=RCURRENCYSYMBOL?>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 rhead">
                                    <?=PASTDUE?>
                                  </div>
                                  <div class="col-md-6 rvar">
                                    <?=LCURRENCYSYMBOL?>***.** <?=RCURRENCYSYMBOL?>
                                  </div>
                                </div>
                                <?php }else{ ?>
                                <div class="row">
                                  <div class="col-md-6 rhead">
                                    <?=CURRENTDUE?>
                                  </div>
                                  <div class="col-md-6 rvar">
                                    <?=LCURRENCYSYMBOL?><?=$invoice_stats[0]?> <?=RCURRENCYSYMBOL?>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 rhead">
                                    <?=PASTDUE?>
                                  </div>
                                  <div class="col-md-6 rvar">
                                    <?=LCURRENCYSYMBOL?><?=$invoice_stats[1]?> <?=RCURRENCYSYMBOL?>
                                  </div>
                                </div>
                                <?php } ?>
                                <hr />
                                <?php if ($usecredits == "True"){ ?>
                                  <?php if($_SESSION[subuser]){ ?>
                                    <div class="row">
                                      <div class="col-md-6 rhead">
                                        <?=PENDINGCREDITS?>
                                      </div>
                                      <div class="col-md-6 rval">
                                        <?=LCURRENCYSYMBOL?>***.** <?=RCURRENCYSYMBOL?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 rhead">
                                        <?=LIVECREDITS?>
                                      </div>
                                      <div class="col-md-6 rvar">
                                        <?=LCURRENCYSYMBOL?>***.** <?=RCURRENCYSYMBOL?>
                                      </div>
                                    </div>
                                    <?php if ($use_acct_refill == "1"){ ?>
                                    <div class="row">
                                      <div class="col-md-12"><a class="action-btn" href="<?=$securebase?>/acctrefill.php"><?=REFILLACCTLINK?> <i class="fa fa-upload"></i></a></div>
                                    </div>
                                    <?php } ?>
                                  <?php }else{ ?>
                                    <div class="row">
                                      <div class="col-md-6 rhead">
                                        <?=PENDINGCREDITS?>
                                      </div>
                                      <div class="col-md-6 rvar orange">
                                        <?=LCURRENCYSYMBOL?><?=$pendingcredit?> <?=RCURRENCYSYMBOL?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 rhead">
                                        <?=LIVECREDITS?>
                                      </div>
                                      <div class="col-md-6 rvar green">
                                        <?=LCURRENCYSYMBOL?><?=$availablecredit?> <?=RCURRENCYSYMBOL?>
                                      </div>
                                    </div>
                                    <hr>
                                    <?php if ($use_acct_refill == "1"){ ?>
                                      <a class="action-btn" href="<?=$securebase?>/acctrefill.php"><?=REFILLACCTLINK?> <i class="fa fa-upload"></i></a>
                                      <?php if($dontpayallwcreds=="1"){ ?>
                                        <a href="#" class="action-btn" onclick='window.open("<?=$securebase?>/viewitem.php?action=view_cred_usage&amp;uid=<?=$userid?>","viewer","width=530,height=515,status=yes,scrollbars=1,resizable=1");return false;'><?=ASSIGNCREDS?></a>
                                      <?php } ?>
                                    <?php } ?>

                                  <?php } ?>
                                <?php }else{ ?>
                                  <div class="row">
                                    <div class="col-md-6 rhead"><?=TOTALDOMAINS?></div>
                                    <div class="col-md-6 rvar"><a href="<?=$base?>/manage.php"><?=$numdomains?></a></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 rhead"><?=TOTALHOSTED?></div>
                                    <div class="col-md-6 rvar"><a href="<?=$securebase?>/hmanage.php"><?=$numhosted?></a></div>
                                  </div>
                                  <?php if ($support_link == "$securebase/helpdesk.php?search=open") { ?>
                                  <div class="row">
                                    <div class="col-md-6 rhead"><?=WTICKETS?></div>
                                    <div class="col-md-6 rvar"><a href="<?=$securebase?>/helpdesk.php"><?=$total_tickets?></a></div>
                                  </div>
                                  <?php }else{ ?>
                                  <div class="row">
                                    <div class="col-md-6 rhead"><?=TOTALOTHER?></div>
                                    <div class="col-md-6 rvar"><a href="<?=$securebase?>/omanage.php"><?=$total_other?></a></div>
                                  </div>
                                  <?php } ?>
                                <?php } ?>
                                </div>
                              </td>
                              <td class="vlt al width-50 vlt accountdetails">
                                <div class="stat-head-title">Ügyfélkezelés</div>
                                <div class="user-stat-holder">
                                  <div class="row">
                                    <div class="col-md-6 rhead"><?=DOMAINPROFILES?></div>
                                    <div class="col-md-6 rvar"><a class="action-box" href="<?=$securebase?>/profilemgmt.php"><?=$counts[domainprofiles]?></a></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 rhead"><?=USERSUBACCT?></div>
                                    <div class="col-md-6 rvar"><a class="action-box" href="<?=$securebase?>/subacctmgmt.php"><?=$counts[subaccounts]?></a></div>
                                  </div>
                                  <hr>
                                  <a class="action-btn" href="<?=$securebase?>/editprofile.php"><?=EDITACCTINFO?> <i class="fa fa-gear"></i></a>
                                </div>
                              </td>
                           </tr>
                        </table>
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
                        <a class="action-btn" href="<?=$securebase?>/journal.php"><?=VIEWALL?> <i class="fa fa-eye"></i></a>
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
