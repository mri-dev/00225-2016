<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=NSMAINTTITLE?>&nbsp;<?=$help_icon?></td>
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
                    <?=NSMAINTBLURB?>
                    <hr />
                    <table class="width-98 data" align="center">
                        <tr>
                            <td class="boxtitle" colspan="2"><?=NSMAINTNEWNAMESERVER?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="width-35 vlt small al grey p-5"><?=NSMAINTNEWNAMESERVERINFO?></td>
                            <td class=" vlt al">
                                      <form method="post" action="nsmaint.php" onsubmit="submitonce(this); showObject(true,false);">
                                        <input type="hidden" name="action" value="modify" />
                                        <input type="hidden" name="subaction" value="addns" />                    <table class="width-100">
                                <tr>
                                <td class="ar vlt width-35 bold"><?=NSMAINTNAMESERVER?>:&nbsp;</td>
                                <td class="al vlt "><input type="text" name="nsname" class="width-75" /></td>
                                </tr>
                                <tr>
                                <td class="ar vlt width-35 bold"><?=NSMAINTIPADD?>:&nbsp;</td>
                                <td class="al vlt "><input type="text" name="nsip" class="width-75" /></td>
                                </tr>
                                <tr><td class="ac" colspan="2"><input type="submit" name="submit" value="<?=NSMAINTSUBMIT?> " /></td></tr>
                                </table>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="boxtitle" colspan="2"><?=NSMAINTEDIT?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="width-35 vlt small al grey p-5"><?=NSMAINTEDITINFO?></td>
                            <td class=" vlt al">
                                      <form method="post" action="nsmaint.php" onsubmit="submitonce(this); showObject(true,false);">
                                        <input type="hidden" name="action" value="modify" />
                                        <input type="hidden" name="subaction" value="updatens" />
                                <table class="width-100">
                                <tr>
                                <td class="ar vlt width-35 bold"><?=NSMAINTNAMESERVER?>:&nbsp;</td>
                                <td class="al vlt "><input type="text" name="nsname" class="width-75" /></td>
                                </tr>
                                <tr>
                                <td class="ar vlt width-35 bold"><?=NSMAINTOLDIP?>:&nbsp;</td>
                                <td class="al vlt "><input type="text" name="oldip" class="width-75" /></td>
                                </tr>
                                <tr>
                                <td class="ar vlt width-35 bold"><?=NSMAINTNEWIP?>:&nbsp;</td>
                                <td class="al vlt "><input type="text" name="newip" class="width-75" /></td>
                                </tr>
                                <tr><td class="ac" colspan="2"><input type="submit" name="submit" value="<?=NSMAINTSUBMIT?> " /></td></tr>
                                </table>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="boxtitle" colspan="2"><?=NSMAINTDELETE?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="width-35 vlt small al grey p-5"><?=NSMAINTDELETEINFO?></td>
                            <td class=" vlt al">
                                      <form method="post" action="nsmaint.php" onsubmit="submitonce(this); showObject(true,false);">
                                        <input type="hidden" name="action" value="modify" />
                                        <input type="hidden" name="subaction" value="deletens" />                         <table class="width-100">
                                <tr>
                                <td class="ar vlt width-35 bold"><?=NSMAINTNAMESERVER?>:&nbsp;</td>
                                <td class="al vlt "><input type="text" name="nsname" class="width-75" /></td>
                                </tr>
                                <tr><td class="ac" colspan="2"><input type="submit" name="submit" value="<?=NSMAINTSUBMIT?> " /></td></tr>
                                </table>
                                </form>
                            </td>
                        </tr>
                    </table>
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