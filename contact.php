<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="contact">
   <table id="mainData">
      <tr>
         <td id="tablehead"><h1><?=CONTACTTITLE?>&nbsp;<?=$help_icon?></h1></td>
      </tr>
      <tr>
         <td id="mainTD">
            <div id="error"><?=$error?></div>
            <div id="log_res"></div>
            <div id="theForm" class="contact_form">
               <form id="contactForm" action="contact.php" method="post" class="awform" >
                  <input type="hidden" name="takeAnAction" value="submit" />
                  <?=$boxtop?>
                  <fieldset>
                     <legend><span class="boxlegend"><?=CONTACTBOXTITLE?></span></legend>
                     <table class="width-100 contactform">
                        <tr>
                           <td class="width-25 ar bold vlt"><em class="red">*</em>&nbsp;<?=NAME?>&nbsp;:</td>
                           <td class="width-75 al vlt"><input type="text" name="Name" value="<?=$Name?>" class="validate['required','alpha'] width-75" /></td>
                        </tr>
                        <tr>
                           <td class="width-25 ar bold vlt"><em class="red">*</em>&nbsp;<?=EMAILADDRESS?>&nbsp;:</td>
                           <td class="width-75 al vlt"><input type="text" name="EmailAddress" value="<?=$EmailAddress?>" class="validate['required','email'] width-75" /></td>
                        </tr>
                        <tr>
                           <td class="width-25 ar bold vlt"><?=ACCTUSERNAME?>&nbsp;:</td>
                           <td class="width-75 al vlt"><input type="text" name="AccountUsername" value="<?=$AccountUsername?>" class="width-75" /></td>
                        </tr>
                        <tr>
                           <td class="width-25 ar bold vlt"><em class="red">*</em>&nbsp;<?=MESSAGE?>&nbsp;:</td>
                           <td class="width-75 al vlt"><textarea name="Message" rows="5" cols="50" class="validate['required'] width-75"><?=$Message?></textarea></td>
                        </tr>
                     </table>
                  </fieldset>
                  <?=$boxbottom?>
                  <?php if(($needv==1 or $recaptcha=="1") and $action!="thankyou"){ ?>
                  <?=$boxtop?>
                  <fieldset>
                     <legend><span class="boxlegend"><?=CFVBOXTITLE?></span></legend>
                     <table class="width-100">
                        <tr>
                           <td class="ac">
                              <?php if ($recaptcha=="1"){
                                 require_once(WORKDIR.'/includes/recaptcha/recaptchalib.php');
                                 $publickey = sqlsingle("select * from module_types where name='recaptcha'","config1");
                                 echo "<center><script type=\"text/javascript\" src=\"http://www.google.com/recaptcha/api/challenge?k=$publickey\"></script></center>";
                                 }else{
                                 ?>
                              <img src="<?=$securebase?>/capt.php?size=6&<?=microtime()?>" id="cap" alt="captcha" />
                              <br />
                              [<a href="javascript:;" onclick="document.getElementById('cap').src = '<?=$securebase?>/capt.php?size=6&' + (new Date()).getTime();" class="linkbutton"><?=NEWCODE ?></a>]<br /><?=CFCODE?>
                              <br />
                              <p class="red bold"><?=CFCODE2?></p>
                              <input type="text" name="vcode" class="width-15 ac bold blue" />
                              <input type="hidden" name="validatenow" value="1" />
                              <input type="hidden" name="sldtld" value="<?=$sldtld?>" />
                              <?php } ?>
                           </td>
                        </tr>
                     </table>
                  </fieldset>
                  <?=$boxbottom?>
                  <p class="bold green ac"><?=$wresults?></p>
                  <?php } ?>
                  <input type="hidden" value="<?=$fkey?>" name="fkey" />
                  <input type="hidden" value="<?=$formcode?>" name="formcode" />
                  <?php if($actionx != "thankyou"){ ?>
                  <center><input type="submit" value="<?=SUBMIT?>" class="width-10" /></center>
                  <?php } ?>
               </form>
							 <br><br>
               <div class="p-15 bold"><?=CONTACTBLURB?></div>
            </div>
            <?php if(file_exists("templates/$templatedir/includes/contact_include.php")){ include("templates/$templatedir/includes/contact_include.php"); } ?>
         </td>
      </tr>
   </table>
</div>
<script type="text/javascript">
   window.addEvent('domready', function(){
   	new FormCheck('contactForm', {
   		display : {
   			fadeDuration : 500,
   			errorsLocation : 3,
   			indicateErrors : 2,
   			flashTips : true,
   			showErrors : 1,
   			scrollToFirst : 0,
   			keepFocusOnError : 0
   			}
   		})
   });
</script>
<!-- Contents /e -->
<?=$bottom?>
