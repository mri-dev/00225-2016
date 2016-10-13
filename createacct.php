<?=$header?>
<?=$top?>
<input type="hidden" id="minPassLength" value="<?=$minpass?>" />
<input type="hidden" id="maxPassLength" value="<?=$maxpass?>" />
<!-- Contents /s -->
<div id="createacct">
   <table id="mainData">
      <tr>
         <td id="tablehead"><h1><?=CREATEACCTTITLE?>&nbsp;<?=$help_icon?></h1></td>
      </tr>
      <tr>
         <td id="mainTD">
            <?=$dmsg?>
            <!-- registration form /s -->
            <div>
               <form method="post" action="aLogIn.php" id="forma" name="forma" class="ccaform">
                  <input type="hidden" value="<?=$subaction?>" name="subaction" />
                  <input type="hidden" value="<?=$fkey?>" name="fkey" />
                  <input type="hidden" value="<?=$formcode?>" name="formcode" />
	                 <div class="enter">
	                    <div class="enter_inner">
	                       <input type="submit" class="btn btn-blue btn-sm" name="Submit" value="<?=HAVEACCT?>" />
	                    </div>
	                 </div>
               </form>
            </div>
            <form method="post" action="createacct.php" id="form1" name="form1" class="ccaform" onsubmit="submitonce(this); showObject(false,true);">
               <?=$hiddeninc?>
               <p class="red bold">
								 <br>
                  <small><?=REQFIELDSNOTE?></small>
               </p>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ccaHeader" colspan="2"><span class="boxlegend">
                           <?=LOGININFO?>
                           </span>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=USERNAME?>
                           :&nbsp;
                        </td>
                        <td>
                           <input type="text" name="newuid" id="newuid" maxlength="16" value="<?=$newuid?>" onblur="updateName(<?=$minuser?>,<?=$maxuser?>);" class="validate['required','alphanum','length[<?=$minuser?>,<?=$maxuser?>]'] width-65" />
                           <div id="checked" class="inline"></div>
                           (
                           <?=CREATEMIN?>
                           <?=$minuser?>
                           <?=CREATEMAX?>
                           <?=$maxuser?>
                           <?=CREATEUSERSPECS?>
                           )<br />
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=PASS?>
                           :&nbsp;
                        </td>
                        <td><input type="password" name="password1" id="password" maxlength="150" value="<?=$password1?>" class="validate['required','length[<?=$minpass?>,<?=$maxpass?>]'] width-65" />
                           <br />
                           (
                           <?=CREATEMIN?>
                           <?=$minpass?>
                           <?=CREATEMAX?>
                           <?=$maxpass?>
                           <?=CREATEPASSSPECS?>
                           )<br />
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=PASSVERIFY?>
                           :&nbsp;
                        </td>
                        <td><input type="password" name="password2" id="idpassword2" maxlength="150" value="<?=$password2?>" class="validate['required','confirm[password]'] width-65" />
                           <br />
                           (
                           <?=CREATEMIN?>
                           <?=$minpass?>
                           <?=CREATEMAX?>
                           <?=$maxpass?>
                           <?=CREATEPASSSPECS?>
                           )<br />
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=LPQUESTION?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="lpquestion" maxlength="250" value="<?=$lpquestion?>" class="validate['required'] width-65" />
                           <br />
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=LPANSWER?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="lpanswer" maxlength="250" value="<?=$lpanswer?>" class="validate['required'] width-65" />
                           <br />
                           (
                           <?=SQBLURB?>
                           )<br />
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <?=$boxbottom?>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ccaHeader" colspan="2"><span class="boxlegend">
                           <?=ACCTOPT?>
                           </span>
                        </td>
                     </tr>
                     <?php if ( $allow_language == "True" ) { ?>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=LANGCHOICE?>
                           :&nbsp;
                        </td>
                        <td><select name="language" id="language" class="width-65">
                           <?php $lang_list=get_lang_dirs($language);echo $lang_list;?>
                           </select>
                        </td>
                     </tr>
                     <?php }
                        if ($selectable_mail == 1) {?>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=CREATEACCTMAILTYPE?>
                           :&nbsp;
                        </td>
                        <td>
                           <select name="mail_type1" id="mail_type1" class="width-65">
                              <option value="1" selected="selected">
                                 <?=CREATEACCTTEXT?>
                              </option>
                              <option value="2">
                                 <?=CREATEACCTHTML?>
                              </option>
                           </select>
                        </td>
                     </tr>
                     <?php } ?>
                     <tr>
											 <td class="width-25">

											 </td>
                        <td class="al">
                           <?php if($uar==1){ ?>
                           		<span>
                              <input type="checkbox" name="refill_notify" value="1" <?php echo $rn; ?> />
                              <?=ACCTBALNOTICE?>
                              </span>&nbsp;<span class="red bold">
                              <?=LCURRENCYSYMBOL?>
                              </span><span>
                              <input type="text" size="4" name="refill_notify_amount" value="<?=$refill_notify_amount?>" class="validate['digit'] ac red refillinput" />
                              </span><span class="red bold">
                              <?=RCURRENCYSYMBOL?>
                              </span>
                           <?php } ?>
                            <div class="width-50 maillist"><span>
                               <input type="checkbox" name="maillist" value="1" checked="checked" />
                               <?=MAILINGLISTCHECK?>
                               </span>
                            </div>
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <?=$boxbottom?>
               <p class="center bold red">
                  <?=MAILINGLISTNOTE?>
               </p>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ccaHeader" colspan="2"><span class="boxlegend">
                           <?=CREATECONTACTINFO?>
                           </span>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($firstnamereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=FIRSTNAME?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="fname" id="fname" maxlength="60" value="<?=$fname?>" class="<?php if ($firstnamereq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($lastnamereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=LASTNAME?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="lname" id="lname" maxlength="60" value="<?=$lname?>" class="<?php if ($lastnamereq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($orgreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=ORGANIZATIONNAME?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="org" id="org" maxlength="60" value="<?=$org?>" class="<?php if ($orgreq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($jobtitlereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=JOBTITLE?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="jobtitle" id="jobtitle" maxlength="60" value="<?=$jobtitle?>" class="<?php if ($jobtitlereq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=EMAILADDRESS?>
                           :&nbsp;
                        </td>
                        <td>
                           <input type="text" name="email" id="email" maxlength="128" value="<?=$email?>" onblur="updateEmail();" class="validate['required','email'] width-65" />
                           <div id="checkedE" class="inline"></div>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=SEMAILADDRESS?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="second_email" id="second_email" maxlength="128" value="<?=$second_email?>" class="validate['email'] width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($address1req==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=ADDRESS1?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="add1" id="add1" maxlength="60" value="<?=$add1?>" class="<?php if ($address1req==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=ADDRESS2?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="add2" id="add2" maxlength="60" value="<?=$add2?>" class="width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($cityreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=CITY?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="city" id="city" maxlength="60" value="<?=$city?>" class="<?php if ($cityreq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="al vlt" nowrap="nowrap" colspan="2"></td>
                     </tr>
                     <!-- Select Residence /s -->
                     <tr>
                        <td colspan="2" class="p-20 residenceTD">
                           <fieldset class="residenceFieldset">
                              <legend><span class="red"><span class="residenceLegend">
                                 <?=SELECTRESIDENCE?>
                                 </span></span>
                              </legend>
                              <table class="width-100 alc residenceTable">
                                 <tr>
                                    <td class="ar vlt width-25 radioTD" nowrap="nowrap">
                                       <p><span class="residenceLabelSpan">
                                          <?php if ($statereq==1){ ?>
                                          <em class="red">*</em>
                                          <?php } ?>
                                          <?=STATE?>
                                          &nbsp;</span>
                                          <input type="radio" value="1" name="rspchoice" <?php if ( $rspchoice == "1" || $rspchoice == "" ) { echo 'checked="checked"'; }?> />
                                       </p>
                                    </td>
                                    <td class="residenceFieldTD"><select name="strStateValue" class="width-65">
                                       <?php include(WORKDIR."/StateList.php" ); ?>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="ar vlt width-25 radioTD" nowrap="nowrap">
                                       <p><span class="residenceLabelSpan">
                                          <?php if ($statereq==1){ ?>
                                          <em class="red">*</em>
                                          <?php } ?>
                                          <?=PROVINCE?>
                                          &nbsp;</span>
                                          <input type="radio" value="2" name="rspchoice" <?php if ( $rspchoice == "2" ) { echo 'checked="checked"'; } ?> />
                                       </p>
                                    </td>
                                    <?php if($useprovincelist and file_exists(WORKDIR."/ProvinceList.php")){ ?>
                                    <td class="residenceFieldTD"><select name="province" size="1" class="width-65">
                                       <?php include(WORKDIR."/ProvinceList.php" ); ?>
                                       </select>
                                    </td>
                                    <?php }else{ ?>
                                    <td class="residenceFieldTD"><input type="text" name="province" maxlength="60" value="<?php if ( $rspchoice == "2") { echo $province; } ?>" class="<?php if ( $rspchoice == "2") { ?>validate['required']<?php } ?> width-65" /></td>
                                    <?php } ?>
                                 </tr>
                                 <tr>
                                    <td class="ar vlt width-25 radioTD" nowrap="nowrap">
                                       <p><span class="residenceLabelSpan">
                                          <?php if ($statereq==1){ ?>
                                          <em class="red">*</em>
                                          <?php } ?>
                                          <?=NA?>
                                          &nbsp;</span>
                                          <input type="radio" value="3" name="rspchoice" <?php if ($rspchoice == "3") {  echo 'checked="checked"'; }?> />
                                       </p>
                                    </td>
                                    <td class="residenceNATD"><?=NABLURB?></td>
                                 </tr>
                              </table>
                           </fieldset>
                        </td>
                     </tr>
                     <!-- Select Residence /e -->
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($zipreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=ZIP?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="zip" id="zip" maxlength="15" value="<?=$zip?>" class="validate[<?php if ($zipreq==1){ ?>'required',<?php } ?>'alphanum'] width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($countryreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=COUNTRY?>
                           :&nbsp;
                        </td>
                        <td><select name="country" id="country" class="width-65">
                           <?php include(WORKDIR."/countrys.php" ); ?>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($phonereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=COUNTRYCODE?>
                           :&nbsp;
                        </td>
                        <td><select name="countrycode" id="countrycode" class="width-65">
                           <?php include(WORKDIR."/countrycode.php" ); ?>
                           </select>
                        </td>
                     </tr>
                     <!-- Voice Verification /s -->
                     <?php if($phonev == 1){?>
                     <tr>
                        <td colspan="2" class="p-20">
                           <br />
                           <table class="width-95 internal alc">
                              <tr>
                                 <td class="ccaHeader" colspan="2"><em class="red">*</em>&nbsp;
                                    <?=VVBOXTITLE?>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="ar vlt width-25" nowrap="nowrap"><?php if ($phonereq==1){ ?>
                                    <em class="red">*</em>
                                    <?php } ?>
                                    <?=PHONE?>
                                    :&nbsp;
                                 </td>
                                 <td><input type="text" name="phone" id="phone" maxlength="20" value="<?=$phone?>" class="validate[<?php if ($phonereq==1){ ?>'required',<?php } ?>'digit'] width-65" />
                                    <br />
                                    <?=PHONEBLURB?>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="ac vlt bold" colspan="2"><?=WILLCALL?></td>
                              </tr>
                              <?php if(sqlsingle("select * from module_types where name='varilogix'","status") !='1'){ ?>
                              <tr>
                                 <td class="ar vlt width-25" nowrap="nowrap"><?php if ($phonereq==1){ ?>
                                    <em class="red">*</em>
                                    <?php } ?>
                                    <?=CALLDELAY?>
                                    :&nbsp;
                                 </td>
                                 <td><input type="text" name="delay" id="delay" size="5" maxlength="2" value="<?=$delay?>" class="validate[<?php if ($phonereq==1){ ?>'required',<?php } ?>'digit'] width-65" /></td>
                              </tr>
                              <?php } ?>
                              <?php if(sqlsingle("select * from module_types where name='telesign'","status") =='1'){ ?>
                              <tr>
                                 <td class="ar vlt width-25" nowrap="nowrap"><?=CALLLANG?>
                                    :&nbsp;
                                 </td>
                                 <td>
                                    <select name="tslang" id="tslang">
                                       <option>English</option>
                                       <option>Arabic</option>
                                       <option>Chinese</option>
                                       <option>French</option>
                                       <option>German</option>
                                       <option>Hebrew</option>
                                       <option>Hindi</option>
                                       <option>Hungarian</option>
                                       <option>Italian</option>
                                       <option>Japanese</option>
                                       <option>Korean</option>
                                       <option>Polish</option>
                                       <option>Portuguese</option>
                                       <option>Romanian</option>
                                       <option>Russian</option>
                                       <option>Spanish</option>
                                       <option>Ukranian</option>
                                       <option>Vietnamese</option>
                                    </select>
                                 </td>
                              </tr>
                              <?php } ?>
                              <?php if(sqlsingle("select * from module_types where name='maxmindvoice'","status") =='1'){ ?>
                              <tr>
                                 <td class="ar vlt width-25" nowrap="nowrap"><?=CALLLANG?>
                                    :&nbsp;
                                 </td>
                                 <td>
                                    <select name="tslang" id="tslang">
                                       <option>English</option>
                                       <option>Arabic</option>
                                       <option>Cantonese</option>
                                       <option>Croatian</option>
                                       <option>Czech</option>
                                       <option>Danish</option>
                                       <option>Dutch</option>
                                       <option value="englishuk">English UK</option>
                                       <option>Estonian</option>
                                       <option>Finnish</option>
                                       <option>French</option>
                                       <option>German</option>
                                       <option>Greek</option>
                                       <option>Hebrew</option>
                                       <option>Hindi</option>
                                       <option>Hungarian</option>
                                       <option>Italian</option>
                                       <option>Japanese</option>
                                       <option>Korean</option>
                                       <option>Mandarin</option>
                                       <option>Norwegian</option>
                                       <option>Polish</option>
                                       <option>Portuguese</option>
                                       <option value="portugueseeu">Portuguese (European)</option>
                                       <option>Romanian</option>
                                       <option>Russian</option>
                                       <option>Slovakian</option>
                                       <option>Spanish</option>
                                       <option>Swedish</option>
                                       <option>Thai</option>
                                       <option>Turkish</option>
                                       <option>Ukrainian</option>
                                       <option>Vietnamese</option>
                                    </select>
                                 </td>
                              </tr>
                              <?php } ?>
                           </table>
                           <br />
                        </td>
                     </tr>
                     <!-- Voice Verification /e -->
                     <?php }else{ ?>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($phonereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=PHONE?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="phone" id="phone" maxlength="20" value="<?=$phone?>" class="validate[<?php if ($phonereq==1){ ?>'required',<?php } ?>'digit'] width-65" />
                           <br />
                           <?=PHONEBLURB?>
                        </td>
                     </tr>
                     <?php } ?>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($faxreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=FAX?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="fax" id="fax" maxlength="20" value="<?=$fax?>" class="validate[<?php if ($faxreq==1){ ?>'required',<?php } ?>'digit'] width-65" />
                           <br />
                           <?=PHONEBLURB?>
                        </td>
                     </tr>
                  </table>
                  <?php if($alt_ignore == 1 or $alt_ignore == 2 or $alt_ignore == 3){
                     if(($alt_ignore == 1 and $alt_profile != 1)){
                     }else{ ?>
               </fieldset>
               <?=$boxbottom?>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ccaHeader" colspan="2"><span class="boxlegend">
                           <?=DOMAINCONTACTINFO?>
                           </span>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2" class="ac"><?=DOMAINCONTACTBLURB?>
                           <br />
                           <br />
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2" class="ac">
                           &nbsp;<u>
                           <?=USEDOMAINCONTACTINFO?>
                           </u>
                           <script type="text/javascript" language="JavaScript">
                              <!-- Begin
                                 var aemail = "";
                                 var afname = "";
                                 var alname = "";
                                 var ajobtitle = "";
                                 var aorg = "";
                                 var aadd1 = "";
                                 var aadd2 = "";
                                 var acity = "";
                                 var astrStateValue = "";
                                 var aprovince = "";
                                 var azip = "";
                                 var acountry = "";
                                 var acountrycode = "";
                                 var aphone = "";
                                 var afax = "";

                                 function InitSaveVariables(form) {
                                 	aemail = form.aemail.value;
                                 	afname = form.afname.value;
                                 	alname = form.alname.value;
                                 	ajobtitle = form.ajobtitle.value;
                                 	aorg = form.aorg.value;
                                 	aadd1 = form.aadd1.value;
                                 	aadd2 = form.aadd2.value;
                                 	acity = form.acity.value;
                                 	astrStateValue = form.astrStateValue.value;
                                 	aprovince = form.aprovince.value;
                                 	azip = form.azip.value;
                                 	acountry = form.acountry.value;
                                 	acountrycode = form.acountrycode.value;
                                 	aphone = form.aphone.value;
                                 	afax = form.afax.value;
                                 }

                                 function PopulateContacts(form) {
                                 	if (form.copy.checked) {
                                 		InitSaveVariables(form);
                                 		form.aemail.value = form.email.value;
                                 		form.afname.value = form.fname.value;
                                 		form.alname.value = form.lname.value;
                                 		form.ajobtitle.value = form.jobtitle.value;
                                 		form.aorg.value = form.org.value;
                                 		form.aadd1.value = form.add1.value;
                                 		form.aadd2.value = form.add2.value;
                                 		form.acity.value = form.city.value;
                                 		form.astrStateValue.value = form.strStateValue.value;
                                 		form.aprovince.value = form.province.value;
                                 		form.azip.value = form.zip.value;
                                 		form.acountry.value = form.country.value;
                                 		form.acountrycode.value = form.countrycode.value;
                                 		form.aphone.value = form.phone.value;
                                 		form.afax.value = form.fax.value;
                                 		for  (i=0;i < form.rspchoice.length;i++){
                                 			form.arspchoice[i].checked =  form.rspchoice[i].checked
                                 		}
                                 	} else {
                                 		form.aemail.value = aemail;
                                 		form.afname.value = afname;
                                 		form.alname.value = alname;
                                 		form.ajobtitle.value = ajobtitle;
                                 		form.aorg.value = aorg;
                                 		form.aadd1.value = aadd1;
                                 		form.aadd2.value = aadd2;
                                 		form.acity.value = acity;
                                 		form.astrStateValue.value = astrStateValue;
                                 		form.aprovince.value = aprovince;
                                 		form.azip.value = azip;
                                 		form.acountry.value = acountry;
                                 		form.acountrycode.value = acountrycode;
                                 		form.aphone.value = aphone;
                                 		form.afax.value = afax;
                                 		form.arspchoice[1].checked
                                 	}
                                 }
                                 //  End -->
                           </script>
                           <br />
                           <div align="center">
                              <p class="width-65">
                                 <input type="checkbox" name="copy" onclick="javascript:PopulateContacts(this.form); " value="checkbox" />
                                 <?=PREFILLDOMAINFIELDS?>
                              </p>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($afirstnamereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=FIRSTNAME?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="afname" id="afname" maxlength="60" value="<?=$afname?>" class="<?php if ($afirstnamereq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($alastnamereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=LASTNAME?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="alname" id="alname" maxlength="60" value="<?=$alname?>" class="<?php if ($alastnamereq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                           <?=EMAILADDRESS?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="aemail" id="aemail" maxlength="128" value="<?=$aemail?>" class="validate['required','email'] width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($aaddress1req==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=ADDRESS1?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="aadd1" id="aadd1" maxlength="60" value="<?=$aadd1?>" class="<?php if ($aaddress1req==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=ADDRESS2?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="aadd2" id="aadd2" maxlength="60" value="<?=$aadd2?>" class="width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($acityreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=CITY?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="acity" id="acity" maxlength="60" value="<?=$acity?>" class="<?php if ($acityreq==1){ ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <!-- Select Residence /s -->
                     <tr>
                        <td colspan="2" class="p-20 residenceTD">
                           <fieldset class="residenceFieldset">
                              <legend><span class="red"><span class="residenceLegend">
                                 <?=SELECTRESIDENCE?>
                                 </span></span>
                              </legend>
                              <table class="width-100 alc residenceTable">
                                 <tr>
                                    <td class="ar vlt width-25 radioTD" nowrap="nowrap">
                                       <p><span class="residenceLabelSpan">
                                          <?php if ($astatereq==1){ ?>
                                          <em class="red">*</em>
                                          <?php } ?>
                                          <?=STATE?>
                                          &nbsp;</span>
                                          <input type="radio" value="1" name="arspchoice" <?php if ( $arspchoice == "1" || $arspchoice == "" ) { echo 'checked="checked"'; }?> />
                                       </p>
                                    </td>
                                    <td class="residenceFieldTD"><select name="astrStateValue" size="1" class="width-65">
                                       <?php include(WORKDIR."/aStateList.php" ); ?>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="ar vlt width-25 radioTD" nowrap="nowrap">
                                       <p><span class="residenceLabelSpan">
                                          <?php if ($statereq==1){ ?>
                                          <em class="red">*</em>
                                          <?php } ?>
                                          <?=PROVINCE?>
                                          &nbsp;</span>
                                          <input type="radio" value="2" name="arspchoice" <?php if ( $arspchoice == "2" ) { echo 'checked="checked"'; } ?> />
                                       </p>
                                    </td>
                                    <td class="residenceFieldTD"><input type="text" name="aprovince" maxlength="60" value="<?php if ( $arspchoice == "2") { echo $aprovince; } ?>" class="<?php if ( $arspchoice == "2") { ?>validate['required']<?php } ?> width-65" /></td>
                                 </tr>
                                 <tr>
                                    <td class="ar vlt width-25 radioTD" nowrap="nowrap">
                                       <p><span class="residenceLabelSpan">
                                          <?php if ($statereq==1){ ?>
                                          <em class="red">*</em>
                                          <?php } ?>
                                          <?=NA?>
                                          &nbsp;</span>
                                          <input type="radio" value="3" name="arspchoice" <?php if ($arspchoice == "3") {  echo 'checked="checked"'; }?> />
                                       </p>
                                    </td>
                                    <td class="residenceNATD"><?=NABLURB?></td>
                                 </tr>
                              </table>
                           </fieldset>
                        </td>
                     </tr>
                     <!-- Select Residence /e -->
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($azipreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=ZIP?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="azip" id="azip" maxlength="15" value="<?=$azip?>" class="validate[<?php if ($azipreq==1){ ?>'required',<?php } ?>'alphanum'] width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($acountryreq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=COUNTRY?>
                           :&nbsp;
                        </td>
                        <td><select name="acountry" id="acountry" class="width-65">
                           <?php include(WORKDIR."/countrys.php" ); ?>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($aphonereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=COUNTRYCODE?>
                           :&nbsp;
                        </td>
                        <td><select name="acountrycode" id="acountrycode" class="width-65">
                           <?php include( WORKDIR."/acountrycode.php" ); ?>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?php if ($aphonereq==1){ ?>
                           <em class="red">*</em>
                           <?php } ?>
                           <?=PHONE?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="aphone" id="aphone" maxlength="20" value="<?=$aphone?>" class="validate[<?php if ($aphonereq==1){ ?>'required',<?php } ?>'digit'] width-65" />
                           <br />
                           <?=PHONEBLURB?>
                        </td>
                     </tr>
                     <tr>
                        <td class="ac" colspan="2"><?=ORGINFO?></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=ORGANIZATIONNAME?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="aorg" id="aorg" maxlength="60" value="<?=$aorg?>" class="width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=JOBTITLE?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="ajobtitle" id="ajobtitle" maxlength="60" value="<?=$ajobtitle?>" class="width-65" />
                           <br />
                           <em class="red">*</em>
                           <?=REQUIREDORG?>
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=FAX?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="afax" id="afax" maxlength="20" value="<?=$afax?>" class="width-65" />
                           <br />
                           <em class="red">*</em>
                           <?=REQUIREDORG?>
                           <br />
                           <?=PHONEBLURB?>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2" class="ac"><?=NAMESERVERBLURB?>
                           <br />
                           <br />
                        </td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS1?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="ans1" id="ans1" maxlength="300" value="<?=$ans1?>" class="width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS2?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="ans2" id="ans2" maxlength="300" value="<?=$ans2?>" class="width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS3?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="ans3" id="ans3" maxlength="300" value="<?=$ans3?>" class="width-65" /></td>
                     </tr>
                     <tr>
                        <td class="ar vlt width-25" nowrap="nowrap"><?=CREATENS4?>
                           :&nbsp;
                        </td>
                        <td><input type="text" name="ans4" id="ans4" maxlength="300" value="<?=$ans4?>" class="width-65" /></td>
                     </tr>
                  </table>
                  <?php } }?>
               </fieldset>
               <?=$boxbottom?>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ccaHeader" colspan="2"><span class="boxlegend">
                           <?=ADDINFOBOXTITLE?>
                           </span>
                        </td>
                     </tr>
                     <?php if(defined('CUSTOM1')){ ?>
                     <tr>
                        <td class="ar vlt width-25"><?php if (!defined('CUSTOM1NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?>
                           <?=CUSTOM1?>
                           :&nbsp;
                        </td>
                        <td><input type="text" value="<?=$custom1?>" name="custom1" id="custom1" size="20" maxlength="20" class="<?php if (!defined('CUSTOM1NOTREQUIRED')){  ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <?php } ?>
                     <?php if(defined('CUSTOM2')){ ?>
                     <tr>
                        <td class="ar vlt width-25"><?php if (!defined('CUSTOM2NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?>
                           <?=CUSTOM2?>
                           :&nbsp;
                        </td>
                        <td><input type="text" value="<?=$custom2?>" name="custom2" id="custom2" size="20" maxlength="20" class="<?php if (!defined('CUSTOM2NOTREQUIRED')){  ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <?php } ?>
                     <?php if(defined('CUSTOM3')){ ?>
                     <tr>
                        <td class="ar vlt width-25"><?php if (!defined('CUSTOM3NOTREQUIRED')){ echo "<em class=\"red\">*</em>";} ?>
                           <?=CUSTOM3?>
                           :&nbsp;
                        </td>
                        <td><input type="text" value="<?=$custom3?>" name="custom3" id="custom3" size="20" maxlength="20" class="<?php if (!defined('CUSTOM3NOTREQUIRED')){  ?>validate['required']<?php } ?> width-65" /></td>
                     </tr>
                     <?php } ?>
                     <?php define(HSN,"2");$pt="u";$plan="user";include(WORKDIR."/templates/common_files/cftable.php"); ?>
                     <tr>
                        <td class="ar vlt width-25"><?=CACOMMENTS?>
                           :&nbsp;
                        </td>
                        <td><textarea name="comments" id="comments" class="width-65" rows="10" cols="45"><?=$comments?>
                           </textarea>
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <?=$boxbottom?>
               <?php if($needv==1 or $recaptcha=="1"){ ?>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ccaHeader"><span class="boxlegend">
                           <?=CFVBOXTITLE?>
                           </span>
                        </td>
                     </tr>
                     <tr>
                        <td class="ac">
                           <?php
                              if ($recaptcha=="1"){
                              	require_once(WORKDIR.'/includes/recaptcha/recaptchalib.php');
                              	$publickey = sqlsingle("select * from module_types where name='recaptcha'","config1");
                              	echo "<center><script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api/challenge?k=$publickey\"></script></center>";
                              }else{
                                      ?>
                           <img src="<?=$securebase?>/capt.php?size=6&amp;<?=microtime()?>" alt="" id="cap" title="" /> <br />
                           <br />
                           [<a href="javascript:;" onclick="document.getElementById('cap').src = '<?=$securebase?>/capt.php?size=6&amp;' + (new Date()).getTime();" class="linkbutton">
                           <?=NEWCODE ?>
                           </a>] <br />
                           <br />
                           <?=CFCODE?>
                           <br />
                           <p class="red bold">
                              <?=CFCODE2?>
                           </p>
                           <br />
                           <input type="text" name="vcode" class="formfield" />
                           <br />
                           <br />
                           <input type="hidden" value="<?=$fkey?>" name="fkey" />
                           <input type="hidden" value="<?=$formcode?>" name="formcode" />
                           <input type="hidden" name="validatenow" value="1" />
                           <input type="hidden" name="sldtld" value="<?=$sldtld?>" />
                           <?php } ?>
                        </td>
                     </tr>
                     <?php if ($wresults) { ?>
                     <tr>
                        <td class="ac"><?=$wresults?></td>
                     </tr>
                     <?php } ?>
                  </table>
               </fieldset>
               <?=$boxbottom?>
               <?php } ?>
               <?=$boxtop?>
               <fieldset>
                  <table class="width-100 formtable">
                     <tr>
                        <td class="ac"><input type="submit" class="btn btn-green" value="<?=FINISHREG?>" /></td>
                     </tr>
                  </table>
               </fieldset>
               <?=$boxbottom?>
            </form>
            <!-- registration form /e -->
         </td>
      </tr>
   </table>
</div>
<script language="javascript" type="text/javascript" src="js/common/cajs.js"></script>
<script language="javascript" type="text/javascript">
   window.addEvent('domready', function(){
   	check = new FormCheck('form1', {
   		display : {
   			fadeDuration 	: 500,
   			errorsLocation 	: 3,
   			indicateErrors 	: 2,
   			flashTips 		: true,
   			showErrors 		: 1
   		}
   	})
   });
</script>
<!-- Contents /e -->
<?=$bottom?>
