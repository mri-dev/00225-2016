<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="history">
   <table id="mainData" class="account-page">
      <tr>
         <td id="tablehead"><?=HISTORYTITLE?>&nbsp;<?=$help_icon?></td>
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
                  <form method="post" action="history.php" class="awform" onsubmit="submitonce(this); showObject(false,true);">
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=SEARCH?></span></legend>
												<div class="row">
													<div class="col-md-12 ar">
														<input type="text" name="list"/>
														<input type="hidden" name="search" value="search" />
														<input type="hidden" name="so" value="id ASC" />
														<input type="hidden" name="cat" value="description" />
														<input type="submit" name="submit" value="<?=SEARCH?>" />
													</div>
												</div>
                     </fieldset>
                     <?=$boxbottom?>
                  </form>
                  <!-- user menu /s -->
                  <!-- start total records row -->
                  <form method="post" name="uipp" class="zeroPadding" action="history.php">
                     <table class="totalRecords width-100">
                        <tr>
                           <td class="al"><?=TOTALRECORDS?>: <?=$total_records?>&nbsp;<a class="action-btn" href="history.php"><?=SHOWALL?> <i class="fa fa-eye"></i></a></td>
                           <td class="ar"><select name="setipp" class="formlogin" onchange="document.uipp.submit()"><?=$uipp?></td>
                        </tr>
                     </table>
                  </form>
                  <div style="height:10px; clear:both;"></div>
                  <!-- end total records row -->
                  <?=$boxtop?>
                  <table class="width-100 data">
                     <tr>
                        <td class="boxtitle"><?=$domainlist?>
                  </table>
                  <?=$boxbottom?>
                  <?=$domainblist?>
               </div>
            </div>
            <?php } ?>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
