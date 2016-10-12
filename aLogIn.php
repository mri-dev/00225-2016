<?=$header?>
<?=$top?>
<script type="text/javascript">
   function loginWarn (form) { if (form.rememberme.checked) { alert("<?=PRIVATEPC?>"); } }
   window.addEvent('domready', function(){
   	document.id('loginForm').addEvent('submit', function(e) {
   		var form = document.id('loginForm');
   		document.id('loginForm').submit(); submitonce(form);
   	});
   });
</script>
<!-- Contents /s -->
<div id="login">
   <table id="mainData">
      <tr>
         <td id="tablehead">
					 <div class="row">
					 	<div class="col-md-7 vlm">
					 		<h1><?=LOGINNOW?>&nbsp;<?=$help_icon?></h1>
					 	</div>
						<div class="col-md-5 vlm ac">
					 		<div class="register-title"><?=NEWTOCOMPANY?>&nbsp;<?=$help_icon?></div>
					 	</div>
					 </div>
         </td>
      </tr>
      <?php if ($cErrorMsg) { echo '<tr><td colspan="2" style="height:auto;">'.$cErrorMsg.'</td></tr>'; } ?>
      <tr>
         <td class="mainTD width-100">
					 <div class="row">
						 	<div class="col-md-7 vlt">
								<div class="login_credentials">
		               <form method="post" action="<?=$securebase?>/aLogIn.php" id="loginForm" name="form2">
		                  <table class="width-100">
		                     <tr>
		                        <td class="bold" colspan="2"><label for="newuid"><?=USERNAME?></label>:<br /><input type="text" maxlength="272" name="newuid" id="newuid" value="<?=$newuid?>" class="width-100" /></td>
		                     </tr>
		                     <tr>
		                        <td class="bold" colspan="2"><label for="password1"><?=PASSWORD?></label>:<br /><input type="password" maxlength="60" name="password1" id="password1" class="width-100" /></td>
		                     </tr>
		                     <?php if ($usecookies==1){ ?>
		                     <tr>
		                        <td class="al small" colspan="2">
		                           <p><input type="checkbox" name="rememberme" value="1" onclick="loginWarn(this.form);" /><?=REMEMBERME?></p>
		                        </td>
		                     </tr>
		                     <?php } ?>
		                     <tr>
		                        <td>
		                           <div class="enter">
		                              <div class="enter_inner"><input type="submit" class="btn btn-red" name="Submit" value="<?=DOLOGIN?>" /></div>
		                           </div>
		                        </td>
		                        <td class="small ar vlm"><a href="LostPassword.php" class="red"><?=LOSTPASSWORDCSS?></a></td>
		                     </tr>
		                  </table>
		                  <input type="hidden" name="action" value="login" /><input type="hidden" name="rtype" value="<?=$rtype?>" /><input type="hidden" name="subaction" value="<?=$subaction?>" /><input type="hidden" name="cSld" value="<?=$cSld?>" /><input type="hidden" name="cTld" value="<?=$cTld?>" /><input type="hidden" name="id" value="<?=$id?>" /><?=$hiddeninc?>
		               </form>
		               <div class="small"><?=BYLOGGININ?> <a href="terms.php" rel="external"><?=UMTERMS?></a>.</div>
		            </div>
						 	</div>
							<div class="col-md-5 vlt">
								<div class="login-register-info">
		               <?=WHYREGISTER?>
		               <form method="post" action="createacct.php" onsubmit="submitonce(this);">
		                  <input type="hidden" name="rtype" value="<?=$rtype?>" /><input type="hidden" name="cid" value="<?=$PHPSESSID?>" /><input type="hidden" name="cSld" value="<?=$cSld?>" /><input type="hidden" name="subaction" value="<?=$subaction?>" /><input type="hidden" name="cTld" value="<?=$cTld?>" /><input type="hidden" name="id" value="<?=$id?>" />
		                  <?=$hiddeninc?>
		                	<div class="newaccount"><input type="submit" class="btn btn-blue btn-sm" name="Submit" value="<?=CREATEACCT?>" /></div>
		               </form>
		            </div>
						 	</div>
					 </div>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
