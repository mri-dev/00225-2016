<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="spincheck"><table id="mainData">
	<tr>
		<td id="tablehead"><h1><?=SPINTITLE?>&nbsp;<?=$help_icon?></h1></td>
	</tr>
	<tr>
		<td id="mainTD">
        <form action="<?=$base?>/cart.php" method="post" name="myform" onsubmit="submitonce(this); showObject(false,true);">
<?=$boxtop?>
<table class="width-100 data alc">
	                <tr>
                        <td class="boxtitle">&nbsp;<?=SPINCSELECT?>&nbsp;</td>
                        <td class="boxtitle">&nbsp;<?=SPINCDOMAIN?>&nbsp;</td>
                        <td class="boxtitle">&nbsp;<?=SPINCSTATUS?>&nbsp;</td>
                        <td class="boxtitle ac"><?=SPINCPRICE?></td>
    	            </tr>
			<?=$row1?>
        </table>
<?=$boxbottom?>
		<?php $startpoint="0"; if($dt_enabled == 1 and $dt_error == ""){ ?>
		<div class="underline bold"><?=WEALSO?></div>
		<table class="width-99 data alc"><?=$row2?></table>
		<?php } ?>
       <br />
<?=$boxtop?>
<table class="width-100 data alc form-button-row">
            <tr>
                <td class="ac">
                    <input type="hidden" name="action" value="update" />
                    <input type="hidden" name="rtype" value="<?=$rtype?>" />
                    <input type="hidden" name="subaction" value="<?=$subaction?>" />
                    <input type="hidden" name="ca" value="processdomains" />
                    <input type="hidden" name="hwplan" value="<?=$hwplan?>" />
                    <input type="hidden" name="dsplan" value="<?=$dsplan?>" />
                    <input type="hidden" name="numdomains" value="<?=$numdomains?>" />
                		<input type="submit" name="Submit" value="<?=SPINBUTTON?>" />
										<input type="button" onclick="toURL('<?=$base?>')" value="<?=CANCELCLICK?>" />
                    <?php if($_REQUEST['hwplan']){ ?>
                    <input type="button" onclick="toURL('<?=$base?>/hsignup.php?plan=<?=$_REQUEST[hwplan];?>')" value="<?=SEARCHAGAIN?>" />
                    <?php }else if($_REQUEST['dsplan']){?>
                    <input type="button" onclick="toURL('<?=$base?>/hsignup.php?pt=ds&plan=<?=$_REQUEST[dsplan];?>')" value="<?=SEARCHAGAIN?>" />
                    <?php }else if($_REQUEST['domainlist']){?>
                    <input type="button" onclick="toURL('<?=$base?>/bulkcheck.php')" value="<?=SEARCHAGAIN?>" />
                    <?php }else{ ?>
                    <input type="button" onclick="toURL('<?=$base?>/check.php?isidn=<?=$isidn?>')" value="<?=SEARCHAGAIN?>" />
                    <?php } ?>
										<br><br>
                </td>
            </tr>
        </table>
				<?=$boxbottom?>
        </form>
			<?=$boxtop?>
			<table class="width-100 data alc">
				<tr><td>
				<img src="templates/<?=$templatedir?>/images/redx.gif" alt="&nbsp;" /> <?=DOMAINNAVAIL?>
				&nbsp;&nbsp;&nbsp;
				<img src="templates/<?=$templatedir?>/images/g_yellow_on.gif" alt="&nbsp;" /> <?=WHOISERROR?></td></tr>
			</table>
			<?=$boxbottom?>
		</td>
	</tr>
</table></div>
<?=$bottom?>
