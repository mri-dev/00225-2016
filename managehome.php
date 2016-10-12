<?=$header?>
<?=$top?>
<script type="text/javascript">
	function AddThisToCart(domainName) {
		var el = document.id('srenew');
		el.removeClass('invisible'); el.addClass('success');
		el.innerHTML += decodeHTML("<?=PRECRENEW?>&nbsp;&lt;strong&gt;" + domainName + "&lt;/strong&gt;&nbsp;<?=POSTCRENEW?>&lt;br /&gt;");
		document.getElementById(domainName).src = decodeHTML("cart.php?check1="+ domainName +"&amp;rtype=renew&amp;silent=1");
	}
</script>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead"><?=MANAGEHOMETITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
		<?php if (!$clientportal) { ?>
        <table class="width-99 alc">
            <tr>
                <td class="width-20 vlt"><?=$umenu?></td>
                <td class="width-1">&nbsp;</td>
                <td class="width-100 vlt">
				<!-- user menu /s -->     
		<?php } ?>
		<?=$dmsg?>
        <div id="srenew" class="invisible"></div>
        <h3 class="underline bold"><?=DOMAINSINACCOUNT?>: <span class="green"><?=ucfirst($newuid)?></span></h3>
				<form method="post" action="managehome.php" class="awform margin-5" onsubmit="submitonce(this); showObject(false,true);">
<?=$boxtop?>
<fieldset>
					<legend><span class="boxlegend"><?=SEARCH?></span></legend>
	                    	<div class="ac bold">
								<?=CATEGORY?>:&nbsp;<select name="cat"><option value="sld" selected="selected">SLD</option><option value="tld">TLD</option></select>
								<?=SEARCH?>:&nbsp;<input type="text" name="list" class="width-50" />
								<input type="hidden" name="search" value="search" />
								<input type="hidden" name="so" value="sld ASC" />
                                <input type="submit" name="submit" value="<?=GOBUTTON?>" />
                            </div>
                        	<div class="ac">
                                <a href="managehome.php?list=0&amp;so=<?=$so?>&amp;sd=<?=$sd?>">[0-9]</a>
                                <a href="managehome.php?list=a&amp;so=<?=$so?>&amp;sd=<?=$sd?>">A</a>
                                <a href="managehome.php?list=b&amp;so=<?=$so?>&amp;sd=<?=$sd?>">B</a>
                                <a href="managehome.php?list=c&amp;so=<?=$so?>&amp;sd=<?=$sd?>">C</a>
                                <a href="managehome.php?list=d&amp;so=<?=$so?>&amp;sd=<?=$sd?>">D</a>
                                <a href="managehome.php?list=e&amp;so=<?=$so?>&amp;sd=<?=$sd?>">E</a>
                                <a href="managehome.php?list=f&amp;so=<?=$so?>&amp;sd=<?=$sd?>">F</a>
                                <a href="managehome.php?list=g&amp;so=<?=$so?>&amp;sd=<?=$sd?>">G</a>
                                <a href="managehome.php?list=h&amp;so=<?=$so?>&amp;sd=<?=$sd?>">H</a>
                                <a href="managehome.php?list=i&amp;so=<?=$so?>&amp;sd=<?=$sd?>">I</a>
                                <a href="managehome.php?list=j&amp;so=<?=$so?>&amp;sd=<?=$sd?>">J</a>
                                <a href="managehome.php?list=k&amp;so=<?=$so?>&amp;sd=<?=$sd?>">K</a>
                                <a href="managehome.php?list=l&amp;so=<?=$so?>&amp;sd=<?=$sd?>">L</a>
                                <a href="managehome.php?list=m&amp;so=<?=$so?>&amp;sd=<?=$sd?>">M</a>
                                <a href="managehome.php?list=n&amp;so=<?=$so?>&amp;sd=<?=$sd?>">N</a>
                                <a href="managehome.php?list=o&amp;so=<?=$so?>&amp;sd=<?=$sd?>">O</a>
                                <a href="managehome.php?list=p&amp;so=<?=$so?>&amp;sd=<?=$sd?>">P</a>
                                <a href="managehome.php?list=q&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Q</a>
                                <a href="managehome.php?list=r&amp;so=<?=$so?>&amp;sd=<?=$sd?>">R</a>
                                <a href="managehome.php?list=s&amp;so=<?=$so?>&amp;sd=<?=$sd?>">S</a>
                                <a href="managehome.php?list=t&amp;so=<?=$so?>&amp;sd=<?=$sd?>">T</a>
                                <a href="managehome.php?list=u&amp;so=<?=$so?>&amp;sd=<?=$sd?>">U</a>
                                <a href="managehome.php?list=v&amp;so=<?=$so?>&amp;sd=<?=$sd?>">V</a>
                                <a href="managehome.php?list=w&amp;so=<?=$so?>&amp;sd=<?=$sd?>">W</a>
                                <a href="managehome.php?list=x&amp;so=<?=$so?>&amp;sd=<?=$sd?>">X</a>
                                <a href="managehome.php?list=y&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Y</a>
                                <a href="managehome.php?list=z&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Z</a>
                                <a href="managehome.php?list=all&amp;so=<?=$so?>&amp;sd=<?=$sd?>">[<?=SHOWALL?>]</a>
                            </div>

</fieldset>
<?=$boxbottom?>
				</form>
        <?php if(!$noautorenew){ ?>
        <div class="ac"><?=$ar_icon?>&nbsp;<?=GLOBALARTOGGLE?>: [<a href="<?=$base?>/manage.php?autorenew=allon"><span class="green"><?=GARON?></span></a>]&nbsp;[<a href="<?=$base?>/manage.php?autorenew=alloff"><span class="red"><?=GAROFF?></span></a>]</div>
        <br />
        <?php }	?>
		<!-- start total records row -->
		<form method="post" name="uipp" class="zeroPadding" action="manage.php"><table class="totalRecords width-100"><tr><td class="al"><?=TOTALRECORDS?>: <?=$total_records?></td><td class="ar"><select name="setipp" onchange="document.uipp.submit()"><?=$uipp?></td></tr></table></form>
        <div style="height:10px; clear:both;"></div>
		<!-- end total records row -->
<?=$boxtop?>
<table class="width-100 data"><tr><td nowrap="nowrap" class="boxtitle"><?=$domainlist?></table>
<?=$boxbottom?>
        <?=$domainblist?>
        <div class="underline bold"><?=ICONLEGEND?></div>
        <table class="width-100">
            <tr>
                <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/m.gif" alt="m" /></td>
                <td nowrap="nowrap">= <?=MANAGE?></td>
                <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/r.gif" alt="r" /></td>
                <td nowrap="nowrap">= <?=RENEW?></td>
                <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/s.gif" alt="s" /></td>
                <td nowrap="nowrap">= <?=SELLDOMAIN?></td>
            </tr>
            <tr>
                <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/fs.gif" alt="fs" /></td>
                <td nowrap="nowrap">= <?=FORSALEM?></td>
                <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/h.gif" alt="h" /></td>
                <td nowrap="nowrap">= <?=HASHOSTING?></td>
                <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/ar.gif" alt="ar" /></td>
                <td nowrap="nowrap">= <?=AUTORENEW?></td>
            </tr>
        </table>
		<?php if (!$clientportal) { ?>
				<!-- user menu /e -->				
				</td>
			</tr>
		</table>        
		<?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>