<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead">
         <h1><?=OMANAGETITLE?>&nbsp;<?=$help_icon?></h1>
      </td>
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
               <?php }else{ ?>
               <form method="post" action="omanage.php" class="awform margin-5" onsubmit="submitonce(this); showObject(false,true);">
                  <?=$boxtop?>
                  <fieldset>
                     <legend><span class="boxlegend"><?=SEARCH?></span></legend>
										 <div class="row">
 											<div class="col-md-2">
 												<label for="cat"><?=CATEGORY?></label>
 												<select name="cat" id="cat" class="form-control">
 	 												<option value="description">Description</option>
 	 										 	</select>
 											</div>
 											<div class="col-md-8">
 												<label for="list"><?=SEARCH?></label>
 												<input type="text" name="list" class="form-control" />
 											</div>
 											<div class="col-md-2 inp-btn-wlabel">
												<input type="hidden" name="search" value="search" />
												<input type="hidden" name="so" value="id ASC" />
												<input type="hidden" name="sd" value="ASC" />
 												<input type="submit" name="submit" class="form-control" value="<?=GOBUTTON?>" />
 											</div>
 										</div>
                  </fieldset>
                  <?=$boxbottom?>
               </form>
               <!-- start total records row -->
               <form method="post" name="uipp" class="zeroPadding" action="omanage.php">
                  <table class="totalRecords width-100">
                     <tr>
                        <td class="al"><?=TOTALRECORDS?>: <?=$total_domains?> <a class="action-btn" href="omanage.php"><?=SHOWALL?></a>&nbsp;<?=DOWNLOADAREA?></td>
                        <td class="ar"><select name="setipp" class="formlogin" onchange="document.uipp.submit()"><?=$uipp?></td>
                     </tr>
                  </table>
               </form>
               <!-- end total records row -->
               <?=$boxtop?>
               <table class="width-100 data">
                  <tr>
                     <td class="boxtitle"><?=$domainlist?>
               </table>
               <?=$boxbottom?>
               <?=$domainblist?>
               <!-- user menu /e -->
               <div class="labels-title"><?=ICONLEGEND?></div>
               <table class="width-100 labels">
                  <tr>
                     <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/mag_glass.gif" alt="<?=VIEWRECORD?>" /></td>
                     <td nowrap="nowrap">= <?=VIEWRECORD?></td>
                     <td nowrap="nowrap"><img src="templates/<?=$templatedir?>/images/a.gif" alt="<?=ORDERADDONS?>" /></td>
                     <td nowrap="nowrap">= <?=ORDERADDONS?></td>
                  </tr>
               </table>
               <?php }?>
            </div>
         </div>
         <?php } ?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
