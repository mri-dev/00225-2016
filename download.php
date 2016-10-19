<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead"><h1><?=OMANAGETITLE?>&nbsp;<?=$help_icon?></h1></td>
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
								<div class="ac"><a href="download.php" class="rtrntomgmt"><?=RETURNTODOWNLOAD?></a></div>
							<?php }else{ ?>
								<form action="download.php" method="post" name="theForm" class="awform">
									 <?=$boxtop?>
									 <fieldset>
											<legend><span class="boxlegend"><?=DLCAT?></span></legend>
											<div class="row">
												<div class="col-md-12 al">
													<label for="quicklink"><?=CATEGORY?></label>
													<select name="quicklink" id="quicklink" class="width-20" onchange="openURL()"><?=$catlist?></select>
												</div>
											</div>
									 </fieldset>
									 <?=$boxbottom?>
								</form>
								<!-- user menu /s -->
								<!-- start total records row -->
								<table class="totalRecords width-100">
									 <tr>
											<td class="al"><?=strip_tags($domaintlist,"<a></a>")?></td>
									 </tr>
								</table>
								<!-- end total records row -->
								<?=$boxtop?>
								<table class="width-100 data"><?=$domainlist?></table>
								<?=$boxbottom?>
							<?php } ?>
     	      </div>
     	    </div>
     	    <?php } ?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
