<?=$header?>
<?=$top?>
<!-- Contents /s -->
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
<input type="hidden" id="minPassLength" value="<?=$minpass?>" />
<input type="hidden" id="maxPassLength" value="<?=$maxpass?>" />
<script language="javascript" type="text/javascript" src="js/common/samg.js"></script>
<table id="mainData">
	<tr>
		<td id="tablehead"><?=PMGMTTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
		<?php if (!$clientportal) { ?>
        <table class="width-99 alc">
            <tr>
                <td class="width-20 vlt"><?=$umenu?></td>
                <td class="width-1">&nbsp;</td>
                <td class="width-100 vlt">
				<!-- user menu /s -->
		<?php } ?>
                    <form method="post" action="subacctmgmt.php" id="form1" name="form1" class="awform">
                        <input type="hidden" name="action" value="save" />
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="hidden" name="subaction" value="<?php echo $subaction; ?>" />
                        <input type="hidden" name="oldemail" value="<?php echo $oldemail; ?>" />
                        <input type="hidden" name="addnew" value="<?php echo $addnew; ?>" />
                        <input type="hidden" name="newpass3" value="<?php echo $newpass3; ?>" />
                        <input type="hidden" name="oldemail" value="<?php echo $aemail; ?>" />
                        <p class="red ac bold"><?=REQFIELDSNOTE?></p>
                        <?=$genMsg?>
                        <?=$cErrorMsg?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=SUBACCTINFO?></span></legend>
                        <table class="width-100">
                            <tr>
                                <td colspan="2" class="ac vlt bold"><?=SUBACCTTOPBLURB?></td>
                            </tr>
                            <tr>
                                <td class="ar vlt width-40"><em class="red">*</em><?=PROFILENAME?>:&nbsp;</td>
                                <td><input type="text" name="name" id="aname" maxlength="60" value="<?=$name?>" class="validate['required'] width-55" /></td>
                            </tr>
                            <tr>
                            	<td class="ar vlt width-40">&nbsp;</td>
                                <td class="ac vlt bold"><div class="al"><p class="width-40" style="text-align:left;"><input type="checkbox" name="isactive" value="1" <?=$isactiveselected?> /><?=ISACTIVETEXT?>&nbsp;</p></div></td>
                            </tr>
                            <tr>
                                <td class="ar vlt width-35"><em class="red">*</em><?=PASS?>:&nbsp; </td>
                                <td>
                                    <input id="password" type="password" name="newpass1" maxlength="150" value="<?=$newpass1?>" class="validate['required','length[<?=$minpass?>,<?=$maxpass?>]'] width-55" />
                                    <p class="bold">(<?=CREATEMIN?> <?=$minpass?> <?=CREATEMAX?> <?=$maxpass?> <?=CREATEPASSSPECS?>)</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="ar vlt width-35"><em class="red">*</em><?=PASSVERIFY?>:&nbsp;
                                </td>
                                <td>
                                    <input id="idpassword2" type="password" name="newpass2" maxlength="150" value="<?=$newpass2?>" class="validate['required','confirm[password]'] width-55" />
                                    <p class="bold">(<?=CREATEMIN?> <?=$minpass?> <?=CREATEMAX?> <?=$maxpass?> <?=CREATEPASSSPECS?>)</p></td>
                            </tr>
                            <tr>
                                <td class="ar vlt width-35"><em class="red">*</em><?=FIRSTNAME?>:&nbsp; </td>
                                <td><input type="text" name="afname" id="afname" maxlength="60" value="<?=$afname?>" class="validate['required'] width-55" /></td>
                            </tr>
                            <tr>
                                <td class="ar vlt width-35"><em class="red">*</em><?=LASTNAME?>:&nbsp; </td>
                                <td><input type="text" name="alname" id="alname" maxlength="60" value="<?=$alname?>" class="validate['required'] width-55" /></td>
                            </tr>
                            <tr>
                                <td class="ar vlt width-35"><em class="red">*</em><?=EMAILADDRESS?>:&nbsp; </td>
                                <td><input type="text" name="aemail" id="aemail" maxlength="128" onblur="updateEmail();" value="<?=$aemail?>" class="validate['required','email'] width-55" /><div id="checkedE" class="inline"></div></td>
                            </tr>
                        </table>
</fieldset>
<?=$boxbottom?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=SUBACCTSECURITY?></span></legend>
                        <table class="width-100">
                            <tr>
                                <td colspan="2" class="ac vlt bold"><?=SUBACCTBLURB?></td>
                            </tr>
                        </table>
