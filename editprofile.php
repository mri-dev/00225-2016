<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="editprofile">
   <table id="mainData" class="account-page">
      <tr>
         <td id="tablehead">
            <h1><?=EDITPROFILETITLE?> <?=$help_icon?></h1>
         </td>
      </tr>
      <tr>
         <td id="mainTD">
            <?php if (!$clientportal) { ?>
            <div class="account-page-holder">
               <div class="sidemenu vlt">
                  <?=$umenu?>
               </div>
               <div class="account-contant-container">
                  <div class="reqfieldsnote"><?=REQFIELDSNOTE?><br /><?=$genMsg?></div>
                  <form method="post" action="editprofile.php" id="form1" name="form1" class="awform form-horizontal">
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
                        <?php if ( $allow_language == "True" ) { ?>
                        <div class="width-50 mac">
                           <div class="row">
                              <div class="col-md-12 ac">
                                 <label id="language"><?=LANGCHOICE?></label>
                                 <select name="language" id="language" class="form-control"><?php $lang_list=get_lang_dirs($language);echo $lang_list;?></select>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <?php if ( $selectable_mail == 1 ) {?>
                        <br>
                        <div class="width-50 mac">
                           <div class="row">
                              <div class="col-md-12 ac">
                                 <label id="mail_type1"><?=EDITPROFILEMAILTYPE?></label>
                                 <select name="mail_type1" id="mail_type1" class="form-control">
                                    <option value="1" <?php if ($mail_type1==1){ echo 'selected="selected"';}?>><?=EDITPROFILETEXT?></option>
                                    <option value="2" <?php if ($mail_type1==2){ echo 'selected="selected"';}?>><?=EDITPROFILEHTML?></option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <?php if ( $uar == 1 ) {?>
                        <br>
                        <div class="width-75 mac">
                           <div class="row">
                              <div class="col-md-12 ac">
                                 <div align="center"><span><input type="checkbox" name="refill_notify" value="1" <?php echo $rn; ?> /> <?=ACCTBALNOTICE?></span><span class="red"><?=LCURRENCYSYMBOL?> </span><input type="text" size="4" class="validate['digit'] ac bold red" name="refill_notify_amount" value="<?=$refill_notify_amount?>" /><?=RCURRENCYSYMBOL?></div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <?php if ( true ) {?>
                        <br>
                        <div class="width-75 mac">
                           <div class="row">
                              <div class="col-md-12 ac">
                                 <div align="center"><span><input type="checkbox" name="mail_list" value="1" <?=$getmail?> /><?=MAILINGLISTCHECK?></span></div>
                                 <br>
                                 <p class="ac bold red"><?=MAILINGLISTNOTE?></p>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </fieldset>
                     <?=$boxbottom?>
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=EDITPROFCONTACTINFO?></span></legend>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="fname" class="control-label col-md-4 vlm">
                              <?php if ($firstnamereq==1){ ?><em class="red">*</em><?php } ?> <?=FIRSTNAME?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="fname" id="fname" maxlength="60" value="<?=$fname?>" class="<?php if ($firstnamereq==1){ ?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="lname" class="control-label col-md-4 vlm">
                              <?php if ($lastnamereq==1){ ?><em class="red">*</em><?php } ?> <?=LASTNAME?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="lname" id="lname" maxlength="60" value="<?=$lname?>" class="<?php if ($lastnamereq==1){ ?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="org" class="control-label col-md-4 vlm">
                              <?php if ($orgreq==1){ ?><em class="red">*</em><?php } ?> <?=ORGANIZATIONNAME?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="org" id="org" maxlength="60" value="<?=$org?>" class="<?php if ($orgreq==1){ ?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="jobtitle" class="control-label col-md-4 vlm">
                              <?php if ($jobtitlereq==1){ ?><em class="red">*</em><?php } ?> <?=JOBTITLE?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="jobtitle" id="jobtitle" maxlength="60" value="<?=$jobtitle?>" class="<?php if ($jobtitlereq==1){ ?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="email1" class="control-label col-md-4 vlm">
                              <?php if ($jobtitlereq==1){ ?><em class="red">*</em><?php } ?> <?=EMAILADDRESS?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="email1" id="email1" onblur="checkEmail();"  maxlength="128" value="<?=$email1?>" class="validate['required','email'] form-control" />
                                 <div id="checked" class="inline"></div>
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="second_email" class="control-label col-md-4 vlm">
                              <?=SEMAILADDRESS?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="second_email" id="second_email" maxlength="128" value="<?=$second_email?>" class="validate['email'] form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="add1" class="control-label col-md-4 vlm">
                              <?=ADDRESS1?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="add1" id="add1" maxlength="60" value="<?=$add1?>" class="<?php if ($address1req==1){ ?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="add2" class="control-label col-md-4 vlm">
                              <?=ADDRESS2?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="add2" id="add2" maxlength="60" value="<?=$add2?>" class="form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="city" class="control-label col-md-4 vlm">
                              <?php if ($cityreq==1){ ?><em class="red">*</em><?php } ?> <?=CITY?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="city" id="city" maxlength="60" value="<?=$city?>" class="<?php if ($cityreq==1){ ?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <!-- Select Residence /s -->
                        <fieldset class="residenceFieldset">
                           <legend><?=SELECTRESIDENCE?></legend>
                           <table class="width-100 inputform">
                              <tr>
                                 <td class="ar vlm width-35">
                                    <p><span class="residenceLabelSpan"><?php if ($statereq==1){ ?><em class="red">*</em><?php } ?><?=STATE?> </span>
                                       <input type="radio" value="1" name="rspchoice" <?php if ( $rspchoice == "1" || $rspchoice == "" ) { echo 'checked="checked"'; }?> class="residenceRadioBtn" />
                                    </p>
                                 </td>
                                 <td class="al width-65"><select name="strStateValue"><?php include(WORKDIR."/StateList.php" ); ?></select></td>
                              </tr>
                              <tr>
                                 <td class="ar vlm width-35">
                                    <p><span class="residenceLabelSpan"><?php if ($statereq==1){ ?><em class="red">*</em><?php } ?><?=PROVINCE?>  </span>
                                       <input type="radio" value="2" name="rspchoice" <?php if ( $rspchoice == "2" ) { echo 'checked="checked"'; } ?> class="residenceRadioBtn" />
                                    </p>
                                 </td>
                                 <td class="al width-65">
                                    <input type="text" name="province" maxlength="60" value="<?php if ( $rspchoice == "2") { echo $province; } ?>" class="width-50" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="ar vlm width-35">
                                    <p><span class="residenceLabelSpan"><?php if ($statereq==1){ ?><em class="red">*</em><?php } ?><?=NA?>  </span>
                                       <input type="radio" value="3" name="rspchoice" <?php if ($rspchoice == "3") { echo 'checked="checked"'; }?> class="residenceRadioBtn" />
                                    </p>
                                 </td>
                                 <td class="al width-65"><?=NABLURB?></td>
                              </tr>
                           </table>
                        </fieldset>
                        <!-- Select Residence /e -->
                        <hr>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="zip" class="control-label col-md-4 vlm">
                              <?php if ($zipreq==1){ ?><em class="red">*</em><?php } ?> <?=ZIP?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="zip" id="zip" maxlength="15" value="<?=$zip?>" class="validate[<?php if ($zipreq==1){ ?>'required',<?php } ?>'alphanum'] form-control" />
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="country" class="control-label col-md-4 vlm">
                              <?php if ($countryreq==1){ ?><em class="red">*</em><?php } ?> <?=COUNTRY?>
                              </label>
                              <div class="col-md-6">
                                 <select name="country" id="country"><?php include(WORKDIR."/countrys.php" ); ?></select>
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="countrycode" class="control-label col-md-4 vlm">
                              <?php if ($phonereq==1){ ?><em class="red">*</em><?php } ?> <?=COUNTRYCODE?>
                              </label>
                              <div class="col-md-6">
                                 <select name="countrycode" id="countrycode"><?php include(WORKDIR."/countrycode.php" ); ?></select>
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="phone" class="control-label col-md-4 vlm">
                              <?php if ($phonereq==1){ ?><em class="red">*</em><?php } ?> <?=PHONE?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="phone" id="phone" maxlength="20" value="<?=$phone?>" class="validate[<?php if ($phonereq==1){ ?>'required',<?php } ?>'phone'] form-control" />
                                 <p class="bold"><?=PHONEBLURB?></p>
                              </div>
                           </div>
                        </div>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="fax" class="control-label col-md-4 vlm">
                              <?php if ($faxreq==1){ ?><em class="red">*</em><?php } ?> <?=FAX?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="fax" id="fax" maxlength="20" value="<?=$fax?>" class="validate[<?php if ($faxreq==1){ ?>'required',<?php } ?>'phone'] form-control" />
                                 <p class="bold"><?=PHONEBLURB?></p>
                              </div>
                           </div>
                        </div>
                     </fieldset>
                     <?=$boxbottom?>
                     <?php if(defined('CUSTOM1') or defined('CUSTOM2') or defined('CUSTOM3') or !empty($cftable)){ ?>
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=ADDINFOBOXTITLE?></span></legend>
                        <?php if($cftable){ ?>
                        <?php echo $cftable; ?>
                        <?php }else{ ?>
                        <?php if(defined('CUSTOM1')){ ?>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="custom1" class="control-label col-md-4 vlm">
                              <?php if (!defined('CUSTOM1NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?><?=CUSTOM1?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="custom1" value="<?=$custom1?>" id="custom1" size="20" maxlength="20" class="<?php if (!defined('CUSTOM1NOTREQUIRED')){?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <?php if(defined('CUSTOM2')){ ?>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="custom2" class="control-label col-md-4 vlm">
                              <?php if (!defined('CUSTOM2NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?><?=CUSTOM2?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="custom2" value="<?=$custom2?>" id="custom2" size="20" maxlength="20" class="<?php if (!defined('CUSTOM2NOTREQUIRED')){?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <?php if(defined('CUSTOM3')){ ?>
                        <div class=" width-100 mac">
                           <div class="form-group">
                              <label for="custom3" class="control-label col-md-4 vlm">
                              <?php if (!defined('CUSTOM3NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?><?=CUSTOM3?>
                              </label>
                              <div class="col-md-6">
                                 <input type="text" name="custom3" value="<?=$custom1?>" id="custom3" size="20" maxlength="20" class="<?php if (!defined('CUSTOM3NOTREQUIRED')){?>validate['required']<?php } ?> form-control" />
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
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
               </div>
            </div>
            <?php } ?>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
