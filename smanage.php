<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead"><h1><?=SMTITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=$dmsg?>
				 <?php if (!$clientportal) { ?>
     	    <div class="account-page-holder">
     	      <div class="sidemenu vlt">
     	        <?=$umenu?>
     	      </div>
     	      <div class="account-contant-container">
							<?php if ($edit != ""){ ?>
							<?=$form1?>
							<div class="ac"><a href="smanage.php" class="rtrntomgmt" style="width:230px;"><?=SRETURNLINK?></a></div>
							<?php }else{ ?>
							<form method="post" action="smanage.php" class="awform" onsubmit="submitonce(this); showObject(false,true);">
								 <?=$boxtop?>
								 <fieldset>
										<legend><span class="boxlegend"><?=SEARCH?></span></legend>

										<div class="row">
											<div class="col-md-2">
												<label for="cat"><?=CATEGORY?></label>
												<select name="cat" id="cat" class="form-control">
													<option value="domain" selected="selected"><?=DOMAIN?></option>
													<option value="ip"><?=SMIPADD?></option>
	 										 	</select>
											</div>
											<div class="col-md-8">
												<label for="list"><?=SEARCH?></label>
												<input type="text" name="list" class="form-control" />
											</div>
											<div class="col-md-2 inp-btn-wlabel">
												<input type="hidden" name="search" value="search" />
 											 	<input type="hidden" name="so" value="domain" />
												<input type="submit" name="submit" class="form-control" value="<?=GOBUTTON?>" />
											</div>
										</div>

										<div class="abcfilter">
											 <a class="<?=(isset($_GET['list']) && $_GET['list'] === '0')?'on':''?>" href="smanage.php?list=0&amp;so=<?=$so?>&amp;sd=<?=$sd?>">[0-9]</a>
											 <a class="<?=($_GET['list'] == 'a')?'on':''?>" href="smanage.php?list=a&amp;so=<?=$so?>&amp;sd=<?=$sd?>">A</a>
											 <a class="<?=($_GET['list'] == 'b')?'on':''?>" href="smanage.php?list=b&amp;so=<?=$so?>&amp;sd=<?=$sd?>">B</a>
											 <a class="<?=($_GET['list'] == 'c')?'on':''?>" href="smanage.php?list=c&amp;so=<?=$so?>&amp;sd=<?=$sd?>">C</a>
											 <a class="<?=($_GET['list'] == 'd')?'on':''?>" href="smanage.php?list=d&amp;so=<?=$so?>&amp;sd=<?=$sd?>">D</a>
											 <a class="<?=($_GET['list'] == 'e')?'on':''?>" href="smanage.php?list=e&amp;so=<?=$so?>&amp;sd=<?=$sd?>">E</a>
											 <a class="<?=($_GET['list'] == 'f')?'on':''?>" href="smanage.php?list=f&amp;so=<?=$so?>&amp;sd=<?=$sd?>">F</a>
											 <a class="<?=($_GET['list'] == 'g')?'on':''?>" href="smanage.php?list=g&amp;so=<?=$so?>&amp;sd=<?=$sd?>">G</a>
											 <a class="<?=($_GET['list'] == 'h')?'on':''?>" href="smanage.php?list=h&amp;so=<?=$so?>&amp;sd=<?=$sd?>">H</a>
											 <a class="<?=($_GET['list'] == 'i')?'on':''?>" href="smanage.php?list=i&amp;so=<?=$so?>&amp;sd=<?=$sd?>">I</a>
											 <a class="<?=($_GET['list'] == 'j')?'on':''?>" href="smanage.php?list=j&amp;so=<?=$so?>&amp;sd=<?=$sd?>">J</a>
											 <a class="<?=($_GET['list'] == 'k')?'on':''?>" href="smanage.php?list=k&amp;so=<?=$so?>&amp;sd=<?=$sd?>">K</a>
											 <a class="<?=($_GET['list'] == 'l')?'on':''?>" href="smanage.php?list=l&amp;so=<?=$so?>&amp;sd=<?=$sd?>">L</a>
											 <a class="<?=($_GET['list'] == 'm')?'on':''?>" href="smanage.php?list=m&amp;so=<?=$so?>&amp;sd=<?=$sd?>">M</a>
											 <a class="<?=($_GET['list'] == 'n')?'on':''?>" href="smanage.php?list=n&amp;so=<?=$so?>&amp;sd=<?=$sd?>">N</a>
											 <a class="<?=($_GET['list'] == 'o')?'on':''?>" href="smanage.php?list=o&amp;so=<?=$so?>&amp;sd=<?=$sd?>">O</a>
											 <a class="<?=($_GET['list'] == 'p')?'on':''?>" href="smanage.php?list=p&amp;so=<?=$so?>&amp;sd=<?=$sd?>">P</a>
											 <a class="<?=($_GET['list'] == 'q')?'on':''?>" href="smanage.php?list=q&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Q</a>
											 <a class="<?=($_GET['list'] == 'r')?'on':''?>" href="smanage.php?list=r&amp;so=<?=$so?>&amp;sd=<?=$sd?>">R</a>
											 <a class="<?=($_GET['list'] == 's')?'on':''?>" href="smanage.php?list=s&amp;so=<?=$so?>&amp;sd=<?=$sd?>">S</a>
											 <a class="<?=($_GET['list'] == 't')?'on':''?>" href="smanage.php?list=t&amp;so=<?=$so?>&amp;sd=<?=$sd?>">T</a>
											 <a class="<?=($_GET['list'] == 'u')?'on':''?>" href="smanage.php?list=u&amp;so=<?=$so?>&amp;sd=<?=$sd?>">U</a>
											 <a class="<?=($_GET['list'] == 'v')?'on':''?>" href="smanage.php?list=v&amp;so=<?=$so?>&amp;sd=<?=$sd?>">V</a>
											 <a class="<?=($_GET['list'] == 'w')?'on':''?>" href="smanage.php?list=w&amp;so=<?=$so?>&amp;sd=<?=$sd?>">W</a>
											 <a class="<?=($_GET['list'] == 'x')?'on':''?>" href="smanage.php?list=x&amp;so=<?=$so?>&amp;sd=<?=$sd?>">X</a>
											 <a class="<?=($_GET['list'] == 'y')?'on':''?>" href="smanage.php?list=y&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Y</a>
											 <a class="<?=($_GET['list'] == 'z')?'on':''?>" href="smanage.php?list=z&amp;so=<?=$so?>&amp;sd=<?=$sd?>">Z</a>
											 <a class="<?=($_GET['list'] == 'all' || $_GET['list']=='')?'on':''?>" href="smanage.php?list=all&amp;so=<?=$so?>&amp;sd=<?=$sd?>">[<?=SHOWALL?>]</a>
										</div>
								 </fieldset>
								 <?=$boxbottom?>
							</form>
							<!-- start total records row -->
							<form method="post" name="uipp" class="zeroPadding" action="smanage.php">
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
							<table class="width-100 data">
								 <tr>
										<td nowrap="nowrap" class="boxtitle"><?=$domainlist?>
							</table>
							<?=$boxbottom?>
							<?=$domainblist?>
							<div class="labels-title"><?=ICONLEGEND?></div>
							<table class="width-100 labels">
								 <tr>
										<td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/mag_glass.gif" alt="<?=VIEWRECORD?>" /></td>
										<td nowrap="nowrap">= <?=VIEWRECORD?></td>
										<td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/dollar.gif" alt="<?=SMPAYINVOICE?>" /></td>
										<td nowrap="nowrap">= <?=SMPAYINVOICE?></td>
										<td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/u.gif" alt="<?=HUPGRADE?>" /></td>
										<td nowrap="nowrap">= <?=HUPGRADE?></td>
										<td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/a.gif" alt="<?=ORDERADDONS?>" /></td>
										<td nowrap="nowrap">= <?=ORDERADDONS?></td>
								 </tr>
							</table>
							<?php } ?>
     	      </div>
     	    </div>
     	    <?php } ?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
