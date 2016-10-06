<?=$header?>
<?=$top?>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead"><?=DNSMGMTTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
    <tr>
		<td id="mainTD">
        	<?=$dmsg?>
            <table class="width-99 alc">
                <tr>
                    <td class="width-20 vlt"><div id="uvmenu"><div class="TabTitleBar"><?=MANAGEDOMAINMENU?></div><ul><?php include(WORKDIR."/templates/common_files/$registrar/menu.php"); ?></ul></div></td>
                    <td class="width-1">&nbsp;</td>
                    <td class="width-100 vlt">
                    <div class="regsitrarLeft"><div class="TabTitleBar">&nbsp;<?=DOMAIN?>:&nbsp;<?=$cSld?>.<?=$cTld?>&nbsp;&nbsp;<small>[<a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?></a>]</small></div><div class="regsitrarLeftContents">
                    <!---->
                    <h2 class="underline"><?=DNSMGMTBOXTITLE?></h2><small><?=DNSMGMTBLURB?>&nbsp;<a href="javascript:openWindns('dnshelp.php?ctld=<?=$cTld?>&amp;csld=<?=$cSld?>', 'DNShelp');"><?=DNSMGMTDNSHELP?></a></small>
					<?=$dnscontent?>
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
