<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="editprofile"><table id="mainData" class="account-page">
	<tr>
		<td id="tablehead"><?=EDITPROFILETITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
		<script type="text/javascript" language="javascript">
            window.addEvent('domready', function(){check = new FormCheck('form1', {
                display : {
                    fadeDuration : 50,
                    errorsLocation : 3,
                    indicateErrors : 2,
                    showErrors : 1
                }
            })});
        </script>
		<script language="javascript" type="text/javascript" src="js/common/epjs.js"></script>
		<?php if (!$clientportal) { ?>
        <table class="width-100 alc">
            <tr>
                <td class="width-20 vlt"><?=$umenu?></td>
                <td class="width-1">&nbsp;</td>
                <td class="width-100 vlt">
				<!-- user menu /s -->
		<?php } ?>
			<div class="red ac bold"><?=REQFIELDSNOTE?><br /><?=$genMsg?></div>
			<form method="post" action="editprofile.php" id="form1" name="form1" class="awform">
                <input type="hidden" name="action" value="modify" />
                <input type="hidden" name="oldemail" value="<?php echo $email1; ?>" />
                <input type="hidden" value="1" name="rspchoice" />
			<?php
                if ( $cAction == "modify" ) {
                    if ( $bError == 1 ) {
                        echo $cErrorMsg;
                    } else if ( $bRegistered == 0 ) {
                    } else {
                        echo '<div class="error">'.SOMEERROR.'</div>';
                    }
                }
            ?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=ACCTOPT?></span></legend>
                <table class="width-100 inputform">
                <?php if ( $allow_language == "True" ) { ?>
                	<tr>
                    	<td class="ar vlt width-30" nowrap="nowrap"><?=LANGCHOICE?>:&nbsp;</td>
                        <td><select name="language" id="language" class="width-65"><?php $lang_list=get_lang_dirs($language);echo $lang_list;?></select></td>
                    </tr>
                <?php } ?>
                <?php if ( $selectable_mail == 1 ) {?>
                	<tr>
                    	<td class="ar vlt width-30" nowrap="nowrap"><?=EDITPROFILEMAILTYPE?>:&nbsp;</td>
                        <td><select name="mail_type1" id="mail_type1" class="width-65"><option value="1" <?php if ($mail_type1==1){ echo 'selected="selected"';}?>><?=EDITPROFILETEXT?></option><option value="2" <?php if ($mail_type1==2){ echo 'selected="selected"';}?>><?=EDITPROFILEHTML?></option></select></td>
                    </tr>
				<?php } ?>
                <?php if($uar==1){ ?>
                	<tr>
                    	<td class="ac vlt" colspan="2">
                        <div align="center"><span><input type="checkbox" name="refill_notify" value="1" <?php echo $rn; ?> /> <?=ACCTBALNOTICE?></span><span class="red"><?=LCURRENCYSYMBOL?>&nbsp;</span><input type="text" size="4" class="validate['digit'] ac bold red" name="refill_notify_amount" value="<?=$refill_notify_amount?>" /><?=RCURRENCYSYMBOL?></div>
                        </td>
                    </tr>
                <?php } ?>
                	<tr>
                    	<td class="ac vlt" colspan="2">
                        <div align="center"><span><input type="checkbox" name="mail_list" value="1" <?=$getmail?> /><?=MAILINGLISTCHECK?></span></div>
                        <p class="ac p-5 bold red"><?=MAILINGLISTNOTE?></p>
                        </td>
                    </tr>

                </table>		</fieldset>
				<?=$boxbottom?>

				<?=$boxtop?>
				<fieldset>
				<legend><span class="boxlegend"><?=EDITPROFCONTACTINFO?></span></legend>
                <table class="width-100 inputform">
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($firstnamereq==1){ ?><em class="red">*</em><?php } ?><?=FIRSTNAME?>:&nbsp;</td>
                        <td>
                        <input type="text" name="fname" id="fname" maxlength="60" value="<?=$fname?>" class="<?php if ($firstnamereq==1){ ?>validate['required']<?php } ?> width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($lastnamereq==1){ ?><em class="red">*</em><?php } ?><?=LASTNAME?>:&nbsp;</td>
                        <td>
                        <input type="text" name="lname" id="lname" maxlength="60" value="<?=$lname?>" class="<?php if ($lastnamereq==1){ ?>validate['required']<?php } ?> width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($orgreq==1){ ?><em class="red">*</em><?php } ?><?=ORGANIZATIONNAME?>:&nbsp;</td>
                        <td>
                        <input type="text" name="org" id="org" maxlength="60" value="<?=$org?>" class="<?php if ($orgreq==1){ ?>validate['required']<?php } ?> width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($jobtitlereq==1){ ?><em class="red">*</em><?php } ?><?=JOBTITLE?>:&nbsp;</td>
                        <td>
                        <input type="text" name="jobtitle" id="jobtitle" maxlength="60" value="<?=$jobtitle?>" class="<?php if ($jobtitlereq==1){ ?>validate['required']<?php } ?> width-50" /></td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em><?=EMAILADDRESS?>:&nbsp;</td>
                        <td>
                        <input type="text" name="email1" id="email1" onblur="checkEmail();"  maxlength="128" value="<?=$email1?>" class="validate['required','email'] width-50" />
                        <div id="checked" class="inline"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=SEMAILADDRESS?>:&nbsp;</td>
                        <td>
                        <input type="text" name="second_email" id="second_email" maxlength="128" value="<?=$second_email?>" class="validate['email'] width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($address1req==1){ ?><em class="red">*</em><?php } ?><?=ADDRESS1?>:&nbsp;</td>
                        <td>
                        <input type="text" name="add1" id="add1" maxlength="60" value="<?=$add1?>" class="<?php if ($address1req==1){ ?>validate['required']<?php } ?> width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=ADDRESS2?>:&nbsp; </td>
                        <td>
                        <input type="text" name="add2" id="add2" maxlength="60" value="<?=$add2?>" class="width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($cityreq==1){ ?><em class="red">*</em><?php } ?><?=CITY?>:&nbsp;</td>
                        <td>
                        <input type="text" name="city" id="city" maxlength="60" value="<?=$city?>" class="<?php if ($cityreq==1){ ?>validate['required']<?php } ?> width-50" />
                        </td>
                    </tr>
 <!-- Select Residence /s -->
	<tr>
     	<td colspan="2" class="p-20 residenceTD">
