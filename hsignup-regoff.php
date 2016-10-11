<?=$header?>
<?=$top?>
<script type="application/javascript" language="javascript" src="js/common/hsignup_regoff.js"></script>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=HSIGNUPBOXTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
        <?=$dmsg?>
        <form method="post" action="hsignup.php" name="form1" onsubmit="submitonce(this); showObject(false,true);" class="awform">
			<input type="hidden" name="hwplan" value="<?=$plan?>" />
            <input type="hidden" name="pt" value="<?=$pt?>" />
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=HSIGNUPTITLE?></span></legend>
                <table class="width-100">
                    <?php define(HSN,"2"); include(WORKDIR."/templates/common_files/cftable.php"); ?>
                    <tr>
                        <td class="ac vlm bold" colspan="2">
	                        <input type="hidden" name="type" value="nsonly" /><?=LEAVEATCURRENTREGISTRAR?>
                        </td>
                    </tr>
                    <tr>
                        <td class="ar vlm width-15 paddZero"><?=DOMAIN?>:&nbsp;</td>                    
                        <td class="al vlt bold paddZero"><span><input type="text" name="bhsld" id="bhsld" value="<?=$bhsld?>" class="width-60" /></span><span>&nbsp;<strong>.</strong>&nbsp;</span><span><input type="text" name="bhtld" id="bhtld" value="<?=$bhtld?>" size="5" /></span></td>
                    </tr>
                </table>
</fieldset>
<?=$boxbottom?>
            <div class="ac"><input type="submit" name="submit" value="<?=NEXT?>" /></div>
		</form>
		</td>	
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>