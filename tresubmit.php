<?=$header?>
<?=$top?>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead"><?=TRESUBMITTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
        <?=$dmsg?>
        <form method="post" action="tresubmit.php" id="form1" name="form1" class="awform">
			<input type="hidden" name="action" value="check" />
            <input type="hidden" name="cTld" value="<?php echo $cTld; ?>" />
            <input type="hidden" name="cSld" value="<?php echo $cSld; ?>" />
            <?php if ( $cAction != "check" ) { ?>
            <p class="bold ac"><?=RESUBMITBLURB?></p>
            <?php  } ?>
<?=$boxtop?>
<fieldset>
            	<legend><span class="boxlegend"><?=TRESUBMITBOXTITLE?></span></legend>
                <table class="width-100">
                	<tr>
                    	<td class="bold" colspan="2">
                        <p class="uline"><?=TRESUBMITFAILEDNAME?></p>
                        <p><?=$cSld?>.<?=$cTld?></p>
                        <p class="red ac p-5"><?=$failure_reason?></p>
                        </td>
                    </tr>
                    <?php if ( $cAction != "check" ) { ?>
                    <tr>
                    	<td class="bold ac"><?=EPPKEY?>:&nbsp;<input type="text" name="eppkey" value="<?=$eppkey?>" class="width-50" /> (<?=IFREQUIRED?>)</td>
                        <td class="ac"><input type="submit" name="Submit" value="<?=RESUBMIT?>" /></td>
                    </tr>
                    <?php } ?>
                </table>
</fieldset>
<?=$boxbottom?>
		</form>
		<?php if ( $cAction != "check" ) { ?>
        	<hr />
			<p class="ac red bold"><?=TCINFOTITLE?></p>
			<p class="p-5"><?=TCINFO1?></p>
			<p class="p-5"><?=TCINFO2?></p>
			<p class="p-5"><?=TCINFO3?></p>
			<p class="p-5"><?=TCINFO4?></p>
			<p class="p-5"><?=TCINFO5?></p>
		<?php  }else{ ?>
        	<hr />
			<p class="ac red bold"><?=TCINFOTITLE?></p>
			<p class="p-5"><?=TCINFO1?></p>        
		<?php  } ?>        
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>