<fieldset class="residenceFieldset">
<legend><span class="red"><span class="residenceLegend"><?=SELECTRESIDENCE?></span></span></legend>
            <table class="width-100 alc residenceTable inputform" style="float:none">
                    <tr>
                        <td class="ar vlm width-30 radioTD" style="position:relative;"><p><span class="residenceLabelSpan"><?php if ($statereq==1){ ?><em class="red">*</em><?php } ?><?=STATE?>&nbsp;</span>
                       <input type="radio" value="1" name="rspchoice" <?php if ( $rspchoice == "1" || $rspchoice == "" ) { echo 'checked="checked"'; }?> class="residenceRadioBtn" /></p>
                        </td>
                        <td class="residenceFieldTD"><select name="strStateValue" size="1"><?php include(WORKDIR."/StateList.php" ); ?></select></td>
                    </tr>
                    <tr>
                        <td class="ar vlm width-25 radioTD"><p><span class="residenceLabelSpan"><?php if ($statereq==1){ ?><em class="red">*</em><?php } ?><?=PROVINCE?>&nbsp;&nbsp;</span>
                        <input type="radio" value="2" name="rspchoice" <?php if ( $rspchoice == "2" ) { echo 'checked="checked"'; } ?> class="residenceRadioBtn" /></p></td>
                        <td class="residenceFieldTD">
                        <input type="text" name="province" maxlength="60" value="<?php if ( $rspchoice == "2") { echo $province; } ?>" class="width-50" /></td>
                    </tr>
                    <tr>
                        <td class="ar vlm width-30 radioTD"><p><span class="residenceLabelSpan"><?php if ($statereq==1){ ?><em class="red">*</em><?php } ?><?=NA?>&nbsp;&nbsp;</span>
                         <input type="radio" value="3" name="rspchoice" <?php if ($rspchoice == "3") { echo 'checked="checked"'; }?> class="residenceRadioBtn" /></p></td>
                        <td class="residenceNATD"><?=NABLURB?></td>
                    </tr>
            </table>
