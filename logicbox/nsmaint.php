<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page domain-manager-page">
   <tr>
      <td id="tablehead">
         <h1><?=NSMAINTTITLE?> <?=$help_icon?></h1>
         <small><?=NSMAINTBLURB?></small>
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
                  <legend><?=NSMAINTNEWNAMESERVER?></legend>
                  <form method="post" action="nsmaint.php" onsubmit="submitonce(this); showObject(true,false);">
                     <input type="hidden" name="action" value="modify" />
                     <input type="hidden" name="subaction" value="addns" />
                     <div class="row">
                        <div class="col-md-6">
                           <small><?=NSMAINTNEWNAMESERVERINFO?></small>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTNAMESERVER?></span>
                                    <input type="text" name="nsname" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTIPADD?></span>
                                    <input type="text" name="nsip" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12 ar">
                                 <input type="submit" name="submit" value="<?=NSMAINTSUBMIT?> " />
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </fieldset>
               <fieldset>
                  <legend><?=NSMAINTEDIT?></legend>
                  <form method="post" action="nsmaint.php" onsubmit="submitonce(this); showObject(true,false);">
                     <input type="hidden" name="action" value="modify" />
                     <input type="hidden" name="subaction" value="updatens" />
                     <div class="row">
                        <div class="col-md-6">
                           <small><?=NSMAINTEDITINFO?></small>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTNAMESERVER?></span>
                                    <input type="text" name="nsname" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTOLDIP?></span>
                                    <input type="text" name="oldip" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTNEWIP?></span>
                                    <input type="text" name="newip" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12 ar">
                                 <input type="submit" name="submit" value="<?=NSMAINTSUBMIT?> " />
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </fieldset>
               <fieldset>
                  <legend><?=NSMAINTDELETE?></legend>
                  <form method="post" action="nsmaint.php" onsubmit="submitonce(this); showObject(true,false);">
                     <input type="hidden" name="action" value="modify" />
                     <input type="hidden" name="subaction" value="deletens" />
                     <div class="row">
                        <div class="col-md-6">
                           <small><?=NSMAINTDELETEINFO?></small>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTNAMESERVER?></span>
                                    <input type="text" name="nsname" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <span class="input-group-addon"><?=NSMAINTIPADD?></span>
                                    <input type="text" name="nsip" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-12 ar">
                                 <input type="submit" name="submit" value="<?=NSMAINTSUBMIT?> " />
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </fieldset>
               <br>
               <a href="<?=$base?>/DomainMain.php?dns=<?=$dns?>" class="rtrntomgmt"><?=RETURNTOMANAGE?></a>
            </div>
         </div>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
