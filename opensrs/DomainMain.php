<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=DOMAINMAINTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
    <tr>
		<td id="mainTD">
        	<?=$dmsg?>
        	<?=$cErrorMsg?>
            <table class="width-99 alc">
                <tr>
                    <td class="width-20 vlt"><div id="uvmenu"><div class="TabTitleBar"><?=MANAGEDOMAINMENU?></div><ul><?php include(WORKDIR."/templates/common_files/opensrs/menu.php"); ?></ul></div></td>
                    <td class="width-1">&nbsp;</td>
                    <td class="width-100 vlt">
                    <div class="regsitrarLeft">
                    <div class="TabTitleBar">&nbsp;<?=DOMAIN?>:&nbsp;<?=$cSld?>.<?=$cTld?>&nbsp;&nbsp;<small>[<a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?></a>]</small></div>
                    <div class="regsitrarLeftContents">
                    <!---->
                    <div class="al"><b class="red"><?=DOMEXPDATE?></b>: <?=$ExpDate?></div>
                    <form method="post" action="DomainMain.php" name="theForm" id="theForm" class="awform" onsubmit="submitonce(this);showObject(false,true);">
                        <input type="hidden" name="action" value="setlocking" />
                        <input type="hidden" value="FullForm" name="FormType" />
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=DOMLOCKING?></span></legend>
                            <table class="width-100">
                                <tr>
                                    <td class="ac vlm bold"><div align="center"><p class="width-30 ac"><?=$lockline?></p></div></td>
                                </tr>
                                <tr>
                                    <td class="ac vlm bold">
                                        <input type="submit" name="Submit" value="<?=DMSAVE?>" />
                                        <br />
                                        <small><?=DOMLOCKINGNOTE?></small>
                                    </td>
                                </tr>
                            </table>
</fieldset>
<?=$boxbottom?>
                    </form>
                    <form method="post" action="DomainMain.php" name="arform" id="arform" class="awform" onsubmit="submitonce(this);showObject(false,true);">
						<input type="hidden" name="action" value="setautorenew" />
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=DOMAUTORENEW?></span></legend>
                            <table class="width-100">
                                <tr>
                                    <td class="ac vlm bold"><div align="center"><p class="width-30 ac"><?=$renewline?></p></div></td>
                                </tr>
                                <tr>
                                    <td class="ac vlm bold">
                                        <input type="submit" name="Submit" value="<?=DMSAVE?>" />
                                        <br />
                                        <small><?=DOMAUTORENEWNOTE?></small>
                                    </td>
                                </tr>
                            </table>
</fieldset>
<?=$boxbottom?>
                    </form>
                        <h2 class="underline bold"><?=GLOBALEGEND?></h2>
                        <p><strong><?=CONTACTINFOLINK?></strong><br /><?=CONTACTINFOLINKTEXT?></p>
                        <br />
                        <p><strong><?=CHANGENAMESERVERSLINK?></strong><br /><?=CHANGENAMESERVERSLINKTEXT?></p>
                        <br />
                        <p><strong><?=NAMESERVERSLINK?></strong><br /><?=NAMESERVERSLINKTEXT?></p>
                    <!---->
                    </div>
                    </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
