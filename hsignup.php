<?=$header?>
<?=$top?>
<?php if($domain_not_required != 1){ $thisDisabledBox = ''; } else { $thisDisabledBox = 'disabled="disabled" '; } ?>

<!-- Contents /s -->
<table id="mainData">
   <tr>
      <td id="tablehead"><h1><?=HSIGNUPTITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=$dmsg?>
         <?=$boxtop?>
				 <h2 class="hsignup"><?=HSIGNUPBOXTITLE?> / <?=CONFIGDOMAIN?></h2>

         <form method="post" action="hsignup.php" name="form1" onsubmit="submitonce(this); showObject(false,true);">
            <input type="hidden" name="hwplan" value="<?=$plan?>" />
            <input type="hidden" name="pt" value="<?=$pt?>" />
            <?php define(HSN,"1"); include(WORKDIR."/templates/common_files/cftable.php"); ?>
            <!-- togglers -->
            <?php if($domain_not_required != "1"){ ?>
            <div class="hsignupWrapper">
               <div class="hsignup">
                  <div class="togglerHolder">
                     <?php if($cart_list!=""){ ?>
                     <div class="toggler"><input type="radio" id="cart_list" name="type" value="cart" <?=$thisDisabledBox?>/><?=DOMAINFROMCART?></div>
                     <?php } ?>
                     <?php if($dom_list!=""){ ?>
                     <div class="toggler"><input type="radio" id="dom_list" name="type" value="domainlist" <?=$thisDisabledBox?>/><?=DOMAINFROMLIST?></div>
                     <?php } ?>
                     <div class="toggler"><input type="radio" id="register" name="type" value="register" <?=$thisDisabledBox?>/><?=REGISTERNEW?> <?=$companyname?></div>
                     <div class="toggler"><input type="radio" id="transfer" name="type" value="transfer" <?=$thisDisabledBox?>/><?=TRANSFERMYDOMAIN?></div>
                     <?php if($enom_plan!=1){ ?>
                     <div class="toggler"><input type="radio" id="enom_plan" name="type" value="nsonly" <?=$thisDisabledBox?>/><?=LEAVEATCURRENTREGISTRAR?></div>
                     <?php }else{ ?>
                     <div class="toggler"><input type="radio" id="nsonly" name="type" value="nsonly" <?=$thisDisabledBox?>/><?=LEAVEATCURRENTREGISTRAR?></div>
                     <?php } ?>
                     <?php if($subdom_hosting==1){ ?>
                     <div class="toggler"><input type="radio" id="subdom_hosting" name="type" value="snsonly" <?=$thisDisabledBox?>/><?=SUBDOMAINFROMLIST?></div>
                     <?php } ?>
                  </div>
               </div>
               <!-- elememts -->
            </div>
            <div class="elementHolder">
               <?php if($cart_list!=""){ ?>
               <div class="elements ac" id="s0">
                  <strong><?=DOMAIN?>:</strong><select name="chsld" id="chsld"><?=$cart_list?></select>&nbsp;<input type="submit" name="submit" value="<?=NEXT?>" />
               </div>
               <?php } ?>
               <?php if($dom_list!=""){ ?>
               <div class="elements ac" id="s1">
                  <strong><?=DOMAIN?>:</strong><select name="dhsld" id="dhsld"><?=$dom_list?></select>&nbsp;<input type="submit" name="submit" value="<?=NEXT?>" />
               </div>
               <?php } ?>
               <div class="elements ac" id="s2">
                  <strong><?=DOMAIN?>:</strong><input type="text" name="thsld" id="thsld" value="<?=$thsld?>" /><span class="hide-on-mobiles">.</span><select name="thtld" id="thtld"><?=$rtld_list?></select> <input type="submit" name="submit" value="<?=NEXT?>" />
               </div>
               <div class="elements ac" id="s3">
                  <strong><?=DOMAIN?>:</strong><input type="text" name="mhsld" id="mhsld" value="<?=$mhsld?>" /><span class="hide-on-mobiles">.</span><select name="mhtld" id="mhtld"><?=$ttld_list?></select> <input type="submit" name="submit" value="<?=NEXT?>" />
               </div>
               <div class="elements ac" id="s4">
                  <strong><?=DOMAIN?>:</strong><input type="text" name="bhsld" id="bhsld" value="<?=$bhsld?>" /><span class="hide-on-mobiles">.</span><input type="text" name="bhtld" id="bhtld" size="5" value="<?=$bhtld?>" /> <input type="submit" name="submit" value="<?=NEXT?>" />
               </div>
               <?php if($subdom_hosting==1){ ?>
               <div class="elements ac" id="s5">
                  <strong><?=DOMAIN?>:</strong><input type="text" name="sdsld" id="sdsld" value="<?=$sdsld?>" /><span class="hide-on-mobiles">.</span><select name="sdtld" id="sdtld"><?=$subdom_list?></select> <input type="submit" name="submit" value="<?=NEXT?>" />
               </div>
               <?php } ?>
            </div>
            <?php }else{ ?>
            <div class="ac" id="s6">
               <input type="submit" name="submit" value="<?=NEXT?>" />
            </div>
            <?php } ?>
         </form>
         <?=$boxbottom?>
      </td>
   </tr>
</table>

<script type="text/javascript">
window.addEvent('domready', function() {
	var accordion = new Accordion($$('.toggler'),$$('.elements'), {
		opacity: 1,
		display: -1,
		onActive: function(toggler) { toggler.addClass('actog'); },
		onBackground: function(toggler) { toggler.removeClass('actog'); }
	});
	<?php if($cart_list!=""){ ?>
	if (document.id('cart_list')) {
	document.id('cart_list').addEvent('click',function() {
	if (document.id('cart_list').disabled == false) {
		this.display(document.id('s0'));
	}}.bind(accordion));
	}
	<?php } ?>
	<?php if($dom_list!=""){ ?>
	if (document.id('dom_list')) {
	document.id('dom_list').addEvent('click',function() {
	if (document.id('dom_list').disabled == false) {
		this.display(document.id('s1'));
	}}.bind(accordion));
	}
	<?php } ?>
	if (document.id('register')) {
	document.id('register').addEvent('click',function() {
	if (document.id('register').disabled == false) {
		this.display(document.id('s2'));
	}}.bind(accordion));
	}
	if (document.id('transfer')) {
	document.id('transfer').addEvent('click',function() {
	if (document.id('transfer').disabled == false) {
		this.display(document.id('s3'));
	}}.bind(accordion));
	}
	<?php if($enom_plan!=1){ ?>
	if (document.id('enom_plan')) {
	document.id('enom_plan').addEvent('click',function() {
	if (document.id('enom_plan').disabled == false) {
		this.display(document.id('s4'));
	}}.bind(accordion));
	}
	<?php }else{ ?>
	if (document.id('nsonly')) {
	document.id('nsonly').addEvent('click',function() {
	if (document.id('nsonly').disabled == false) {
		this.display(document.id('s4'));
	}}.bind(accordion));
	}
	<?php } ?>
	<?php if($subdom_hosting==1){ ?>
	if (document.id('subdom_hosting')) {
	document.id('subdom_hosting').addEvent('click',function() {
	if (document.id('subdom_hosting').disabled == false) {
		this.display(document.id('s5'));
	}}.bind(accordion));
	}
	<?php } ?>
});
</script>
<!-- Contents /e -->
<?=$bottom?>
