<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
	<tr>
		<td id="tablehead"><h1><?=PAYINVOICETITLE?>&nbsp;<?=$help_icon?></h1></td>
	</tr>
	<tr>
		<td id="mainTD">
        <form method="post" action="pay_invoice.php" id="form1" name="form1" onsubmit="submitonce(this); showObject(false,true);" class="awform">
			<input type="hidden" name="instatus" value="none" />
            <input type="hidden" name="subaction" value="regdomains" />
            <input type="hidden" name="action" value="register" />
			<?php
				// Check if there are any messages to display
				if ( $cAction == "register" ) {
					// The register obviously didn't go well if we got here, so let's
					// print out the error
					if ( $bError == 1 ) {
						// There was some kind of error, print that out
						echo "<div class=\"error ac\">".REQUIREDFIELDSERROR."</div> ";
					} else if ( $bRegistered == 0 ) {
					// The domain name is already registered
						if ($approved=="no") {
							echo $dmsg;
						} else {
					echo "<div class=\"error ac\">".CCUNKNOWNERROR."</div>";
					}
				} else {
					// Shouldn't get here!!!
					echo "<div class=\"error ac\">Some errors occurred</div>";
					}
				}
			?>
            <h3 class="ac"><?=PAYINVOICEBOXTITLE?></h3>
            <p class="p-5 ac"><?=ACCOUNTNAME?>: <strong><?=$newuid?></strong><br />
            <?=PAYINVOICESINVOICES?><br />
            <?=INVOICE?> #: <?=$invoice_num?>   <?=AMOUNT?>: <strong class="red"><?=LCURRENCYSYMBOL?><?=$total_charge?><?=RCURRENCYSYMBOL?></strong><br />
            <?=TOTALDUE?>: <strong class="red"><?=LCURRENCYSYMBOL?><?=$grand_total?><?=RCURRENCYSYMBOL?></strong></p>
            <?=$hiddeninc?>

