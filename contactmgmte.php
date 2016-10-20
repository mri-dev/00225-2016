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
							<form method="post" action="contactmgmt.php" id="form1" name="form1" onsubmit="submitonce(this); showObject(false,true);" class="awform">
								 <input type="hidden" name="action" value="save" />
								 <input type="hidden" name="id" value="<?php echo $id; ?>" />
								 <input type="hidden" name="subaction" value="<?php echo $subaction; ?>" />
								 <input type="hidden" name="addnew" value="<?php echo $addnew; ?>" />
								 <?=$boxtop?>
								 <fieldset>
										<legend><span class="boxlegend"><?=CONTACTTITLE?></span></legend>
										<table class="width-100 formtable">
											 <tr>
													<td class="ac vlt" colspan="2"><?=CONTACTBLURB?><strong><?=PROFILEEMAIL?> <?=$currentemail?></strong><br /><br /></td>
											 </tr>
											 <tr>
													<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=FRIENDLYNAME?>:&nbsp;</td>
													<td><input type="text" name="name" id="aname" maxlength="60" value="<?=$name?>" class="validate['required'] width-75" /></td>
											 </tr>
											 <tr>
													<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=TYPE?>:&nbsp;</td>
													<td>
														 <select name="type" id="type" class="width-75">
																<option value="1" <?php if($type=="1"){echo " selected=\"selected\"";} ?>><?=EMAILCONTACT?></option>
																<?php if($smsisactive=="1" and $nousersms!="1"){ ?>
																<option value="2"<?php if($type=="2"){echo " selected=\"selected\"";} ?>><?=SMSCONTACT?></option>
																<?php } ?>
														 </select>
													</td>
											 </tr>
											 <tr>
													<td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=ASSIGNEDTO?>:&nbsp;</td>
													<td>
														 <select name="config1" id="config1" class="width-75">
																<option value="10" <?php if($config1=="10"){echo " selected=\"selected\"";} ?>><?=ALLCONTACT?></option>
																<?php if($bypassadminccstop=="1"){ ?>
																<option value="1" <?php if($config1=="1"){echo " selected=\"selected\"";} ?>><?=ADMINCONTACT?></option>
																<?php } ?>
																<?php if($supportisactive=="1"){ ?>
																<option value="2"<?php if($config1=="2"){echo " selected=\"selected\"";} ?>><?=SUPPORTCONTACT?></option>
																<?php } ?>
																<?php if($bypasssalesccstop=="1"){ ?>
																<option value="3"<?php if($config1=="3"){echo " selected=\"selected\"";} ?>><?=SALESCONTACT?></option>
																<?php } ?>
																<option value="7"<?php if($config1=="7"){echo " selected=\"selected\"";} ?>><?=BILLINGCONTACT?></option>
														 </select>
													</td>
											 </tr>
											 <tr>
													<td class="ac" nowrap="nowrap"><em class="red">*</em><?=CONTACTINFO?>:&nbsp;</td>
													<td><input type="text" name="contactinfo" id="contactinfo" maxlength="128" value="<?=$contactinfo?>" class="validate['required'] width-75" /></td>
											 </tr>
											 <?php if ($addnew!="2" and $addnew!="1"){ ?>
											 <tr>
													<td class="vlt ac" colspan="2">
														<input type="checkbox" name="delete" value="1" /><?=DELETEPROFILE?>
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
							<div class="ac"><a href="contactmgmt.php" class="rtrntomgmt"><?=CANCELCLICK?></a></div>
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
