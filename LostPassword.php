<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=LOSTPASSWORDTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
        <?=$cErrorMsg?>
        <form method="post" action="LostPassword.php" id="form2" name="form2" class="awform">
<?=$boxtop?>
<fieldset>
        	<legend><span class="boxlegend"><?=IKNOWUSERNAME?></span></legend>
            <table class="width-100">
            	<tr>
                	<td class="width-25 bold ar vlt"><?=LPUSERNAME?>:&nbsp;</td>
                    <td class="width-75 al vlt">
                    	<input type="text" maxlength="75" name="user" value="<?=$user?>" class="width-75" />
                        <p><?=IKNOWUSERNAMETEXT?></p>
                    </td>
                </tr>
            	<tr>
                	<td class="ac" colspan="2">
                    	<input type="hidden" name="action" value="login" />
                        <input type="submit" name="Submit" value="<?=LPSUBMIT?>" />
                    </td>
                </tr>
            </table>
</fieldset>
<?=$boxbottom?>
		<?php if($dupeemailoverride != "1"){ ?>
        <br />
<?=$boxtop?>
<fieldset>
        	<legend><span class="boxlegend"><?=IKNOWEMAIL?></span></legend>
            <table class="width-100">
            	<tr>
                	<td class="width-25 bold ar vlt"><?=LPEMAIL?>:&nbsp;</td>
                    <td class="width-75 al vlt">
                    	<input type="text" maxlength="75" name="mailadd" value="<?=$mailadd?>" class="width-75" />
                        <p><?=IKNOWEMAILTEXT?></p>
                    </td>
                </tr>
            	<tr>
                	<td class="ac" colspan="2">
                    	<input type="hidden" name="action" value="login" />
                        <input type="submit" name="Submit" value="<?=LPSUBMIT?>" />
                    </td>
                </tr>
            </table>
</fieldset>
<?=$boxbottom?>
        <?php } ?>
        <br />
<?=$boxtop?>
<fieldset>
        	<legend><span class="boxlegend"><?=IKNOWDOMAIN?></span></legend>
            <table class="width-100">
            	<tr>
                	<td class="width-25 bold ar vlt"><?=LPDOMAIN?>:&nbsp;</td>
                    <td class="width-75 al vlt">
                    	<input type="text" name="domainsld" value="<?=$domainsld?>" class="width-55" />.<input type="text" maxlength="25" name="domaintld" value="<?=$domaintld?>" class="width-15" />
                        <p><?=IKNOWDOMAINTEXT?></p>
                    </td>
                </tr>
            	<tr>
                	<td class="ac" colspan="2">
                    	<input type="hidden" name="action" value="login" />
                        <input type="submit" name="Submit" value="<?=LPSUBMIT?>" />
                    </td>
                </tr>
            </table>
</fieldset>
<?=$boxbottom?>
		</form>
        <p class="p-10"><?=LPBLURB?></p>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>