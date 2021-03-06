<?php
   // Detect that we can call this script at all
   if ($domainstateid != "3" || empty($declid)) {
   	header('Location: DomainMain.php');
   	exit;
   }
   ?>
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
               <?php if($declstatus != "ok") {?>
               <div class="domain-managed-item">
                  <div class="row">
                     <div class="col-md-12 vlm">
                        <div class="domain-name mobile-align-left">
                           <?=DOMAIN?>: <strong><?=$cSld?>.<?=$cTld?></strong> <a href="DomainMain.php?cSld=<?=$cSld?>&cTld=<?=$cTld?>" class="TipStyle action-btn" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?><i class="fa fa-gear"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <!---->
               <form method="post" action="DomainDecl.php" name="sdform" id="sdform" class="awform" onsubmit="submitonce(this);showObject(false,true);">
                  <input type="hidden" name="action" value="senddeclaration" />
                  <input type="hidden" name="declid" value="<?=$declid?>" />
                  <fieldset>
                     <legend><?=DOMDECLARATION?></legend>
										 <div class="row">
										 	<div class="col-md-12">
										 		<div class="ac">
										 			<textarea name="decltext" rows="10" class="form-control" readonly="readonly"><?=$decltext?></textarea>
										 		</div>
										 	</div>
										 </div>
										 <br>
										 <div class="row">
										 	<div class="col-md-12">
										 		<div class="ac">
										 			<img class="mac" src="data:image/png;base64,<?=$declcaptcha?>" /><br><br>
													<input type="text" class="width-50 mac" name="declcaptcha" /><br><br>
													<input type="submit" name="Submit" value="<?=DMSAVE?>" />
										 		</div>
										 	</div>
										 </div>
                  </fieldset>
               </form>
               <!---->
               <? } ?>
            </div>
         </div>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
