<ul id="menu">
<?php
	global $reseller_free_plan;
	$page_supportSelected	= (preg_match("/^(support|helpdesk|kb|contact|terms)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu b" : "";
	$page_contactSelected 	= (preg_match("/^(contactx)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu c" : "";
	$page_dsSelected 		= (preg_match("/^(hosting)\.php?pt=ds$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu h" : "";
	$page_hostSelected 		= (preg_match("/^(hosting|dshosting|dnhosting|hsignup)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu d" : "";
	$page_domainSelected 	= (preg_match("/^(check|whois|spincheck|spinname|transcheck|pricingfull|pricing|tspincheck|poporder|resellers|reseller|forsale|services|servicesfull)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu e" : "";
	$page_otherSelected 	= (preg_match("/^(packages|templates|addons|caddons|faq|faqfull|helpfull)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu f" : "";
	$page_accntSelected 	= (preg_match("/^(seomanage|sellhome|manage|managehome|transquery|createacct|welcome|push|getpush|dnsmgmt|DomainContacts|aLogIn|cart|omanage|download|downloada|imanage|editprofile|subacctmgmt|profilemgmt|journal|history|emailarchive|affiliate|acctrefill|DomainNs|dyndns|emailmgmt|map|phone|nsmaint|popmgmt|hmanage|DomainMain|smanage)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu g" : "";
?>
<li class="has-sub">
	<a href="#" class="<?=$page_domainSelected?>"><?=TMENU2?> </a>
	<ul>
		<li><a href="<?=$base?>/check.php" ><?=TMENU2A?></a></li>
		<li><a href="<?=$base?>/transcheck.php" ><?=TMENU2B?></a></li>
		<?php if ($use_forsale=="1" ){ ?><li><a href="<?=$base?>/forsale.php" ><?=TMENU2C?></a></li><?php } ?>
		<li><a href="<?=$base?>/pricingfull.php"><?=TMENU2D?></a></li>
		<?php if ($reseller_free_plan=="1" ){ ?><li><a href="<?=$base?>/resellers.php" ><?=TMENU2E?></a></li><?php } ?>
        <!-- <li><a href="<?=$base?>/whois.php" ><?=TMENU2F?></a></li> -->
	</ul>
</li>
<li class="has-sub">
	<a href="#" class="<?=$page_hostSelected?>"><?=TMENU3?></a>
	<ul>
		<?php if($hosting_active==1){ ?>
		<li><a href="<?=$base?>/hosting.php?spt=1" ><?=TMENU3A?></a></li>
		<!-- <li><a href="<?=$base?>/hosting.php?spt=15" ><?=TMENU3B?></a></li> -->
		<li><a href="<?=$base?>/hosting.php?spt=10" ><?=TMENU3C?></a></li>
		<!-- <li><a href="<?=$base?>/hosting.php?spt=13" ><?=TMENU3D?></a></li> -->
		<?php } ?><!-- <?php if ($f5_option == 2 and $LoggedIn == "1") { ?><li><a href="<?=$base?>/poporder.php" ><?=TMENU3D?></a></li><?php }else if ($f5_option == 1) { ?><li><a href="<?=$base?>/hosting.php?spt=11" ><?=TMENU3E?></a></li><?php } ?> -->
		<!-- <li><a href="<?=$base?>/dnhosting.php" ><?=TMENU3F?></a></li> -->
	</ul>
</li>
<li class="has-sub">
	<a href="#" class="<?=$page_dsSelected?>"><?=TMENU4?></a>
	<ul>
		<li><a href="<?=$base?>/packages.php?spt=2" ><?=TMENU4A?></a></li>
		<li><a href="<?=$base?>/hosting.php?pt=ds" ><?=TMENU4B?></a></li>
		<li><a href="<?=$base?>/hosting.php?spt=14" ><?=TMENU4D?></a></li>
	</ul>
</li>

<?php if($hosting_active==1){ ?>
<li class="has-sub">
	<a href="#" class="<?=$page_otherSelected?>"><?=TMENU5?></a>
	<ul>
		<li><a href="<?=$base?>/packages.php?spt=1" ><?=TMENU5A?></a></li>
		<li><a href="<?=$base?>/packages.php?spt=3" ><?=TMENU5B?></a></li>
		<!-- <li><a href="<?=$base?>/packages.php?spt=4" ><?=TMENU5C?></a></li> -->
		<!-- <li><a href="<?=$base?>/packages.php?spt=4" ><?=TMENU5D?></a></li> -->
		<?php if(sqlsingle("select * from module_types where name='templatemonster'","status")==1){ ?><li><a href="<?=$base?>/templates.php" ><?=TMENU5E?></a></li><?php }?>
		<?php $seo_config = mysql_fetch_array(mysql_query("select * from module_types where name='bpathseo'"));
			  if($seo_config["status"]=="1"){ ?>
		<?php if($seo_config["config7"]=="1"){ ?>
		<li><a href=" <?php echo $seo_config["config1"]; ?>" ><?=TMB4C?></a></li>
		<?php }else{ ?>
		<li><a href="<?=$base?>/packages.php?spt=<?php echo $seo_config["config8"]; ?>" ><?=TMENU5F?></a></li>
		<?php }?>
		<?php }?>
	</ul>
</li>
<?php }?>
<li class="has-sub">
	<a href="<?=$base?>/support.php" class="<?=$page_supportSelected?>"><?=TMENU6?></a>
	<ul>
		<li><a href="<?=$base?>/kb.php" ><?=TMENU6A?></a></li>
		<li><a href="<?=$securebase?>/helpdesk.php" ><?=TMENU6B?></a></li>
		<li><a href="<?=$base?>/contact.php" ><?=TMENU6C?></a></li>
		<li><a href="<?=$securebase?>/terms.php" ><?=TMENU6E?></a></li>
	</ul>
</li>
<?php
if ($LoggedIn== "1"){ ?>
<li class="has-sub">
	<a href="<?=$securebase?>/welcome.php" class="<?=$page_accntSelected?>"><?=TMENU7?></a>
	<ul>
		<li><a href="<?=$securebase?>/LogOut.php" ><?=TMENU7B?></a></li>
		<li><a href="<?=$securebase?>/welcome.php" ><?=TMENU7C?></a></li>
		<li><a href="<?=$base?>/cart.php" ><?=TMENU7E?></a></li>
		<?php if ($LoggedIn == "1" and $adminflag > "0") { ?><li><a href="<?=$securebase?>/admin/adminwelcome.php"><?=TMENU7F?></a></li><?php } ?>
	</ul>
</li>
<?php }else{ ?>
<li class="has-sub">
	<a href="<?=$securebase?>/aLogIn.php" class="<?=$page_accntSelected?>"><?=TMENU7?></a>
	<ul>
		<li><a href="<?=$securebase?>/aLogIn.php"><?=TMENU7A?></a></li>
		<li><a href="<?=$securebase?>/createacct.php"><?=TMENU7D?></a></li>
		<li><a href="<?=$base?>/cart.php"><?=TMENU7E?></a></li>
	</ul>
</li>
<?php } ?>
<?php
if ($LoggedIn== "1"){ ?>
<li><a href="<?=$securebase?>/LogOut.php" class="<?=$page_acctSelected?> ac logged-in iconed"><i class="fa fa-user"></i> <?=TMENU7B?></a></li>
<?php }else{ ?>
<li><a href="<?=$securebase?>/aLogIn.php" class="<?=$page_acctSelected?> ac need-login iconed"><i class="fa fa-user"></i> <?=TMENU7A?></a></li>
<?php } ?>
</ul>