</fieldset>
<?=$boxbottom?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=DOMAINPERMISSIONS?></span></legend>
                        <table class="width-100">
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec2" value="MD1" <?=$sec2selected?> />&nbsp;&nbsp;<?=SEC2?></p>
                                    <small><em style="padding-left:10px"><?=SEC2TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="ac vlt">
                                <p class="al"><?=SEC2B?></p>
                                <small><em style="padding-left:10px"><?=SEC2BTEXT?></em></small>
                                <br />
                                <select name="domains[]" multiple="multiple" size="5" class="width-55" style="text-align:left;"><?=$domainselectlist?></select>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec16" value="DOMC1" <?=$sec16selected?> />&nbsp;&nbsp;<?=SEC16?></p>
                                    <small><em style="padding-left:10px"><?=SEC16TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec19" value="DOMNS1" <?=$sec19selected?> />&nbsp;&nbsp;<?=SEC19?></p>
                                    <small><em style="padding-left:10px"><?=SEC19TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec20" value="DOMNS2" <?=$sec20selected?> />&nbsp;&nbsp;<?=SEC20?></p>
                                    <small><em style="padding-left:10px"><?=SEC20TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec21" value="DOMP1" <?=$sec21selected?> />&nbsp;&nbsp;<?=SEC21?></p>
                                    <small><em style="padding-left:10px"><?=SEC21TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec17" value="DOME1" <?=$sec17selected?> />&nbsp;&nbsp;<?=SEC17?></p>
                                    <small><em style="padding-left:10px"><?=SEC17TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec18" value="DOMD1" <?=$sec18selected?> />&nbsp;&nbsp;<?=SEC18?></p>
                                    <small><em style="padding-left:10px"><?=SEC18TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec22" value="DOMN1" <?=$sec22selected?> />&nbsp;&nbsp;<?=SEC22?></p>
                                    <small><em style="padding-left:10px"><?=SEC22TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec23" value="DOMN2" <?=$sec23selected?> />&nbsp;&nbsp;<?=SEC23?></p>
                                    <small><em style="padding-left:10px"><?=SEC23TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec24" value="DOMDD1" <?=$sec24selected?> />&nbsp;&nbsp;<?=SEC24?></p>
                                    <small><em style="padding-left:10px"><?=SEC24TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec25" value="DOMAR1" <?=$sec25selected?> />&nbsp;&nbsp;<?=SEC25?></p>
                                    <small><em style="padding-left:10px"><?=SEC25TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec26" value="DOML1" <?=$sec26selected?> />&nbsp;&nbsp;<?=SEC26?></p>
                                    <small><em style="padding-left:10px"><?=SEC26TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec6" value="D4S" <?=$sec6selected?> />&nbsp;&nbsp;<?=SEC6?></p>
                                    <small><em style="padding-left:10px"><?=SEC6TEXT?></em></small>
                                </td>
                            </tr>
                        </table>
</fieldset>
<?=$boxbottom?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=GENERALPERMISSIONS?></span></legend>
                        <table class="width-100">
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec1" value="PO1" <?=$sec1selected?> />&nbsp;&nbsp;<?=SEC1?></p>
                                    <small><em style="padding-left:10px"><?=SEC1TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec3" value="MH1" <?=$sec3selected?> />&nbsp;&nbsp;<?=SEC3?></p>
                                    <small><em style="padding-left:10px"><?=SEC3TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec4" value="MO1" <?=$sec4selected?> />&nbsp;&nbsp;<?=SEC4?></p>
                                    <small><em style="padding-left:10px"><?=SEC4TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec5" value="MS1" <?=$sec5selected?> />&nbsp;&nbsp;<?=SEC5?></p>
                                    <small><em style="padding-left:10px"><?=SEC5TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec7" value="VPI" <?=$sec7selected?> />&nbsp;&nbsp;<?=SEC7?></p>
                                    <small><em style="padding-left:10px"><?=SEC7TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec9" value="UCC1" <?=$sec9selected?> />&nbsp;&nbsp;<?=SEC9?></p>
                                    <small><em style="padding-left:10px"><?=SEC9TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec10" value="HDSK" <?=$sec10selected?> />&nbsp;&nbsp;<?=SEC10?></p>
                                    <small><em style="padding-left:10px"><?=SEC10TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec11" value="MPRO1" <?=$sec11selected?> />&nbsp;&nbsp;<?=SEC11?></p>
                                    <small><em style="padding-left:10px"><?=SEC11TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec12" value="UPR1" <?=$sec12selected?> />&nbsp;&nbsp;<?=SEC12?></p>
                                    <small><em style="padding-left:10px"><?=SEC12TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec13" value="SEC1" <?=$sec13selected?> />&nbsp;&nbsp;<?=SEC13?></p>
                                    <small><em style="padding-left:10px"><?=SEC13TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <p class="width-75 al"><input type="checkbox" name="sec14" value="REF1" <?=$sec14selected?> />&nbsp;&nbsp;<?=SEC14?></p>
                             <small><em style="padding-left:10px"><?=SEC14TEXT?></em></small>
                                </td>
                            </tr>
                            <tr>
                                <td class="al vlt">
                                    <div class="al"><p class="width-75 al"><input type="checkbox" name="sec15" value="DWN1" <?=$sec15selected?> />&nbsp;&nbsp;<?=SEC15?></p></div>
                                    <small><em style="padding-left:10px"><?=SEC15TEXT?></em></small>
                                </td>
                            </tr>
                            <?php if ($addnew!=1){ ?>
                            <tr>
                                <td class="ac vlt">
                                    <div align="center"><p class="width-30 red"><input type="checkbox" name="delete" value="1" />&nbsp;&nbsp;<strong><?=DELETEPROFILE?></strong></p></div>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>

</fieldset>
<?=$boxbottom?>
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=FINISH?></span></legend>
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
                    <p class="ac"><a href="subacctmgmt.php" class="rtrntomgmt"><?=CANCELCLICK?></a></p>
		<?php if (!$clientportal) { ?>
				<!-- user menu /e -->
				</td>
			</tr>
		</table>
		<?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>