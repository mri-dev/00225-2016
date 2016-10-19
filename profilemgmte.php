<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead"><h1><?=PMGMTTITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
				<?php if (!$clientportal) { ?>
   	    <div class="account-page-holder">
   	      <div class="sidemenu vlt">
   	        <?=$umenu?>
   	      </div>
   	      <div class="account-contant-container">
						<p class="reqfieldsnote"><?=REQFIELDSNOTE?></p>
						<?=$genMsg?>
						<?=$cErrorMsg?>
						<form method="post" action="profilemgmt.php" id="form1" name="form1" onsubmit="submitonce(this); showObject(false,true);" class="awform">
							 <input type="hidden" name="action" value="save" />
							 <input type="hidden" name="id" value="<?php echo $id; ?>" />
							 <input type="hidden" name="subaction" value="<?php echo $subaction; ?>" />
							 <input type="hidden" name="addnew" value="<?php echo $addnew; ?>" />
							 <input type="hidden" name="oldemail" value="<?php echo $oldemail; ?>" />
							 <input type="hidden" name="config1" value="<?php echo $config1; ?>" />
							 <input type="hidden" name="config2" value="<?php echo $config2; ?>" />
							 <input type="hidden" name="config3" value="<?php echo $config3; ?>" />
							 <input type="hidden" name="config4" value="<?php echo $config4; ?>" />
							 <input type="hidden" name="config5" value="<?php echo $config5; ?>" />
							 <input type="hidden" name="config6" value="<?php echo $config6; ?>" />
							 <input type="hidden" name="config7" value="<?php echo $config7; ?>" />
							 <?=$boxtop?>
							 <fieldset>
									<legend><span class="boxlegend"><?=DOMAINCONTACTINFO?></span></legend>
									<table class="width-100 formtable">
										 <tr>
												<td class="ac vlt bold" colspan="2"><?=DOMAINCONTACTBLURB?></td>
										 </tr>
										 <tr>
												<td class="ac vlt" colspan="2">
													 <div align="center" class="defaultprofile">
															<p class="width-40"><input type="checkbox" name="defaultprofile" id="adefaultprofile" value="1" <?php if($defaultprofile==1 or $subaction=="cart"){echo 'checked="checked"';}?> class="width-75" />&nbsp;<?=DEFAULTPROFILE?></p>
													 </div>
												</td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=PROFILENAME?>:&nbsp;</td>
												<td><input type="text" name="name" id="aname" maxlength="60" value="<?=$name?>" class="validate['required'] width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=FIRSTNAME?>:&nbsp;</td>
												<td><input type="text" name="afname" id="afname" maxlength="60" value="<?=$afname?>" class="validate['required'] width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=LASTNAME?>:&nbsp;</td>
												<td><input type="text" name="alname" id="alname" maxlength="60" value="<?=$alname?>" class="validate['required'] width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=EMAILADDRESS?>:&nbsp;</td>
												<td><input type="text" name="aemail" id="aemail" maxlength="128" value="<?=$aemail?>" class="validate['required','email'] width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=ADDRESS?>:&nbsp;</td>
												<td><input type="text" name="aadd1" id="aadd1" maxlength="60" value="<?=$aadd1?>" class="validate['required'] width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=CITY?>:&nbsp;</td>
												<td><input type="text" name="acity" id="acity" maxlength="60" value="<?=$acity?>" class="validate['required'] width-75" /></td>
										 </tr>
										 <!-- Select Residence /s -->
										 <tr>
												<td colspan="2" class="p-20 residenceTD">
													 <fieldset>
															<legend><span class="red"><span class="residenceLegend"><?=SELECTRESIDENCE?></span></span></legend>
															<table class="width-100 alc residenceTable">
																 <tr>
																		<td class="ar vlt width-25 radioTD" nowrap="nowrap">
																			 <p><input type="radio" value="1" name="arspchoice" <?php if ( $arspchoice == "1" || $arspchoice == "" ) { echo 'checked="checked"'; }?> /><span class="residenceLabelSpan"><?=STATE?>&nbsp;</span></p>
																		</td>
																		<td class="residenceFieldTD"><select name="astrStateValue" class="width-75"><?php include( WORKDIR."/aStateList.php" ); ?></select></td>
																 </tr>
																 <tr>
																		<td class="ar vlt width-25 radioTD" nowrap="nowrap">
																			 <p><input type="radio" value="2" name="arspchoice" <?php if ( $arspchoice == "2" ) { echo 'checked="checked"'; } ?> /><span class="residenceLabelSpan"><?=PROVINCE?>&nbsp;</span></p>
																		</td>
																		<?php if($usedpprovincelist and file_exists(WORKDIR."/aProvinceList.php")){ ?>
																		<td class="residenceFieldTD"><select name="aprovince" size="1" class="width-75"><?php include( WORKDIR."/aProvinceList.php" ); ?></select></td>
																		<?php }else{ ?>
																		<td class="residenceFieldTD"><input type="text" name="aprovince" maxlength="60" value="<?php if ( $arspchoice == "2") { echo $aprovince; } ?>" class="width-75" /></td>
																		<?php } ?>
																 </tr>
																 <tr>
																		<td class="ar vlt width-25 radioTD" nowrap="nowrap">
																			 <p><input type="radio" value="3" name="arspchoice" <?php if ($arspchoice == "3") { echo 'checked="checked"'; }?> /><span class="residenceLabelSpan"><?=NA?>&nbsp;</span></p>
																		</td>
																		<td class="bold residenceNATD"><?=NABLURB?></td>
																 </tr>
															</table>
													 </fieldset>
												</td>
										 </tr>
										 <!-- Select Residence /e -->
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=ZIP?>:&nbsp;</td>
												<td><input type="text" name="azip" id="azip" maxlength="15" value="<?=$azip?>" class="validate['required','alphanum'] width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=COUNTRY?>:&nbsp;</td>
												<td><select name="acountry" id="acountry" class="width-75"><?php include( WORKDIR."/acountrys.php" ); ?></select></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=COUNTRYCODE?>:&nbsp;</td>
												<td><select name="acountrycode" id="acountrycode" class="width-75"><?php include( WORKDIR."/acountrycode.php" ); ?></select></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=PHONE?>:&nbsp;</td>
												<td>
													 <input type="text" name="aphone" id="aphone" maxlength="20" value="<?=$aphone?>" class="validate['required','phone'] width-75" />
													 <p class="bold"><?=PHONEBLURB?></p>
												</td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=ORGANIZATIONNAME?>:&nbsp;</td>
												<td><input type="text" name="aorg" id="aorg" maxlength="60" value="<?=$aorg?>" class="width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=JOBTITLE?>:&nbsp;</td>
												<td>
													 <input type="text" name="ajobtitle" id="ajobtitle" maxlength="120" value="<?=$ajobtitle?>" class="width-75" />
												</td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=FAX?>:&nbsp;</td>
												<td>
													 <input type="text" name="afax" id="afax" maxlength="20" value="<?=$afax?>" class="validate['phone'] width-75" />
													 <br />
													 <span>
													 <?=PHONEBLURB?>
													 </span>
												</td>
										 </tr>
										 <tr>
												<td class="ac vlt bold" colspan="2"><?=NAMESERVERBLURB?></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS1?>:&nbsp;</td>
												<td><input type="text" name="ans1" id="ans1" value="<?=$ans1?>" class="width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS2?>:&nbsp;</td>
												<td><input type="text" name="ans2" id="ans2" value="<?=$ans2?>" class="width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS3?>:&nbsp;</td>
												<td><input type="text" name="ans3" id="ans3" value="<?=$ans3?>" class="width-75" /></td>
										 </tr>
										 <tr>
												<td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS4?>:&nbsp;</td>
												<td><input type="text" name="ans4" id="ans4" value="<?=$ans4?>" class="width-75" /></td>
										 </tr>
										 <?php if ($addnew!="2" and $addnew!="1"){ ?>
										 <tr>
												<td class="vlt bold" colspan="2">
													 <div align="center">
															<p class="red width-25"><input type="checkbox" name="delete" value="1" /><?=DELETEPROFILE?></p>
													 </div>
												</td>
										 </tr>
										 <?php } ?>
									</table>
							 </fieldset>
							 <?=$boxbottom?>
							 <?=$boxtop?>
							 <fieldset>

									<table class="width-100">
										 <tr>
												<td class="ac vlt" colspan="2">
													 <?php
															if ($regstatus == "UnReg") {
																	echo("<input type=\"submit\" name=\"Submit\" value=\"".RESUBMIT."\" />");
															} else {
																	echo("<input type=\"submit\" name=\"Submit\" value=\"".SUBMIT."\" />");
															}
															?>
												</td>
										 </tr>
									</table>
							 </fieldset>
							 <?=$boxbottom?>
						</form>
   	      </div>
   	    </div>
   	    <?php } ?>

				<script language="javascript" type="text/javascript">
					 function isNeeded(name,which) {
						if (name) {
							if (which == "1")  { alert("The fields <?=JOBTITLE?> and <?=FAX?> are now required!"); }
						}
					 }
				</script>
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
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
