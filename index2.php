<?=$header?>
<?=$top?>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead" colspan="2"><?=INDEXWELCOME?> <?=$companyname?>!</td>
	</tr>
    <tr>
		<td id="mainTD">
	<table>
    <tr>
    	<td class="vlt al width-25"><img src="templates/<?=$templatedir?>/images/goodservices.jpg" alt="" /></td>
		<td class="vlt al">
        	<p><?=INDEXBLURB1?></p><br /><p><?=INDEXBLURB3?></p>
            <div class="underline bold"><?=CHKNAME?></div>
            <form method="post" action="<?=$base?>/spincheck.php" id="check" name="check" onsubmit="submitonce(this); showObject(false,true);">
            <table class="width-100">
                <tr>
                    <td class="width-5 al bold paddZero"><?=DOMAIN?>:&nbsp;<input type="hidden" name="action" value="check" /></td>
                    <td class="width-100 ar paddZero"><input type="text" maxlength="272" name="cSSld" class="width-100" id="idsld" /></td>
                    <td class="width-5 al paddZero"><input type="submit" name="Submit" value="<?=CHECKDOM?>" style="width:60px;" /></td>
                </tr>
                <tr>
                    <td class="ac" colspan="3">
                    <?=build_tlds_checkboxes("register","16","4","showPrice")?>
                    </td>
                </tr>
                <tr>
                    <td class="ac" colspan="3"><p>[<a href="<?=$base?>/check.php" rel="external"><?=VIEWEXT?></a>]</p><p>[<a href="<?=$base?>/pricingfull.php" rel="external"><?=VIEWDOMPRICES?></a>]</p></td>
                </tr>                    
            </table>
            </form>
        </td>
    </tr>
    <tr>
    	<td class="vlt ac" colspan="2">
        <div class="ac">
            <img src="templates/<?=$templatedir?>/images/dot_org.gif" alt="dot ORG" title="dot ORG" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/dot_us.gif" alt="dot US" title="dot US" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/dot_tv.jpg" alt="dot TV" title="dot TV" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/dot_mn.gif" alt="dot MN" title="dot MN" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/dot_fm.gif" alt="dot FM" title="dot FM" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/dot_vc.gif" alt="dot VC" title="dot VC" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/dot_me.gif" alt="dot ME" title="dot ME" border="0" />&nbsp;
            <img src="templates/<?=$templatedir?>/images/logo_nu.gif" alt="dot NU" title="dot NU" border="0" />
		</div>
        </td>
	</tr>            
	</table>    
        
        
        </td>
    </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>