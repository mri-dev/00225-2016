<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead"><h1><?=PMGMTTITLE?>&nbsp;<?=$help_icon?></h1></td>
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
					<!-- start total records row -->
					<form method="post" name="uipp" class="zeroPadding" action="profilemgmt.php">
						 <table class="totalRecords width-100">
								<tr>
									 <td class="al"><?=TOTALRECS?>: <?=$total_records?> <a class="action-btn" href="profilemgmt.php?addnew=1"><?=ADDPROFILE?> <i class="fa fa-plus-circle"></i></a></td>
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
<!-- Contents /e -->
<?=$bottom?>
