<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page domain-manager-page">
   <tr>
      <td id="tablehead">
         <h1><?=DOMAINMAINTITLE?> <?=$help_icon?></h1>
      </td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=$dmsg?>
         <?=$cErrorMsg?>
				 <div class="account-page-holder">
     	      <div class="sidemenu vlt">
							<div id="uvmenu" class="simple-menu">
								<ul>
									<li class="head"><?=MANAGEDOMAINMENU?></li>
									<?php
                   if(is_file(WORKDIR."/templates/$templatedir/$registrar/menu.php")){
                   	include(WORKDIR."/templates/$templatedir/$registrar/menu.php");
                   }else{
                   	include(WORKDIR."/templates/common_files/$registrar/menu.php");
                   }
                  ?>
									</ul>
							</div>
     	      </div>
     	      <div class="account-contant-container">
							<div class="domain-managed-item">
								<div class="row">
									<div class="col-md-6 vlm">
										<div class="domain-name mobile-align-left">
										<?=DOMAIN?>: <strong><?=$cSld?>.<?=$cTld?></strong> <a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle action-btn" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?><i class="fa fa-gear"></i></a>
										</div>
									</div>
									<div class="col-md-6 vlm">
										<div class="expire-date mobile-align-left">
											<?=DOMEXPDATE?>: <strong><?=$ExpDate?></strong>
										</div>
									</div>
								</div>
							</div>

							<form method="post" action="DomainMain.php" name="theForm" id="theForm" class="awform" onsubmit="submitonce(this);showObject(false,true);">
								 <input type="hidden" name="action" value="setlocking" />
								 <input type="hidden" value="FullForm" name="FormType" />
								 <?=$boxtop?>
								 <fieldset>
										<legend><span class="boxlegend"><?=DOMLOCKING?></span></legend>
										<table class="width-100">
											 <tr>
													<td class="ac vlm bold">
														 <div align="center">
																<p class="width-30 ac"><?=$lockline?></p>
														 </div>
													</td>
											 </tr>
											 <tr>
													<td class="ac vlm bold">
														 <input type="submit" name="Submit" value="<?=DMSAVE?>" />
														 <br />
														 <small><?=DOMLOCKINGNOTE?></small>
													</td>
											 </tr>
										</table>
								 </fieldset>
								 <?=$boxbottom?>
							</form>
							<form method="post" action="DomainMain.php" name="arform" id="arform" class="awform" onsubmit="submitonce(this);showObject(false,true);">
								 <input type="hidden" name="action" value="setautorenew" />
								 <?=$boxtop?>
								 <fieldset>
										<legend><span class="boxlegend"><?=DOMAUTORENEW?></span></legend>
										<table class="width-100">
											 <tr>
													<td class="ac vlm bold">
														 <div align="center">
																<p class="width-30 ac"><?=$renewline?></p>
														 </div>
													</td>
											 </tr>
											 <tr>
													<td class="ac vlm bold">
														 <input type="submit" name="Submit" value="<?=DMSAVE?>" />
														 <br />
														 <small><?=DOMAUTORENEWNOTE?></small>
													</td>
											 </tr>
										</table>
								 </fieldset>
								 <?=$boxbottom?>
							</form>

							<hr>
							<div class="labels-title"><strong><?=GLOBALEGEND?></strong></div>
							<?php
								 if ($reglocked!=2){
								 echo('
									<p><strong>'.CONTACTINFOLINK.'</strong><br />'.CONTACTINFOLINKTEXT.'</p>
									<br />
									<p><strong>'.CHANGENAMESERVERSLINK.'</strong><br />'.CHANGENAMESERVERSLINKTEXT.'</p>
									<br />
									<p><strong>'.NAMESERVERSLINK.'</strong><br />'.NAMESERVERSLINKTEXT.'</p>
									<br />
								 ');
								 if($f1_state == 1){
									echo('
									<p><strong>'.EMAILFORLINK.'</strong><br />'.EMAILFLINKTEXT.'</p>
									<br />
									');
								 }
								 if($f2_state == 1){
									echo('
									<p><strong>URL Forwarding</strong><br />'.URLFLINKTEXT.'</p>
									<br />
									');
								 }
								 }
								 ?>

     	      </div>
     	    </div>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
