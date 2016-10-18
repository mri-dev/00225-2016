<?=$header?>
<?=$top?>
<script language="javascript" type="text/javascript">
   window.addEvent('domready', function(){
   	check = new FormCheck('form1', {
   		display : {
   			fadeDuration 	: 500,
   			errorsLocation 	: 3,
   			indicateErrors 	: 2,
   			flashTips 		: true,
   			showErrors 		: 1
   		}
   	})
   });
</script>
<!-- Contents /s -->
<div id="editprofilepass">
   <table id="mainData" class="account-page">
      <tr>
         <td id="tablehead"><h1><?=EDITPASSWORDTITLE?>&nbsp;<?=$help_icon?></h1></td>
      </tr>
      <tr>
         <td id="mainTD">
					 <?php if (!$clientportal) { ?>
	     	    <div class="account-page-holder">
	     	      <div class="sidemenu vlt">
	     	        <?=$umenu?>
	     	      </div>
	     	      <div class="account-contant-container">
								<form method="post" action="editprofile.php" id="form1" name="form1" class="awform">
									 <input type="hidden" name="action" value="modify" />
									 <input type="hidden" name="newpass3" value="<?php echo $newpass3; ?>" />
									 <input type="hidden" name="oldemail" value="<?php echo $email; ?>" />
									 <input type="hidden" name="editpass" value="1" />
									 <div class="reqfieldsnote"><?=REQFIELDSNOTE?><br /><?=$genMsg?></div>
									 <?=$cErrorMsg?>
									 <?=$boxtop?>
									 <fieldset>
											<legend><span class="boxlegend"><?=EDITPASSBOXTITLE?></span></legend>
											<table class="width-100 formtable">
												 <tr>
														<td class="ar vlt width-25"><em class="red">*</em><?=OLDPASS?>:&nbsp;</td>
														<td class="al vlt width-75">
															 <input id="oldpass1" type="password" name="oldpass1"  maxlength="150" value="<?=$oldpass1?>" class="validate['required'] width-75" />
														</td>
												 </tr>
												 <tr>
														<td class="ar vlt width-25"><em class="red">*</em><?=NEWPASS?>:&nbsp;</td>
														<td class="al vlt width-75">
															 <input id="password" type="password" name="newpass1"  maxlength="150" value="<?=$newpass1?>" class="validate['required','length[<?=$minpass?>,<?=$maxpass?>]'] width-75" />
															 <p>(<?=CREATEMIN?> <?=$minpass?> <?=CREATEMAX?> <?=$maxpass?> <?=CREATEPASSSPECS?>)</p>
														</td>
												 </tr>
												 <tr>
														<td class="ar vlt width-25"><em class="red">*</em><?=PASSVERIFY?>:&nbsp;</td>
														<td class="al vlt width-75">
															 <input type="password" name="newpass2" maxlength="150" value="<?=$newpass2?>" class="validate['required','confirm[password]'] width-75" />
															 <p>(<?=CREATEMIN?> <?=$minpass?> <?=CREATEMAX?> <?=$maxpass?> <?=CREATEPASSSPECS?>)</p>
														</td>
												 </tr>
												 <tr>
														<td class="ac" colspan="2"><input type="submit" name="Submit" value="<?php if ($regstatus == "UnReg"){ echo "".RESUBMIT.""; } else {  echo "".SUBMIT.""; } ?>" /></td>
												 </tr>
											</table>
									 </fieldset>
									 <?=$boxbottom?>
								</form>
	     	      </div>
	     	    </div>
	     	    <?php } ?>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
