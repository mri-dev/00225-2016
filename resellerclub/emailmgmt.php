<?=$header?>
<?=$top?>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead"><?=EMAILMGMTTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
    <tr>
		<td id="mainTD">
        	<?=$dmsg?>
            <table class="width-99 alc">
                <tr>
                    <td class="width-20 vlt"><div id="uvmenu"><div class="TabTitleBar"><?=MANAGEDOMAINMENU?></div><ul><?php include(WORKDIR."/templates/common_files/resellerclub/menu.php"); ?></ul></div></td>
                    <td class="width-1">&nbsp;</td>
                    <td class="width-100 vlt">
                    <div class="regsitrarLeft">
                    <div class="TabTitleBar">&nbsp;<?=DOMAIN?>:&nbsp;<?=$cSld?>.<?=$cTld?>&nbsp;&nbsp;<small>[<a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?></a>]</small></div>
                    <div class="regsitrarLeftContents">
                    <!---->
                    <form method="post" action="emailmgmt.php" onsubmit="submitonce(this);showObject(false,true);">
                    <table class="totalRecords width-100">
                        <tr>
                            <td class="al"><?=DEFAULTFORWARD?>:&nbsp;
                                <input type="hidden" name="req" value="DMOD" />
                                <input type="hidden" name="entityid" value="<?=$entityid?>" />
                                <select name="status">
                                <?php if($defaultStatus == '1'){ ?>
                                    <option value="1"><?=EBOUNCE?></option>
                                    <option value="0" selected="selected"><?=EFORWARD?></option>
                                <?php }else{ ?>
                                    <option value="1" selected="selected"><?=EBOUNCE?></option>
                                    <option value="0"><?=EFORWARD?></option>
                                <?php } ?>
                                </select>
                                <input type="text" name="defaultForward" value="<?=$defaultEmail?>" />
                                <input type="submit" name="Submit" value="<?=SAVECHANGESBUT?>" /> 
                            </td>
                        </tr>
                    </table>
                    <br />
                    </form>
					<?php if($forwardStatus == 0){ ?><div class="error ac sm"><?=NOFORWARDINGNOTE?></div><?php }else{ ?>
					<table class="width-100 data">
                    	<tr><td class="boxtitle ac" colspan="3"><?=EXISTINGFORWARD?></td></tr>
						<?php foreach($forwardArray as $key => $value){ ?>	
                        <tr>
                            <td class="ar"><?=$key?>@<?=$domainName?></td>
                            <td class="al"><?=$value?></td>
                            <td class="ac">[<a href="emailmgmt.php?req=DEL&amp;entityid=<?=$entityid?>&amp;prefix=<?=$key?>" class="red"><?=DELETE?></a>]</td>
                        </tr>
						<?php } ?>
					</table>
                    <br />
					<?php } ?>
					<form method="post" action="emailmgmt.php" onsubmit="submitonce(this);showObject(false,true);">
					<input type="hidden" name="req" value="ADD" />
					<input type="hidden" name="entityid" value="<?=$entityid?>" />
					<table class="width-98 data alc">
                    	<tr><td class="boxtitle ac" colspan="3"><?=ADDFORWARD?></td></tr>
						<tr>
                            <td class="ar vlm bold"><?=EMAILFOR?>:&nbsp;</td>
                            <td><input type="text" name="prefix" /> @ <?=$domainName?></td>
						</tr>
                            <tr>
                                <td class="ar vlm bold"><?=FORWARDTO?>:&nbsp;</td>
                                <td>
                                <input type="text" name="forwardTo" />
                                <input type="submit" value="<?=ADD?>" />
                                </td>
                            </tr>
					</table>
                    </form>                    
                    <!---->
                    </div>
                    </div>
                    <a href="<?=$base?>/DomainMain.php?dns=<?=$dns?>" class="rtrntomgmt"><?=RETURNTOMANAGE?></a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>