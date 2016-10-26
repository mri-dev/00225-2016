<?=$header?>
<?=$top?>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead"><?=DNS2MGMTTITLE?>&nbsp;<?=$help_icon?></td>
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
                    <div class="bold"><?=USEDF?></div>
                    <div class="al pb-10"><?=S0BLURB1?><?=$domainName?>&nbsp;<?=S0BLURB2?>&nbsp;<?=$domainName?><?=S0BLURB3?></div>
                    <form action="dnsmgmt.php" method="post" onsubmit="submitonce(this);showObject(false,true);">
                        <input type="hidden" name="entityid" value="<?=$entityid?>" />
                        <input type="hidden" name="REQ" value="MOD" />
                        <table class="totalRecords width-100"><tr><td class="al bold"><?=DFDEST?>:&nbsp;<input type="text" name="forward" value="<?=$forward?>" size="60" /></td></tr></table>
                        <br />
                    	<div class="underline bold"><?=S1TITLE?></div>
                        <?=S1BLURB1?> <?=$domainName?> <?=S1BLURB2?>
						<table class="totalRecords width-100"><tr><td><p><input type="checkbox" name="urlmasking" value="true" <?php if($urlmasking == 'true'){echo'checked="checked"';}?> /><?=S1BLURB3?></p></td></tr></table>
						<br />
                        <div class="underline bold"><?=S2TITLE?></div>
                        <?=S2BLURB1?><?=$domainName?>/ <?=S2BLURB2?>
						<table class="totalRecords width-100"><tr><td><p><input type="checkbox" name="subdomainforwarding" value="true" <?php if($urlmasking == 'subdomainforwarding'){echo'checked="checked"';}?> /><?=S2BLURB3?></p></td></tr></table>
                        <br />
                        <div class="underline bold"><?=S3TITLE?></div>
                        <?=S3BLURB1?>
                        <br />
                        <table class="totalRecords width-100"><tr><td class="bold vlt ar width-35"><?=S3BLURB2?>:&nbsp;</td><td class="vlt"><textarea rows="10" name="headertags" cols="48"><?=$headertags?></textarea></td></tr></table>
                        <br />
                        <div class="underline bold"><?=S4TITLE?></div>
                        <?=S4BLURB1?>
                        <br />
                        <table class="totalRecords width-100"><tr><td class="bold vlt ar width-35"><?=S4BLURB2?>:&nbsp;</td><td class="vlt"><textarea name="noframes" rows="10" cols="48"><?=$noframes?></textarea></td></tr></table>
                        <br />
                        <div class="ac"><input type="submit" value="<?=SAVECHANGESBUT?>" /></div>
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