<?=$header?>
<?=$top?>
<script type="text/javascript" src="js/Page_Validation_Fns.js"></script>
<script type="text/javascript" src="js/DomainContacts.js"></script>
<!-- Contents /s -->
<table id="mainData" class="account-page domain-manager-page">
	<tr>
		<td id="tablehead"><h1><?=DOMAINCONTACTSTITLE?>&nbsp;<?=$help_icon?></h1></td>
	</tr>
    <tr>
		<td id="mainTD">
      <?=$dmsg?>
			<div class="account-page-holder">
					<div class="sidemenu vlt">
						<div id="uvmenu" class="simple-menu">
							<ul>
								<li class="head"><?=MANAGEDOMAINMENU?></li>
								<?php
								 if(is_file(WORKDIR."/templates/$templatedir/$registrar/menu.php")){
									include(WORKDIR."/templates/$templatedir/$registrar/menu.php");
								 }else{
									include(WORKDIR."/templates/common_files/$registrar/menu.php");
								 }
								?>
								</ul>
						</div>
					</div>
					<div class="account-contant-container">
						<div class="domain-managed-item">
							<div class="row">
								<div class="col-md-12 vlm">
									<div class="domain-name mobile-align-left">
									<?=DOMAIN?>: <strong><?=$cSld?>.<?=$cTld?></strong> <a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle action-btn" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?><i class="fa fa-gear"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="ac"><?=DOMAINCONTACTSEPPKEY?>:&nbsp;<span class="bold red"><?=$EPPKey?></span></div>
						<div class="reqfieldsnote"><?=REQUIREDFIELDS?></div>
						<form method="post" action="DomainContacts.php" name="form1" onsubmit="return CheckFields(); showObject();" class="awform">
						   <input type="hidden" name="action" id="idName" value="modify" />
						   <input type="hidden" name="CallingAppl" id="idCallingAppl" value="Access" />
						   <!---->
						   <?php if ($cTld == "de") { ?>
						   <fieldset>
						      <legend><?=DOMAINCONTACTSDELEGAL?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ar vlm width-50"><em class="red">*</em><?=DCDELEGALTYPE?>: </td>
						            <td class="al vlm"><select name="NexusCategory" class="width-75"><?php include (WORKDIR."/calist.php"); ?></select></td>
						         </tr>
						      </table>
						   </fieldset>
						   <?php } ?>
						   <!---->
						   <?php if ($cTld == "ca") { ?>
						   <fieldset>
						      <legend><?=DOMAINCONTACTSCALEGAL?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ar vlm width-50"><em class="red">*</em><?=DCCALEGALTYPE?>: </td>
						            <td class="al vlm"><select name="NexusCategory" class="width-75"><?php include (WORKDIR."/calist.php"); ?></select></td>
						         </tr>
						      </table>
						   </fieldset>
						   <?php } ?>
						   <!---->
						   <?php if ($cTld == "co.uk" or $cTld == "org.uk") { ?>
						   <fieldset>
						      <legend><?=DOMAINCONTACTSUKLEGAL?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ar vlm width-50"><?=DCUKLEGALTYPE?>: </td>
						            <td class="al vlm"><select name="NexusCategory" class="width-75"><?php include (WORKDIR."/uklist.php"); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-50"><?=DCUKCOMPANYID?>: </td>
						            <td class="al vlm"><input type="text" name="AppPurpose" value="<?=$AppPurpose?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-50"><?=COIOBHO?> </td>
						            <td class="al vlm"><input type="text" name="NexusCountry" value="<?php echo $NexusCountry; ?>" class="width-75" /></td>
						         </tr>
						      </table>
						   </fieldset>
						   <?php } ?>
						   <!---->
						   <?php if ($cTld == "us") { ?>
						   <fieldset>
						      <legend><?=DOMAINCONTACTSUSLEGAL?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ar vlm width-35">
						               <a href="legalpop.php" rel="external" onclick='window.open("<?=$base?>/legalpop.php","legalpop","width=475,height=415,status=yes,scrollbars=1,resizable=1");return false;'><img src="templates/<?=$templatedir?>/images/question.gif" border=0 alt="<?=NEXUSHELP?>"></a> <em class="red">*</em><b><?=DCUSNEXUSCAT?></b> <br/><small><?=USNEXCATDESC?></small>
						            </td>
						            <td class="al vlt width-65">
						               <p><input type="radio" name="NexusCategory" value="C11"<?php if ($NexusCategory=="C11"){ echo 'checked="checked"'; } ?> />C11 <?=USC11TEXT?></p>
						               <p><input type="radio" name="NexusCategory" value="C12" <?php if ($NexusCategory=="C12"){ echo 'checked="checked"'; } ?> />C12 <?=USC12TEXT?></p>
						               <p><input type="radio" name="NexusCategory" value="C21" <?php if ($NexusCategory=="C21"){ echo 'checked="checked"'; } ?> />C21 <?=USC21TEXT?></p>
						               <p><input type="radio" name="NexusCategory" value="C31" <?php if ($NexusCategory=="C31"){ echo 'checked="checked"'; } ?> />C31/CC <?=USC31TEXT?></p>
						               <p><input type="radio" name="NexusCategory" value="C32" <?php if ($NexusCategory=="C32"){ echo 'checked="checked"'; } ?> />C32/CC <?=USC32TEXT?></p>
						            </td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=USNEXUSCOUNTRY?> </td>
						            <td class="al vlm width-65"><select name="NexusCountry" class="width-75"><?php include (WORKDIR."/uscountry.php"); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=USAPPPURPOSE?> <br /><small><?=APPPURPOSEDESC?></small> </td>
						            <td class="al vlt width-65">
						               <p><input type="radio" name="AppPurpose" value="P1" <?php if ($AppPurpose=="P1"){ echo 'checked="checked"'; } ?> />P1 <?=USP1TEXT?></p>
						               <p><input type="radio" name="AppPurpose" value="P2" <?php if ($AppPurpose=="P2"){ echo 'checked="checked"'; } ?> />P2 <?=USP2TEXT?></p>
						               <p><input type="radio" name="AppPurpose" value="P3" <?php if ($AppPurpose=="P3"){ echo 'checked="checked"'; } ?> />P3 <?=USP3TEXT?></p>
						               <p><input type="radio" name="AppPurpose" value="P4" <?php if ($AppPurpose=="P4"){ echo 'checked="checked"'; } ?> />P4 <?=USP4TEXT?></p>
						               <p><input type="radio" name="AppPurpose" value="P5" <?php if ($AppPurpose=="P5"){ echo 'checked="checked"'; } ?> />P5 <?=USP5TEXT?></p>
						            </td>
						         </tr>
						      </table>
						   </fieldset>
						   <?php } ?>
						   <!---->
						   <fieldset>
						      <legend><?=REGISTRANTINFO?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ar vlm width-35"><?=DCORGNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" name="RegistrantOrganizationName" id="idRegistrantOrg" value="<?=$RegistrantOrganizationName?>" maxlength="60" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCJOBTITLE?>: </td>
						            <td class="al vlt width-65"><input type="text" name="RegistrantJobTitle" id="idRegistrantJob" value="<?=$RegistrantJobTitle?>" maxlength="60" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCFIRSTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="RegistrantFirstName" id="idRegistrantFName" value="<?=$RegistrantFirstName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCLASTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="RegistrantLastName" id="idRegistrantLName" value="<?=$RegistrantLastName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCADDRESS1?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="RegistrantAddress1" id="idRegistrantAddress" value="<?=$RegistrantAddress1?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCADDRESS2?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="RegistrantAddress2" id="idRegistrantAddress2" value="<?=$RegistrantAddress2?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCITY?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="RegistrantCity" id="idRegistrantCity" value="<?=$RegistrantCity?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <?php
						               //note : strStateValue is used in statelist.php
						               $strStateValue = $RegistrantStateProvince;
						               ?>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="State" id="idrbtRegistrantState" name="rbtRegistrantStateProvince" <?php if ( trim($RegistrantStateProvinceChoice) == "S" || $RegistrantStateProvinceChoice == "" ) { echo 'checked="checked"'; }?> onclick="fnRegistrantStateSelected()" /><?=DCSTATE?></p>
						            </td>
						            <td class="al vlt width-65"><select name="RegistrantState" id="idRegistrantState" class="width-75"><? include (WORKDIR."/StateList.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="Province" name="rbtRegistrantStateProvince" id="idrbtRegistrantSelectProvince" <?php if ( trim($RegistrantStateProvinceChoice) == "P" ) { echo 'checked="checked"'; } ?> onclick="fnRegistrantProvinceSelected()" /><?=DCPROVINCE?></p>
						            </td>
						            <td class="al vlt width-65"><input type="text" name="RegistrantProvince" id="idRegistrantProvince" maxlength="60" value="<?php if ($RegistrantStateProvinceChoice == "P") { echo $strStateValue; } ?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="Blank" name="rbtRegistrantStateProvince" id="idrbtRegistrantStateProvinceNA" <?php if (trim($RegistrantStateProvinceChoice) == "N") { echo 'checked="checked"'; } ?> onclick="fnRegistrantNoneSelected()" /><?=DCNOTAPP?></p>
						            </td>
						            <td class="al vlt width-65"><?=DCNOTAPPDESC?></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCZIP?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="15" name="RegistrantPostalCode" id="idRegistrantZip" value="<?=$RegistrantPostalCode?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCOUNTRY?>: </td>
						            <td class="al vlt width-65"><select name="RegistrantCountry" id="idRegistrantCountry" class="width-75"><?php $country=$RegistrantCountry;include (WORKDIR."/countrys.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCPHONE?>: </td>
						            <td class="al vlt width-65"><input  type="text" maxlength="20" name="RegistrantPhone" id="idRegistrantPhone" value="<?=$RegistrantPhone?>" class="width-75" /><br /><small><?=DCPHONEDESC?></small></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCFAX?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="RegistrantFax" id="idRegistrantFax" value="<?=$RegistrantFax?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCEMAIL?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="128" name="RegistrantEmailAddress" id="idRegistrantEmail" value="<?=$RegistrantEmailAddress?>" class="width-75" /></td>
						         </tr>
						      </table>
						   </fieldset>
						   <!---->
						   <fieldset>
						      <legend><?=ADMININFO?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ac vlm bold" colspan="2">
						               <div align="center">
						                  <p class="ar width-50"><input type="radio" name="OptContactAdmin" id="OptContactAdmin" value="AuxAboveRs" onclick="AdminUseRegistrantInfo()" /><?=DCUSEABOVE?></p>
						                  <p class="ar width-50"><input type="radio" name="OptContactAdmin" id="idOptContactAdmin" value="AuxExistingRs" onclick="EnableAdminContact(true)" checked="checked" /><?=DCUSEFOLLOWING?></p>
						               </div>
						            </td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCORGNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AdminOrganizationName" id="idAdminOrg" value="<?=$AdminOrganizationName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCJOBTITLE?>: </td>
						            <td class="al vlt width-65"><input type="text" name="AdminJobTitle" id="idAdminJob" value="<?=$AdminJobTitle?>" maxlength="60" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCFIRSTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AdminFirstName" id="idAdminFName" value="<?=$AdminFirstName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCLASTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AdminLastName" id="idAdminLName" value="<?=$AdminLastName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCADDRESS1?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AdminAddress1" id="idAdminAddress" value="<?=$AdminAddress1?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCADDRESS2?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AdminAddress2" id="idAdminAddress2" value="<?=$AdminAddress2?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCITY?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AdminCity" id="idAdminCity" value="<?=$AdminCity?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <?php
						               $strStateValue = trim( $AdminStateProvince );
						               ?>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="State" id="idrbtAdminState" name="rbtAdminStateProvince" <?php if (trim($AdminStateProvinceChoice) == "S" || trim($AdminStateProvinceChoice) == "" ) { echo 'checked="checked"'; }?> onclick="fnAdminStateSelected()" /><?=DCSTATE?></p>
						            </td>
						            <td class="al vlt width-65"><select name="AdminState" id="idAdminState"  class="width-75"><?php include (WORKDIR."/StateList.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" size="14" class="formfield" value="Province" name="rbtAdminStateProvince" id="idrbtAdminSelectProvince" <?php if ( trim($AdminStateProvinceChoice) == "P" ) { echo 'checked="checked"'; } ?> onclick="fnAdminProvinceSelected()" /><?=DCPROVINCE?></p>
						            </td>
						            <td class="al vlt width-65"><input type="text" name="AdminProvince" id="idAdminProvince" maxlength="60" value="<?php if (trim($AdminStateProvinceChoice) == "P") { echo $AdminStateProvince; } ?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="Blank" name="rbtAdminStateProvince" id="idrbtAdminStateProvinceNA" <?php if (trim($AdminStateProvinceChoice) == "N") { echo 'checked="checked"'; }?>  onclick="fnAdminNoneSelected()" /><?=DCNOTAPP?></p>
						            </td>
						            <td class="al vlt width-65"><?=DCNOTAPPDESC?></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCZIP?> </td>
						            <td class="al vlt width-65"><input type="text" maxlength="15" name="AdminPostalCode" id="idAdminZip" value="<?=$AdminPostalCode?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCOUNTRY?>: </td>
						            <td class="al vlt width-65"><select name="AdminCountry" id="idAdminCountry" class="width-75"><?php $country=$AdminCountry; include(WORKDIR."/countrys.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCPHONE?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="AdminPhone" id="idAdminPhone" value="<?=$AdminPhone?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCFAX?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="AdminFax" id="idAdminFax" value="<?=$AdminFax?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCEMAIL?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="128" name="AdminEmailAddress" id="idAdminEmail" value="<?=$AdminEmailAddress?>" class="width-75" /></td>
						         </tr>
						      </table>
						   </fieldset>
						   <!---->
						   <fieldset>
						      <legend><?=BILLINGINFO?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ac vlm bold" colspan="2">
						               <div align="center">
						                  <p class="ar width-50"><input type="radio" name="OptContactTech" id="OptContactTech" value="AuxAboveRs" onclick="AuxUseRegistrantInfo()" /><?=DCUSEABOVE?></p>
						                  <p class="ar width-50"><input type="radio" name="OptContactTech" id="idOptContactTech" value="AuxExistingRs" onclick="EnableAuxBilling(true)" checked="checked" /><?=DCUSEFOLLOWING?></p>
						               </div>
						            </td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCORGNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AuxBillingOrganizationName" id="idAuxBillingOrg" value="<?=$AuxBillingOrganizationName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCJOBTITLE?>: </td>
						            <td class="al vlt width-65"><input type="text" name="AuxBillingJobTitle" id="idAuxBillingJob" value="<?=$AuxBillingJobTitle?>" maxlength="60" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCFIRSTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AuxBillingFirstName" id="idAuxBillingFName" value="<?=$AuxBillingFirstName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCLASTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AuxBillingLastName" id="idAuxBillingLName" value="<?=$AuxBillingLastName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCADDRESS1?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AuxBillingAddress1" id="idAuxBillingAddress" value="<?=$AuxBillingAddress1?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCADDRESS2?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AuxBillingAddress2" id="idAuxBillingAddress2" value="<?=$AuxBillingAddress2?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCITY?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="AuxBillingCity" id="idAuxBillingCity" value="<?=$AuxBillingCity?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <?php
						               $strStateValue = trim( $AuxBillingStateProvince );
						               ?>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="State" id="idrbtAuxBillingState" name="rbtAuxBillingStateProvince" <?php if (trim($AuxBillingStateProvinceChoice) == "S" || trim($AuxBillingStateProvinceChoice) == "" ) { echo 'checked="checked"'; }?> onclick="fnAuxBillingStateSelected()" /><?=DCSTATE?></p>
						            </td>
						            <td class="al vlt width-65"><select name="AuxBillingState" id="idAuxBillingState"  class="width-75"><?php include (WORKDIR."/StateList.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" size="14" value="Province" name="rbtAuxBillingStateProvince" id="idrbtAuxBillingSelectProvince" <?php if ( trim($AuxBillingStateProvinceChoice) == "P" ) { echo 'checked="checked"'; } ?> onclick="fnAuxBillingProvinceSelected()" /><?=DCPROVINCE?></p>
						            </td>
						            <td class="al vlt width-65"><input type="text" name="AuxBillingProvince" id="idAuxBillingProvince" maxlength="60" value="<?php if ($AuxBillingStateProvinceChoice == "P") { echo $strStateValue; } ?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="Blank" name="rbtAuxBillingStateProvince" id="idrbtAuxBillingStateProvinceNA" <?php if (trim($AuxBillingStateProvinceChoice) == "N") { echo 'checked="checked"'; }?> onclick="fnAuxBillingNoneSelected()" /><?=DCNOTAPP?></p>
						            </td>
						            <td class="al vlt width-65"><?=DCNOTAPPDESC?></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCZIP?>: </td>
						            <td class="al vlt width-65"><input type="text" name="AuxBillingPostalCode" id="idAuxBillingZip"  value="<?=$AuxBillingPostalCode?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCOUNTRY?>: </td>
						            <td class="al vlt width-65"><select name="AuxBillingCountry" id="idAuxBillingCountry" class="width-75"><?php $country=$AuxBillingCountry;include (WORKDIR."/countrys.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCPHONE?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="AuxBillingPhone" id="idAuxBillingPhone" value="<?=$AuxBillingPhone?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCFAX?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="AuxBillingFax" id="idAuxBillingFax" value="<?=$AuxBillingFax?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCEMAIL?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="128" name="AuxBillingEmailAddress" id="idAuxBillingEmail" value="<?=$AuxBillingEmailAddress?>" class="width-75" /></td>
						         </tr>
						      </table>
						   </fieldset>
						   <!---->
						   <fieldset>
						      <legend><?=TECHINFO?></legend>
						      <table class="width-100 formtable">
						         <tr>
						            <td class="ac vlm bold" colspan="2">
						               <div align="center">
						                  <p class="ar width-50"><input type="radio" name="OptTechnical" id="OptTechnical" value="UseBilling" onclick="TechUseRegistrantInfo()" /><?=DCUSEABOVE?></p>
						                  <p class="ar width-50"><input type="radio" name="OptTechnical" id="idOptTechnical" value="UseExisting" onclick="EnableTechnicalContact(true)" checked="checked" /><?=DCUSEFOLLOWING?></p>
						               </div>
						            </td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCORGNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="TechOrganizationName" id="idTechOrg" value="<?=$TechOrganizationName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCJOBTITLE?>: </td>
						            <td class="al vlt width-65"><input type="text" name="TechJobTitle" id="idTechJob" value="<?=$TechJobTitle?>" maxlength="60" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCFIRSTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="TechFirstName" id="idTechFName" value="<?=$TechFirstName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCLASTNAME?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="TechLastName" id="idTechLName" value="<?=$TechLastName?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCADDRESS1?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="TechAddress1" id="idTechAddress" value="<?=$TechAddress1?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCADDRESS2?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="TechAddress2" id="idTechAddress2" value="<?=$TechAddress2?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCITY?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="60" name="TechCity" id="idTechCity" value="<?=$TechCity?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <?php
						               $strStateValue = trim( $TechStateProvince );
						               ?>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="State" id="idrbtTechState" name="rbtTechStateProvince" <?php if (trim($TechStateProvinceChoice) == "S" || trim($TechStateProvinceChoice) == "" ) { echo 'checked="checked"'; }?> onclick="fnTechStateSelected()" /><?=DCSTATE?></p>
						            </td>
						            <td class="al vlt width-65"><select name="TechState" id="idTechState" class="width-75"><?php include (WORKDIR."/StateList.php"); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" size="14" value="Province" name="rbtTechStateProvince" id="idrbtTechSelectProvince" <?php if ( trim($TechStateProvinceChoice) == "P" ) { echo 'checked="checked"'; } ?> onclick="fnTechProvinceSelected()" /><?=DCPROVINCE?></p>
						            </td>
						            <td class="al vlt width-65"><input type="text" name="TechProvince" id="idTechProvince" maxlength="60" value="<?php if ($TechStateProvinceChoice == "P") { echo $strStateValue; }?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35">
						               <p><input type="radio" value="Blank" name="rbtTechStateProvince" id="idrbtTechStateProvinceNA" <?php if (trim($TechStateProvinceChoice) == "N") { echo 'checked="checked"'; } ?> onclick="fnTechNoneSelected()" /><?=DCNOTAPP?></p>
						            </td>
						            <td class="al vlt width-65"><?=DCNOTAPPDESC?></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCZIP?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="15" name="TechPostalCode" id="idTechZip" value="<?php echo $TechPostalCode; ?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCCOUNTRY?>: </td>
						            <td class="al vlt width-65"><select name="TechCountry" id="idTechCountry" class="width-75"><?php $country=$TechCountry;include (WORKDIR."/countrys.php" ); ?></select></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCPHONE?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="TechPhone" id="idTechPhone" value="<?=$TechPhone?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><?=DCFAX?>: </td>
						            <td class="al vlt width-65"><input type="text" maxlength="20" name="TechFax" id="idTechFax" value="<?=$TechFax?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ar vlm width-35"><em class="red">*</em><?=DCEMAIL?> </td>
						            <td class="al vlt width-65"><input type="text" maxlength="128" name="TechEmailAddress" id="idTechEmail" value="<?=$TechEmailAddress?>" class="width-75" /></td>
						         </tr>
						         <tr>
						            <td class="ac vlm bold" colspan="2"><input type="submit" name="Submit" value="<?=SUBMIT?>" /></td>
						         </tr>
						      </table>
						   </fieldset>
						   <!---->
						</form>
						<div class="ac"><a href="<?=$base?>/DomainMain.php?dns=<?=$dns?>" class="rtrntomgmt"><?=RETURNTOMANAGE?></a></div>

					</div>
				</div>
        </td>
    </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
