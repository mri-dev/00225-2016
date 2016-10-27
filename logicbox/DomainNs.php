<?=$header?>
<?=$top?>
<script type="text/javascript" language="javascript" src="<?=$base?>/templates/common_files/<?=$registrar?>/DomainNs.js"></script>
<!-- Contents /s -->
<table id="mainData" class="account-page domain-manager-page">
   <tr>
      <td id="tablehead">
         <h1><?=DOMAINNSTITLE?> <?=$help_icon?></h1>
      </td>
   </tr>
   <tr>
      <td id="mainTD">
       <?=$dmsg?>
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
							<div class="col-md-12 vlm">
								<div class="domain-name mobile-align-left">
								<?=DOMAIN?>: <strong><?=$cSld?>.<?=$cTld?></strong> <a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle action-btn" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?><i class="fa fa-gear"></i></a>
								</div>
							</div>
						</div>
					</div>

					<?php if ($lookuperror!=1) { ?>
					<script type="text/javascript">window.addEvent('domready', function() { fnSelectNS(); });</script>
					<form method="post" action="DomainNs.php" id="form1" name="form1" onsubmit="submitonce(this);showObject(false,true);" class="awform">
						 <input type="hidden" name="action" value="modify" />
						 <input type="hidden" name="OldUseNameserver" value="<?=$OldUseNameserver?>" />
						 <fieldset>
								<legend><?=DOMAINNSBOXTITLE?></legend>

								<div class="row">
									<div class="col-md-12">
										<div class="ac">
											<label for="idUseNameserver"><em class="red">*</em> <?=DOMAINNSUSE?>:</label><br>
											<select name="UseNameserver" id="idUseNameserver" onchange="fnSelectNS();" class="width-50">
												 <?php
														if ($usingdns == "default") {
																$OldUseNameserver = "default";
														} else {
																$OldUseNameserver = "custom";
														}
														?>
												 <option <?php if ( $OldUseNameserver == "default" ) { echo 'selected="selected"'; }?> value="default"><?=DEFAULTNAMESERVERS?></option>
												 <option <?php if ( $OldUseNameserver == "custom" ) { echo 'selected="selected"'; }?> value="custom"><?=CUSTOMNAMESERVERS?></option>
											</select>
										</div>
									</div>
								</div>
								<hr>

								<?php if ( $OldUseNameserver == "custom" ) { $nDNSCount = 4; ?>
								 <div class="row">
								 	<div class="col-md-12">
								 		<div class="ac">
								 			<?=CUSTOMNAMESERVERS?>:<br /><small><?=CUSTOMNAMESERVERSNOTE?></small>
								 		</div>
								 	</div>
								 </div>
								 <br>
								 <?php
										for ( $i = 1; $i <= $nDNSCount; $i++ ) {
										 switch($i){
											 case 1:
											 $currnameserver=$nameserver1;
											 break;
											 case 2:
											 $currnameserver=$nameserver2;
											 break;
											 case 3:
											 $currnameserver=$nameserver3;
											 break;
											 case 4:
											 $currnameserver=$nameserver4;
											 break;
										 }
										 echo "
										 	<br />
											 <div class=\"row\">
												 <div class=\"col-md-12\">
													<div class=\"input-group width-75 mac\">
														<span class=\"input-group-addon\">#".$i."</span>
														<input disabled=\"disabled\" type=\"text\" id=\"iddns$i\" name=\"dns[]\" value=\"\" class=\"form-control\" />
														<input type=\"hidden\" name=\"oldns[]\" value=\"$currnameserver\" />
													</div>
												</div>
											</div>";
										}
										?>
								<?php } else { ?>
								<div class="row">
 								 	<div class="col-md-12">
 								 		<div class="ac">
 								 			<?=CUSTOMNAMESERVERS?>:<br /><small><?=CUSTOMNAMESERVERSNOTE?></small>
 								 		</div>
 								 	</div>
 								 </div>
								 <br>
								 <?php
										echo "<input type=\"hidden\" name=\"DNSCount\" value=\"4\"><input type=\"hidden\" name=\"action\" value=\"modify\" />";
										for ( $i = 1; $i <= 4; $i++ ) {
										 switch($i){
											 case 1:
											 $currnameserver=$nameserver1;
											 break;
											 case 2:
											 $currnameserver=$nameserver2;
											 break;
											 case 3:
											 $currnameserver=$nameserver3;
											 break;
											 case 4:
											 $currnameserver=$nameserver4;
											 break;
										 }
										 echo "
										 	<br />
											 <div class=\"row\">
												 <div class=\"col-md-12\">
													<div class=\"input-group width-75 mac\">
														<span class=\"input-group-addon\">#".$i."</span>
														<input disabled=\"disabled\" type=\"text\" id=\"iddns$i\" name=\"dns[]\" value=\"\" class=\"form-control\" />
														<input type=\"hidden\" name=\"oldns[]\" value=\"$currnameserver\" />
													</div>
												</div>
											</div>";
										} ?>
								 <?php } ?>
								 <br>
								 <div class="row">
								 	<div class="col-md-12">
								 		<div class="ac">
								 			<input type="submit" name="Submit" value="<?=SUBMIT?>" />
											<br><br>
											<a href="<?=$base?>/DomainMain.php?dns=<?=$dns?>"><?=RETURNTOMANAGE?></a>
								 		</div>
								 	</div>
								 </div>
						 </fieldset>
					</form>
					<?=NSINSTRUCTIONS3?>
					<?php } else { ?>
						<br><br>
						<a href="<?=$base?>/DomainMain.php"><?=RETURNTOMANAGE?></a>
					<?php } ?>
				</div>
			</div>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
