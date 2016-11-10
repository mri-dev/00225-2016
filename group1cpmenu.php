<ul id="menu">
<?php
	global $reseller_free_plan;
	$page_homeSelected 		= (preg_match("/^(index)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu a" : "";
	$page_myAccountSelected = (preg_match("/^(createacct|cart|subacctmgmt|journal|history|emailarchive|affiliate|
								acctrefill|welcome|editprofile|subacctmgmt|acctrefill|imanage)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu b" : "";
	$page_manageSelected 	= (preg_match("/^(check|transcheck|manage|profilemgmt|transquery|forsale|sellhome|managehome)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu c" : "";
	$page_PackageSelected 	= (preg_match("/^(hmanage|omanage|smanage|seomanage|download|downloada)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu d" : "";
	$page_helpSelected 		= (preg_match("/^(news|helpdesk|kb|terms|contact)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu e" : "";
	$page_loginSelected 	= (preg_match("/^(aLogIn)\.php$/",basename($_SERVER["SCRIPT_FILENAME"])))? "selectedMenu f" : "";
?>
<!-- Home Button -->
	<li><a href="<?=$base?>/index.php" class="umenuhead <?=$page_homeSelected?>"><?=LMENU1?></a></li>
 <!-- My Account Button -->
    <li>
    	<a href="<?=$securebase?>/welcome.php" class="umenuhead <?=$page_myAccountSelected?>"><?=UMMENU1?></a>
        <ul>
            <li><a href="<?=$securebase?>/welcome.php"><?=MEMBERHOMETITLE?></a></li>
            <li><a href="<?=$securebase?>/editprofile.php"><?=EDITPROFILE?></a></li>
            <li><a href="<?=$securebase?>/editprofile.php?editpass=1"><?=EDITPASSWORD?></a></li>
            <li><a href="<?=$securebase?>/subacctmgmt.php"><?=USERSUBACCT?></a></li>
            <?php if($use_acct_refill=="1"){ ?><li><a href="<?=$securebase?>/acctrefill.php"><?=REFILLACCTLINK?></a></li><?php } ?>
            <li><a href="<?=$securebase?>/imanage.php"><?=VIEWPAY?></a></li>
            <li><a href="<?=$securebase?>/journal.php"><?=RECENTTRANS?></a></li>
            <li><a href="<?=$securebase?>/history.php"><?=RECENTHIST?></a></li>
            <li><a href="<?=$securebase?>/emailarchive.php"><?=EMAILARCHIVE?></a></li>
            <?php if ($LoggedIn == "1" and $adminflag > "0") { ?><li><a title="<?=TITLE4?>" href="<?=$securebase?>/admin/adminwelcome.php"><?=LMENU21?></a></li><?php } ?>
            <?php if ($LoggedIn== "1"){ ?>
			<li><a href="<?=$securebase?>/LogOut.php"><?=UMLOGOUT?></a></li>
    <?php }else{ ?>
            <li><a href="<?=$securebase?>/aLogIn.php"><?=LMENU5?></a></li>
            <li><a href="<?=$securebase?>/createacct.php"><?=TMENU4?></a></li>
    <?php } ?>

        </ul>
    </li>
	<!-- Domains Button -->
    <li>
    	<a href="<?=$base?>/manage.php" class="umenuhead <?=$page_manageSelected?>"><?=UMMENU2?></a>
        <ul>
			<li><a href="<?=$base?>/check.php" ><?=LMENU9?></a></li>
			<li><a href="<?=$base?>/transcheck.php" ><?=LMENU11?></a></li>
            <li><a href="<?=$base?>/manage.php"><?=MANAGEDOMAINS?></a></li>
            <li><a href="<?=$securebase?>/profilemgmt.php"><?=DOMAINPROFILES?></a></li>
            <li><a href="<?=$base?>/transquery.php"><?=UMTRANSTAT?></a></li>
            <?php if($use_forsale==1){ ?><li><a href="<?=$base?>/sellhome.php"><?=MYDOMAINS4SALE?></a></li><?php } ?>
            <li><a href="<?=$base?>/whois.php"><?=LMENU18?></a></li>
        </ul>
    </li>
    <?php if($usehosting==1 and $hosting_active==1){ ?>
	<!-- My Packages Button -->
    <li>
    	<a href="#" class="umenuhead <?=$page_PackageSelected?>"><?=UMMENU3?></a>
        <ul>
            <li><a href="<?=$securebase?>/hmanage.php"><?=VIEWHACCTS?></a></li>
            <li><a href="<?=$securebase?>/smanage.php"><?=SERVERACCTS?></a></li>
            <li><a href="<?=$securebase?>/omanage.php"><?=OMLINK?></a></li>
            <li><a href="<?=$base?>/download.php"><?=DOWNLOADLINK?></a></li>
            <li><a href="<?=$base?>/downloada.php"><?=DOWNLOADARCHIVELINK?></a></li>
            <?php if(sqlsingle("select * from module_types where name='bpathseo'","status")){ ?><li><a href="<?=$base?>/seomanage.php"><?=MANAGESEO?></a></li><?php } ?>
        </ul>
    </li>
    <?php } ?>
	<!-- Help & Info Button -->
    <li>
    	<a href="<?=$base?>/support.php" class="umenuhead <?=$page_helpSelected?>"><?=UMMENU4?></a>
        <ul>
            <li><a href="<?=$base?>/news.php"><?=MEMNEWS?></a></li>
            <?php if($kb_full_link!=""){ ?><li><a href="<?=$securebase?>/welcome.php?kbmt=1"><?=KBLINK?></a></li><?php }else{ ?><li><a href="<?=$kb_link?>"><?=KBLINK?></a></li><?php } ?>
            <li><a href="<?=$securebase?>/helpdesk.php"><?=HELPDESKLINK?></a></li>
            <?php if($use_affil==1){ ?><?php if(sqlsingle("select * from module_types where name='idevaffiliate'","status")==1){ ?><li><a href="<?=$securebase?>/welcome.php?idev=1"><?=AFFILINFO?></a></li><?php }else if(sqlsingle("select * from module_types where name='jroxaffiliate'","status")==1){ ?><li><a href="<?=$securebase?>/welcome.php?jrox=1"><?=AFFILINFO?></a></li><?php }else{ ?><li><a href="<?=$base?>/affiliate.php"><?=AFFILINFO?></a></li><?php } ?><?php } ?>
            <li><a href="<?=$base?>/terms.php"><?=UMTERMS?></a></li>
		<li><a href="<?=$base?>/contact.php"><?=ALTCONTACT?></a></li>
        </ul>
    </li>
<!-- Order Button -->
	<?php if(!empty($homeurl) and $homeurl != $base){ ?>
	<li><a href="<?=$homeurl?>" class="umenuhead <?=$page_orderSelected?>"><?=UMMENU5?></a></li>
<!-- Log In/Log Out Button -->
	<?php $isclose="close"; } ?>
	<?php if ($LoggedIn== "1"){ ?>
	<li><a href="<?=$securebase?>/LogOut.php" class="umenuhead <?=$isclose?>"><?=UMLOGOUT?></a></li>
    <?php }else{ ?>
            <li><a href="<?=$securebase?>/aLogIn.php" class="umenuhead <?=$isclose?> <?=$page_loginSelected?>"><?=LMENU5?></a></li>
    <?php } ?>
</ul>