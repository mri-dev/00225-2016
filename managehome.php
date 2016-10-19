<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead"><h1><?=MANAGEHOMETITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
				<?php if (!$clientportal) { ?>
   	    <div class="account-page-holder">
   	      <div class="sidemenu vlt">
   	        <?=$umenu?>
   	      </div>
   	      <div class="account-contant-container">
						<?=$dmsg?>
						<div id="srenew" class="invisible"></div>
						<h3 class="underline bold"><?=DOMAINSINACCOUNT?>: <span class="green"><?=ucfirst($newuid)?></span></h3>
						<form method="post" action="managehome.php" class="awform margin-5" onsubmit="submitonce(this); showObject(false,true);">
							 <?=$boxtop?>
							 <fieldset>
									<legend><span class="boxlegend"><?=SEARCH?></span></legend>

									<div class="row">
										<div class="col-md-2">
											<label for="cat"><?=CATEGORY?></label>
											<select name="cat" id="cat" class="form-control">
 												<option value="sld" selected="selected">SLD</option>
 												<option value="tld">TLD</option>
 										 	</select>
										</div>
										<div class="col-md-8">
											<label for="list"><?=SEARCH?></label>
											<input type="text" name="list" class="form-control" />
										</div>
										<div class="col-md-2 inp-btn-wlabel">
											<input type="submit" name="submit" class="form-control" value="<?=GOBUTTON?>" />
										</div>
									</div>

									<div class="abcfilter">
										 <a class="<?=(isset($_GET['list']) && $_GET['list'] === '0')?'on':''?>" href="managehome.php?list=0&amp;so=<?=$so?>&amp;sd=<?=$sd?>">[0-9]</a>
										 <a class="<?=($_GET['list'] == 'a')?'on':''?>" href="managehome.php?list=a&amp;so=<?=$so?>&amp;sd=<?=$sd?>">A</a>
										 <a class="<?=($_GET['list'] == 'b')?'on':''?>" href="managehome.php?list=b&amp;so=<?=$so?>&amp;sd=<?=$sd?>">B</a>
										 <a class="<?=($_GET['list'] == 'c')?'on':''?>" href="managehome.php?list=c&amp;so=<?=$so?>&amp;sd=<?=$sd?>">C</a>
										 <a class="<?=($_GET['list'] == 'd')?'on':''?>" href="managehome.php?list=d&amp;so=<?=$so?>&amp;sd=<?=$sd?>">D</a>
										 <a class="<?=($_GET['list'] == 'e')?'on':''?>" href="managehome.php?list=e&amp;so=<?=$so?>&amp;sd=<?=$sd?>">E</a>
										 <a class="<?=($_GET['list'] == 'f')?'on':''?>" href="managehome.php?list=f&amp;so=<?=$so?>&amp;sd=<?=$sd?>">F</a>
										 <a class="<?=($_GET['list'] == 'g')?'on':''?>" href="managehome.php?list=g&amp;so=<?=$so?>&amp;sd=<?=$sd?>">G</a>
										 <a class="<?=($_GET['list'] == 'h')?'on':''?>" href="managehome.php?list=h&amp;so=<?=$so?>&amp;sd=<?=$sd?>">H</a>
										 <a class="<?=($_GET['list'] == 'i')?'on':''?>" href="managehome.php?list=i&amp;so=<?=$so?>&amp;sd=<?=$sd?>">I</a>
										 <a class="<?=($_GET['list'] == 'j')?'on':''?>" href="managehome.php?list=j&amp;so=<?=$so?>&amp;sd=<?=$sd?>">J</a>
										 <a class="<?=($_GET['list'] == 'k')?'on':''?>" href="managehome.php?list=k&amp;so=<?=$so?>&amp;sd=<?=$sd?>">K</a>
										 <a class="<?=($_GET['list'] == 'l')?'on':''?>" href="managehome.php?list=l&amp;so=<?=$so?>&amp;sd=<?=$sd?>">L</a>
										 <a class="<?=($_GET['list'] == 'm')?'on':''?>" href="managehome.php?list=m&amp;so=<?=$so?>&amp;sd=<?=$sd?>">M</a>
										 <a class="<?=($_GET['list'] == 'n')?'on':''?>" href="managehome.php?list=n&amp;so=<?=$so?>&amp;sd=<?=$sd?>">N</a>
										 <a class="<?=($_GET['list'] == 'o')?'on':''?>" href="managehome.php?list=o&amp;so=<?=$so?>&amp;sd=<?=$sd?>">O</a>
										 <a class="<?=($_GET['list'] == 'p')?'on':''?>" href="managehome.php?list=p&amp;so=<?=$so?>&amp;sd=<?=$sd?>">P</a>
										 <a class="<?=($_GET['list'] == 'q')?'on':''?>" href="managehome.php?list=q&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Q</a>
										 <a class="<?=($_GET['list'] == 'r')?'on':''?>" href="managehome.php?list=r&amp;so=<?=$so?>&amp;sd=<?=$sd?>">R</a>
										 <a class="<?=($_GET['list'] == 's')?'on':''?>" href="managehome.php?list=s&amp;so=<?=$so?>&amp;sd=<?=$sd?>">S</a>
										 <a class="<?=($_GET['list'] == 't')?'on':''?>" href="managehome.php?list=t&amp;so=<?=$so?>&amp;sd=<?=$sd?>">T</a>
										 <a class="<?=($_GET['list'] == 'u')?'on':''?>" href="managehome.php?list=u&amp;so=<?=$so?>&amp;sd=<?=$sd?>">U</a>
										 <a class="<?=($_GET['list'] == 'v')?'on':''?>" href="managehome.php?list=v&amp;so=<?=$so?>&amp;sd=<?=$sd?>">V</a>
										 <a class="<?=($_GET['list'] == 'w')?'on':''?>" href="managehome.php?list=w&amp;so=<?=$so?>&amp;sd=<?=$sd?>">W</a>
										 <a class="<?=($_GET['list'] == 'x')?'on':''?>" href="managehome.php?list=x&amp;so=<?=$so?>&amp;sd=<?=$sd?>">X</a>
										 <a class="<?=($_GET['list'] == 'y')?'on':''?>" href="managehome.php?list=y&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Y</a>
										 <a class="<?=($_GET['list'] == 'z')?'on':''?>" href="managehome.php?list=z&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Z</a>
										 <a class="<?=($_GET['list'] == 'all' || $_GET['list']=='')?'on':''?>" href="managehome.php?list=all&amp;so=<?=$so?>&amp;sd=<?=$sd?>">[<?=SHOWALL?>]</a>
									</div>
							 </fieldset>
							 <?=$boxbottom?>
						</form>
						<?php if(!$noautorenew){ ?>
						<div class="ar"><?=$ar_icon?>&nbsp;<?=GLOBALARTOGGLE?>: [<a href="<?=$base?>/manage.php?autorenew=allon"><span class="green"><?=GARON?></span></a>]&nbsp;[<a href="<?=$base?>/manage.php?autorenew=alloff"><span class="red"><?=GAROFF?></span></a>]</div>
						<br />
						<?php }	?>
						<!-- start total records row -->
						<form method="post" name="uipp" class="zeroPadding" action="manage.php">
							 <table class="totalRecords width-100">
									<tr>
										 <td class="al"><?=TOTALRECORDS?>: <?=$total_records?></td>
										 <td class="ar"><select name="setipp" onchange="document.uipp.submit()"><?=$uipp?></td>
									</tr>
							 </table>
						</form>
						<div style="height:10px; clear:both;"></div>
						<!-- end total records row -->
						<?=$boxtop?>
						<table class="width-100 data">
							 <tr>
									<td nowrap="nowrap" class="boxtitle"><?=$domainlist?>
						</table>
						<?=$boxbottom?>
						<?=$domainblist?>
						<div class="labels-title"><?=ICONLEGEND?></div>
						<table class="width-100 labels">
							 <tr>
									<td class="width-10" nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/m.gif" alt="m" /></td>
									<td nowrap="nowrap">= <?=MANAGE?></td>
									<td class="width-10" nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/r.gif" alt="r" /></td>
									<td nowrap="nowrap">= <?=RENEW?></td>
									<td class="width-10" nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/s.gif" alt="s" /></td>
									<td nowrap="nowrap">= <?=SELLDOMAIN?></td>
							 </tr>
							 <tr>
									<td class="width-10" nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/fs.gif" alt="fs" /></td>
									<td nowrap="nowrap">= <?=FORSALEM?></td>
									<td class="width-10" nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/h.gif" alt="h" /></td>
									<td nowrap="nowrap">= <?=HASHOSTING?></td>
									<td class="width-10" nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/ar.gif" alt="ar" /></td>
									<td nowrap="nowrap">= <?=AUTORENEW?></td>
							 </tr>
						</table>
   	      </div>
   	    </div>
   	    <?php } ?>

				<script type="text/javascript">
				   function AddThisToCart(domainName) {
				   	var el = document.id('srenew');
				   	el.removeClass('invisible'); el.addClass('success');
				   	el.innerHTML += decodeHTML("<?=PRECRENEW?>&nbsp;&lt;strong&gt;" + domainName + "&lt;/strong&gt;&nbsp;<?=POSTCRENEW?>&lt;br /&gt;");
				   	document.getElementById(domainName).src = decodeHTML("cart.php?check1="+ domainName +"&amp;rtype=renew&amp;silent=1");
				   }
				</script>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