</fieldset>
        </td>
    </tr>
<!-- Select Residence /e -->
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($zipreq==1){ ?><em class="red">*</em><?php } ?><?=ZIP?>:&nbsp;</td>
                        <td>
                        <input type="text" name="zip" id="zip" maxlength="15" value="<?=$zip?>" class="validate[<?php if ($zipreq==1){ ?>'required',<?php } ?>'alphanum'] width-50" />
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($countryreq==1){ ?><em class="red">*</em><?php } ?><?=COUNTRY?>:&nbsp;</td>
                        <td><select name="country" id="country"><?php include(WORKDIR."/countrys.php" ); ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($phonereq==1){ ?><em class="red">*</em><?php } ?><?=COUNTRYCODE?>:&nbsp;</td>
                        <td><select name="countrycode" id="countrycode"><?php include(WORKDIR."/countrycode.php" ); ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" nowrap="nowrap"><?php if ($phonereq==1){ ?><em class="red">*</em><?php } ?><?=PHONE?>:&nbsp;</td>
                        <td>
                        <input type="text" name="phone" id="phone" maxlength="20" value="<?=$phone?>" class="validate[<?php if ($phonereq==1){ ?>'required',<?php } ?>'phone'] width-50" />
                        <p class="bold"><?=PHONEBLURB?></p>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" nowrap="nowrap"><?php if ($faxreq==1){ ?><em class="red">*</em><?php } ?><?=FAX?>:&nbsp;</td>
                        <td>
                        <input type="text" name="fax" id="fax" maxlength="20" value="<?=$fax?>" class="validate[<?php if ($faxreq==1){ ?>'required',<?php } ?>'phone'] width-50" />
                        <p class="bold"><?=PHONEBLURB?></p>
                        </td>
                    </tr>
                </table>		</fieldset>
<?=$boxbottom?>
			<?php if(defined('CUSTOM1') or defined('CUSTOM2') or defined('CUSTOM3') or !empty($cftable)){ ?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=ADDINFOBOXTITLE?></span></legend>
            <table class="width-100 inputform">
			<?php if($cftable){ ?>
				<?php echo $cftable; ?>
			<?php }else{ ?>
            <?php if(defined('CUSTOM1')){ ?>
            <tr>
				<td class="ar vlt width-25" nowrap="nowrap"><?php if (!defined('CUSTOM1NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?><?=CUSTOM1?>:&nbsp;</td>
                <td><input type="text" name="custom1" value="<?=$custom1?>" id="custom1" size="20" maxlength="20" class="<?php if (!defined('CUSTOM1NOTREQUIRED')){?>validate['required']<?php } ?> width-50" /></td>
            </tr>
            <?php } ?>
            <?php if(defined('CUSTOM2')){ ?>
            <tr>
				<td class="ar vlt width-25" nowrap="nowrap"><?php if (!defined('CUSTOM2NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?><?=CUSTOM2?>:&nbsp;</td>
                <td><input type="text" name="custom2" value="<?=$custom2?>" id="custom2" size="20" maxlength="20" class="<?php if (!defined('CUSTOM2NOTREQUIRED')){?>validate['required']<?php } ?> width-50" /></td>
            </tr>
            <?php } ?>
            <?php if(defined('CUSTOM3')){ ?>
            <tr>
				<td class="ar vlt width-25" nowrap="nowrap"><?php if (!defined('CUSTOM3NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?><?=CUSTOM3?>:&nbsp;</td>
                <td><input type="text" name="custom2" value="<?=$custom3?>" id="custom3" size="20" maxlength="20" class="<?php if (!defined('CUSTOM3NOTREQUIRED')){?>validate['required']<?php } ?> width-50" /></td>
            </tr>
            <?php }} ?>

            </table>
            </fieldset>
<?=$boxbottom?>
			<?php } ?>
<?=$boxtop?>
<fieldset>
                <table class="width-100 inputform">
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
		<p class="ac"><a href="welcome.php" class="rtrntomgmt"><?=CANCELCLICK?></a></p>
		<?php if (!$clientportal) { ?>
				<!-- user menu /e -->
				</td>
			</tr>
		</table>
		<?php } ?>
		</td>
	</tr>
</table></div>
<!-- Contents /e -->
<?=$bottom?>