<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=BILLINGINFO?></span></legend>
                <table class="width-100">
                <?php if ($offsitebill != "1" and $ccprocessor != "None") { ?>
                    <tr>
                        <td class="ac bold" colspan="2"><?=CCINFORMATION?><br /><?=REQUIREDFIELDS?></td>
                    </tr>
                <?php
					if($storecc=="1" and $dooldcc!="1" and $cardtype!="CardOnFile"){
						echo("
							<tr>
								<td class=\"ac vlm\" colspan=\"2\"><div align=\"center\"><p class=\"width-25\"><input type=\"checkbox\" name=\"SaveCard\" id=\"idSaveCard\" value=\"1\" $saveccchecked />".SAVECARD."</p></div></td>
							</tr>
							<tr>
								<td class=\"ac\" colspan=\"2\">".SAVECARDBLURB."</td>
							</tr>
						");
					}else if($cardtype=="CardOnFile"){
						$flocked = "disabled";
					}
				?>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=FIRSTNAME?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingFirstName" id="idAuxBillingFirstName" maxlength="25" value="<?=$AuxBillingFirstName?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=LASTNAME?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingLastName" id="idAuxBillingLastName" maxlength="25" value="<?=$AuxBillingLastName?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=ADDRESS1?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingAddress1" id="idAuxBillingAddress1" maxlength="50" value="<?=$AuxBillingAddress1?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><?=ADDRESS2?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingAddress2" id="idAuxBillingAddress2" maxlength="25" value="<?=$AuxBillingAddress2?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=CITY?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingCity" id="idAuxBillingCity" maxlength="25" value="<?=$AuxBillingCity?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=STATE?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingStateProvince" id="idAuxBillingStateProvince" maxlength="25" value="<?=$AuxBillingStateProvince?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=ZIP?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingPostalCode" id="idAuxBillingPostalCode" maxlength="25" value="<?=$AuxBillingPostalCode?>" class="width-20" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=COUNTRY?>:&nbsp;</td>
                        <td class="al width-60"><select name="AuxBillingCountry" class="width-45" <?=$flocked?>><?php include(WORKDIR."/countrys.php");?></select></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=PHONE?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingCardPhone" id="idAuxBillingCardPhone" maxlength="25" value="<?=$AuxBillingCardPhone?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><?=COMPANY?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="AuxBillingOrganizationName" id="idAuxBillingOrganizationName" maxlength="25" value="<?=$AuxBillingOrganizationName?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=CCNUMBER?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="cardnumber" id="idcardnumber" maxlength="25" value="<?=$cardnumber?>" class="width-45" <?=$flocked?> /></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=CVV2?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="cvv" id="idcvv" maxlength="25" value="<?=$cvv?>" class="width-20" /></td>
                    </tr>
                    <tr><td class="ac bold" colspan="2"><?=CVV2INFO?></td></tr>
                    <?php if(strtolower($cardtype)=="solo" or strtolower($cardtype)=="switch" or ($sccmo != "" and $sccyr != "")){ ?>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=CCSTARTMO?>:&nbsp;</td>
                        <td class="al width-60" nowrap="nowrap">
                            <select name="sccmo" id="idsccmo" class="width-20" <?=$flocked?>>
                                <option <?php if ( $sccmo=="01" ) { echo "selected=\"selected\""; } ?>>01</option>
                                <option <?php if ( $sccmo=="02" ) { echo "selected=\"selected\""; } ?>>02</option>
                                <option <?php if ( $sccmo=="03" ) { echo "selected=\"selected\""; } ?>>03</option>
                                <option <?php if ( $sccmo=="04" ) { echo "selected=\"selected\""; } ?>>04</option>
                                <option <?php if ( $sccmo=="05" ) { echo "selected=\"selected\""; } ?>>05</option>
                                <option <?php if ( $sccmo=="06" ) { echo "selected=\"selected\""; } ?>>06</option>
                                <option <?php if ( $sccmo=="07" ) { echo "selected=\"selected\""; } ?>>07</option>
                                <option <?php if ( $sccmo=="08" ) { echo "selected=\"selected\""; } ?>>08</option>
                                <option <?php if ( $sccmo=="09" ) { echo "selected=\"selected\""; } ?>>09</option>
                                <option <?php if ( $sccmo=="10" ) { echo "selected=\"selected\""; } ?>>10</option>
                                <option <?php if ( $sccmo=="11" ) { echo "selected=\"selected\""; } ?>>11</option>
                                <option <?php if ( $sccmo=="12" ) { echo "selected=\"selected\""; } ?>>12</option>
                            </select>
                        &nbsp;<em class="red">*</em><?=CCSTARTYR?>:&nbsp;<strong>20</strong>
                            <select name="sccyr" id="idsccyr" class="width-20" <?=$flocked?>>
                                <option <?php if ( $sccyr=="00" ) { echo "selected=\"selected\""; } ?>>00</option>
                                <option <?php if ( $sccyr=="01" ) { echo "selected=\"selected\""; } ?>>01</option>
                                <option <?php if ( $sccyr=="02" ) { echo "selected=\"selected\""; } ?>>02</option>
                                <option <?php if ( $sccyr=="03" ) { echo "selected=\"selected\""; } ?>>03</option>
                                <option <?php if ( $sccyr=="04" ) { echo "selected=\"selected\""; } ?>>04</option>
                                <option <?php if ( $sccyr=="05" ) { echo "selected=\"selected\""; } ?>>05</option>
                                <option <?php if ( $sccyr=="06" ) { echo "selected=\"selected\""; } ?>>06</option>
                                <option <?php if ( $sccyr=="07" ) { echo "selected=\"selected\""; } ?>>07</option>
                                <option <?php if ( $sccyr=="08" ) { echo "selected=\"selected\""; } ?>>08</option>
                                <option <?php if ( $sccyr=="09" ) { echo "selected=\"selected\""; } ?>>09</option>
                                <option <?php if ( $sccyr=="10" ) { echo "selected=\"selected\""; } ?>>10</option>
                                <option <?php if ( $sccyr=="11" ) { echo "selected=\"selected\""; } ?>>11</option>
                                <option <?php if ( $sccyr=="12" ) { echo "selected=\"selected\""; } ?>>12</option>
                                <option <?php if ( $sccyr=="13" ) { echo "selected=\"selected\""; } ?>>13</option>
                                <option <?php if ( $sccyr=="14" ) { echo "selected=\"selected\""; } ?>>14</option>
                                <option <?php if ( $sccyr=="15" ) { echo "selected=\"selected\""; } ?>>15</option>
                                <option <?php if ( $sccyr=="16" ) { echo "selected=\"selected\""; } ?>>16</option>
                                <option <?php if ( $sccyr=="17" ) { echo "selected=\"selected\""; } ?>>17</option>
                                <option <?php if ( $sccyr=="18" ) { echo "selected=\"selected\""; } ?>>18</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=ISSUENUMBER?>:&nbsp;</td>
                        <td class="al width-60"><input type="text" name="issuenumber" id="idissuenumber" maxlength="25" value="<?=$issuenumber?>" class="width-20" /></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td align="right" nowrap="nowrap"><em class="red">*</em><?=CCEXPMO?>:&nbsp;</td>
                        <td class="al width-60" nowrap="nowrap" <?=$flocked?>>
                            <select name="ccmo" id="idccmo" class="width-20">
                            	<option <?php if ( $ccmo=="01" ) { echo "selected=\"selected\""; } ?>>01</option>
                                <option <?php if ( $ccmo=="02" ) { echo "selected=\"selected\""; } ?>>02</option>
                                <option <?php if ( $ccmo=="03" ) { echo "selected=\"selected\""; } ?>>03</option>
                                <option <?php if ( $ccmo=="04" ) { echo "selected=\"selected\""; } ?>>04</option>
                                <option <?php if ( $ccmo=="05" ) { echo "selected=\"selected\""; } ?>>05</option>
                                <option <?php if ( $ccmo=="06" ) { echo "selected=\"selected\""; } ?>>06</option>
                                <option <?php if ( $ccmo=="07" ) { echo "selected=\"selected\""; } ?>>07</option>
                                <option <?php if ( $ccmo=="08" ) { echo "selected=\"selected\""; } ?>>08</option>
                                <option <?php if ( $ccmo=="09" ) { echo "selected=\"selected\""; } ?>>09</option>
                                <option <?php if ( $ccmo=="10" ) { echo "selected=\"selected\""; } ?>>10</option>
                                <option <?php if ( $ccmo=="11" ) { echo "selected=\"selected\""; } ?>>11</option>
                                <option <?php if ( $ccmo=="12" ) { echo "selected=\"selected\""; } ?>>12</option>
                            </select>
                            &nbsp;<em class="red">*</em><?=CCEXPYR?>:&nbsp;&nbsp;<strong>20</strong>
                            <select name="ccyr" id="idccyr" class="width-20" <?=$flocked?>>
                            	<?php $nowyear=strftime("%y",strtotime("now"));?>
                                <option <?php if ( $ccyr==($nowyear) ) { echo "selected=\"selected\""; } ?>><?php echo $nowyear;?></option>
                                <option <?php if ( $ccyr==($nowyear + 1) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 1);?></option>
                                <option <?php if ( $ccyr==($nowyear + 2) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 2);?></option>
                                <option <?php if ( $ccyr==($nowyear + 3) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 3);?></option>
                                <option <?php if ( $ccyr==($nowyear + 4) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 4);?></option>
                                <option <?php if ( $ccyr==($nowyear + 5) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 5);?></option>
                                <option <?php if ( $ccyr==($nowyear + 6) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 6);?></option>
                                <option <?php if ( $ccyr==($nowyear + 7) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 7);?></option>
                                <option <?php if ( $ccyr==($nowyear + 8) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 8);?></option>
                                <option <?php if ( $ccyr==($nowyear + 9) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 9);?></option>
                                <option <?php if ( $ccyr==($nowyear + 10) ) { echo "selected=\"selected\""; } ?>><?php echo ($nowyear + 10);?></option>
                          </select>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td class="ac red" colspan="2" nowrap="nowrap"><?=NOREFUND?></td>
                    </tr>
                    <tr>
					<?php
                        if ($regstatus == "UnReg"){
                            echo "<td class=\"ac vlm p-20\" colspan=\"2\"><input type=\"submit\" name=\"Submit\" value=\"".RESUBMIT."\" /></td>";
                        } else {
                            echo "<td class=\"ac vlm p-20\" colspan=\"2\"><input type=\"submit\" name=\"Submit\" value=\"".AGREECONT."\" /></td>";
                        }
                    ?>
                    </tr>
                </table>
</fieldset>
<?=$boxbottom?>
		</form>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
