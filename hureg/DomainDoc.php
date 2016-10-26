<?php
   if ($domainstateid != "3" && $domainstateid != "34" && $domainstateid != "9" && $domainstateid != "25") {
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
               <div class="domain-managed-item">
                  <div class="row">
                     <div class="col-md-12 vlm">
                        <div class="domain-name mobile-align-left">
                           <?=DOMAIN?>: <strong><?=$cSld?>.<?=$cTld?></strong> <a href="DomainMain.php?cSld=<?=$cSld?>&cTld=<?=$cTld?>" class="TipStyle action-btn" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?><i class="fa fa-gear"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <fieldset>
                 <legend><?=UPLOADDOCSLINK?></legend>
                 <div class="row">
                    <div class="col-md-12">
                       <div class="ac">
                         <br>
                          <!---->
                          <form method="post" action="DomainDoc.php" name="sdform" id="sdform" enctype="multipart/form-data" class="awform" onsubmit="submitonce(this);showObject(false,true);">
                             <input type="hidden" name="action" value="uploaddocs" />
                             <input type="file" name="file" class="mac" /><br>
                             <input type="submit" name="Submit" value="<?=DMSAVE?>" />
                          </form>
                          <!---->
                       </div>
                    </div>
                 </div>
               </fieldset>
            </div>
         </div>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
