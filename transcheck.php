<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><h1><?=TCTITLE?>&nbsp;<?=$help_icon?></h1></td>
	</tr>
	<tr>
		<td id="mainTD">
		<form method="post" action="tspincheck.php" id="form1" name="form1" onsubmit="submitonce(this); showObject(false,true);" class="awform">
        	<input type="hidden" name="action" value="check" />
            <input type="hidden" name="subaction" value="transferdomains" />
            <?php if ( $cAction != "check" ) { ?>
            <p class="pb-10"><?=TRANSCHECKBLURB?></p>
        	<?php } ?>
			<?php
                if ( $cAction == "check" ) {
                    if ( $bError == 1 ) { echo TCERROR1; }
                    else if ( $bAvailable == 2 ) { echo TCERROR2; }
                    else if ( $bAvailable == 1 ) { echo TCERROR3; }
                    else if ( $bAvailable == 0 ) {
                        echo("
                            <p class=\"ac bold blue p-5\">".TCDOMAINNAME." ".$cSld.$cTld." ".ISAVAIL."</p>
                            <p class=\"ac p-5\"><a href=".$securebase."/transfer.php?cTld=".$cTld."&cSld=".$cSld."&SessionID=".$sessionid.">".TCCLICKTOTRANSFER."</a></p>
							<hr />
                            <p class=\"ac p-5\">".TCSECUREBLURB." ".TCSELECTANOTHER."</p>
                        ");
                    } else {
                        echo "Darn those php guys they made a bug!";
                    }
                }
            ?>
<?=$boxtop?>
<fieldset>
            	<legend><span class="boxlegend"><?=TCBOXTITLE?></span></legend>
                <table class="width-100 transcheck">
              <tr>
                        <td class="width-10 bold"><?=TCDOMAIN1?>:</td>
                        <td align="center" class="width-100"><input type="text" maxlength="272" name="check1" id="idsld" class="width-75" /></td>
                      <td class="width-25"><select name="tld1"><?php $tld_list=build_tlds("transfer","com");echo $tld_list;?>	</select> </td>
                    </tr>
                    <tr>
                        <td class="width-10 bold"><?=TCDOMAIN2?>:</td>
                        <td align="center" class="width-100"><input type="text" maxlength="272" name="check2" id="idsld2" class="width-75" /></td>
                      <td class="width-25"><select name="tld2"><?php $tld_list=build_tlds("transfer","com");echo $tld_list;?>	</select> </td>
                    </tr>
                    <tr>
                        <td class="width-10 bold"><?=TCDOMAIN3?>:</td>
                        <td align="center" class="width-100"><input type="text" maxlength="272" name="check3" id="idsld3" class="width-75" /></td>
                      <td class="width-25"><select name="tld3"><?php $tld_list=build_tlds("transfer","com");echo $tld_list;?>	</select> </td>
                    </tr>
                    <tr>
                        <td class="width-10 bold"><?=TCDOMAIN4?>:</td>
                        <td align="center" class="width-100"><input type="text" maxlength="272" name="check4" id="idsld4" class="width-75" /></td>
                      <td class="width-25"><select name="tld4"><?php $tld_list=build_tlds("transfer","com");echo $tld_list;?>	</select> </td>
                    </tr>
                    <tr>
                        <td class="width-10 bold"><?=TCDOMAIN5?>:</td>
                        <td align="center" class="width-100"><input type="text" maxlength="272" name="check5" id="idsld5" class="width-75" /></td>
                      <td class="width-25"><select name="tld5"><?php $tld_list=build_tlds("transfer","com");echo $tld_list;?>	</select> </td>
                    </tr>
                    <tr>
                        <td class="width-10 bold"><?=TCDOMAIN6?>:</td>
                        <td align="center" class="width-100"><input type="text" maxlength="272" name="check6" id="idsld6" class="width-75" /></td>
                      <td class="width-25"><select name="tld6"><?php $tld_list=build_tlds("transfer","com");echo $tld_list;?>	</select> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="ac"><input type="submit" name="Submit" value="<?=SUBMIT?>" onclick="showObject(false,true);"/>	</td>
                    </tr>
                </table>
</fieldset>
<?=$boxbottom?>
		</form>
		<?php if ( $cAction != "check" ) { ?>
			<p class="ac red bold"><?=TCINFOTITLE?></p>
            <ul>
            	<li><?=TCINFO1?></li>
                <li><?=TCINFO2?></li>
                <li><?=TCINFO3?></li>
                <li><?=TCINFO4?></li>
                <li><?=TCINFO5?></li>
                <li><?=TCINFO6?></li>
            </ul>
		<?php  } ?>
        <table class="alc"><tr><td><?=$payment_images?></td></tr></table>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
