<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=HMANAGETITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
		<?=$dmsg?>
		<?php if (!$clientportal) { ?>
        <table class="width-99 alc">
            <tr>
                <td class="width-20 vlt"><?=$umenu?></td>
                <td class="width-1">&nbsp;</td>
                <td class="width-100 vlt">
				<!-- user menu /s -->
		<?php } ?>
				<?php if ($edit != "" or $action=="cancel_hosting"){ ?>
                <?=$form1?>
                <div class="ac"><a href="hmanage.php" class="rtrntomgmt" style="width:230px;"><?=HRETURNLINK?></a></div>
                <?php }else{ ?>


                            <form method="post" action="hmanage.php" class="awform" onsubmit="submitonce(this); showObject(false,true);">
<?=$boxtop?>
<fieldset>
<legend><span class="boxlegend"><?=SEARCH?></span></legend>
										<div class="ac bold">
                                        <?=CATEGORY?>:&nbsp;<select name="cat"><option value="domain" selected="selected">Domain</option></select>
                                        <?=SEARCH?>:&nbsp;<input type="text" name="list" class="width-50" />
											<input type="hidden" name="search" value="search" />
											<input type="hidden" name="so" value="domain" />
                                        	<input type="submit" name="submit" value="<?=GOBUTTON?>" />
                                        </div>
                                        <div class="ac">
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=0">[0-9]</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=a">A</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=b">B</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=c">C</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=d">D</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=e">E</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=f">F</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=g">G</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=h">H</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=i">I</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=j">J</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=k">K</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=l">L</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=m">M</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=n">N</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=o">O</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=p">P</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=q">Q</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=r">R</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=s">S</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=t">T</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=u">U</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=v">V</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=w">W</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=x">X</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=y">Y</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=z">Z</a>
                                            <a href="hmanage.php?so=<?=$so?>&amp;sd=<?=$sd?>&amp;list=all">[<?=SHOWALL?>]</a>

                                        </div>
</fieldset>
<?=$boxbottom?>
                            </form>
                    <div style="height:10px; clear:both;"></div>
                    <!-- start total records row -->
                    <form method="post" name="uipp" class="zeroPadding" action="hmanage.php">
                    <table class="totalRecords width-100">
                    <tr>
                    <td class="al"><?=TOTALRECORDS?>: <?=$total_records?></td>
                    <td class="ar"><select name="setipp" class="formlogin" onchange="document.uipp.submit()"><?=$uipp?></td>
                    </tr>
                    </table>
                    </form>
                    <div style="height:10px; clear:both;"></div>
                    <!-- end total records row -->
<?=$boxtop?>
<table class="width-100 data domainlist">
                    	<tr>
                        	<td nowrap="nowrap" class="boxtitle"><?=$domainlist?>
                    </table>
<?=$boxbottom?>
                    <?=$domainblist?>
				<!-- user menu /e -->
                <div class="underline bold"><?=ICONLEGEND?></div>
                <table class="width-100">
                    <tr>
                        <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/mag_glass.gif" alt="<?=VIEWRECORD?>" /></td>
                        <td nowrap="nowrap">= <?=VIEWRECORD?></td>
                        <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/dollar.gif" alt="<?=PAYINVOICE?>" /></td>
                        <td nowrap="nowrap">= <?=PAYINVOICE?></td>
                        <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/u.gif" alt="<?=HUPGRADE?>" /></td>
                        <td nowrap="nowrap">= <?=HUPGRADE?></td>
                        <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/a.gif" alt="<?=ORDERADDONS?>" /></td>
                        <td nowrap="nowrap">= <?=ORDERADDONS?></td>
                    </tr>
                </table>
        <?php } ?>
		<?php if (!$clientportal) { ?>
				</td>
			</tr>
		</table>
		<?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
