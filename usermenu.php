<?php
	global $umenu;
	#User Menu /s
	$umenu="<div id=\"uvmenu\">";
	#start open sub-menu 1
	$umenu.="<div id=\"UsersMenuPanel1\" class=\"CollapsiblePanel\">";
    $umenu.="<div class=\"CollapsiblePanelTab\">".UMMENU1."</div>";
	$umenu.="<div class=\"CollapsiblePanelContent\">";
	#end open sub-menu
	$umenu.="<ul>";
	$umenu.="<li><a href=\"$securebase/welcome.php\">".MEMBERHOMETITLE."</a></li>";
	$umenu.="<li><a href=\"$securebase/editprofile.php\">".EDITPROFILE."</a></li>";
	$umenu.="<li><a href=\"$securebase/editprofile.php?editpass=1\">".EDITPASSWORD."</a></li>";
	$umenu.="<li><a href=\"$securebase/contactmgmt.php\">".CONTACTMGMT."</a></li>";
	$umenu.="<li><a href=\"$securebase/subacctmgmt.php\">".USERSUBACCT."</a></li>";
	if($use_acct_refill==1){
		$umenu.="<li><a href=\"$securebase/acctrefill.php\">".REFILLACCTLINK."</a></li>";
	}
	$umenu.="<li><a href=\"$securebase/imanage.php\">".VIEWPAY."</a></li>";
	$umenu.="<li><a href=\"$securebase/journal.php\">".RECENTTRANS."</a></li>";
	$umenu.="<li><a href=\"$securebase/history.php\">".RECENTHIST."</a></li>";
	$umenu.="<li><a href=\"$securebase/LogOut.php\">".UMLOGOUT."</a></li>";
	$umenu.="</ul>";
	$umenu.="</div>";
	$umenu.="<script type=\"text/javascript\">var UsersMenuPanel1 = new Spry.Widget.CollapsiblePanel(\"UsersMenuPanel1\", {contentIsOpen:true});</script>";
	$umenu.="</div>";
	#menu contents /e
	#start open sub-menu 2
	#start open sub-menu 1
	$umenu.="<div class=\"vmenuSep\">&nbsp;</div>";
	$umenu.="<div id=\"UsersMenuPanel2\" class=\"CollapsiblePanel\">";
    $umenu.="<div class=\"CollapsiblePanelTab\" onclick=\"SprySaveState('UsersMenuPanel2');\">".UMMENU2."</div>";
	$umenu.="<div class=\"CollapsiblePanelContent\">";
	#end open sub-menu
	$umenu.="<ul>";
	$umenu.="<li><a href=\"$base/manage.php\">".MANAGEDOMAINS."</a></li>";
	$umenu.="<li><a href=\"$securebase/profilemgmt.php\">".DOMAINPROFILES."</a></li>";
	$umenu.="<li><a href=\"$base/transquery.php\">".UMTRANSTAT."</a></li>";
	if($use_forsale==1){
		$umenu.="<li><a href=\"$base/sellhome.php\">".MYDOMAINS4SALE."</a></li>";
	}
	$umenu.="</ul>";
	$umenu.="</div>";
	$umenu.="<script type=\"text/javascript\">var UMPS2 = SpryGetState(\"UsersMenuPanel2\"); var UsersMenuPanel2 = new Spry.Widget.CollapsiblePanel(\"UsersMenuPanel2\", {contentIsOpen:UMPS2});</script>";
	$umenu.="</div>";
	if($usehosting==1 and $hosting_active==1){
		#start open sub-menu 3
		$umenu.="<div class=\"vmenuSep\">&nbsp;</div>";
		$umenu.="<div id=\"UsersMenuPanel3\" class=\"CollapsiblePanel\">";
		$umenu.="<div class=\"CollapsiblePanelTab\" onclick=\"SprySaveState('UsersMenuPanel3');\">".UMMENU3."</div>";
		$umenu.="<div class=\"CollapsiblePanelContent\">";
		#end open sub-menu
		$umenu.="<ul>";
		$umenu.="<li><a href=\"$securebase/hmanage.php\">".VIEWHACCTS."</a></li>";
		$umenu.="<li><a href=\"$securebase/smanage.php\">".SERVERACCTS."</a></li>";
		$umenu.="<li><a href=\"$securebase/omanage.php\">".OMLINK."</a></li>";
		if(sqlsingle("select * from module_types where name='bpathseo'","status")){
			$umenu.="<li><a href=\"$base/seomanage.php\">".MANAGESEO."</a></li>";
		}
		$umenu.="</ul>";
		$umenu.="</div>";
	$umenu.="<script type=\"text/javascript\">var UMPS3 = SpryGetState(\"UsersMenuPanel3\"); var UsersMenuPanel2 = new Spry.Widget.CollapsiblePanel(\"UsersMenuPanel3\", {contentIsOpen:UMPS3});</script>";
		$umenu.="</div>";
	#menu contents /s
	#menu contents /e
	}
	#start open sub-menu 4
	$umenu.="<div class=\"vmenuSep\">&nbsp;</div>";
	$umenu.="<div id=\"UsersMenuPanel4\" class=\"CollapsiblePanel\">";
	$umenu.="<div class=\"CollapsiblePanelTab\" onclick=\"SprySaveState('UsersMenuPanel4');\">".UMMENU4."</div>";
	$umenu.="<div class=\"CollapsiblePanelContent\">";
	#end open sub-menu
	$umenu.="<ul>";
		if($kb_full_link!=""){
			$umenu.="<li><a href=\"$securebase/welcome.php?kbmt=1\">".KBLINK."</a></li>";
		}else{
			$umenu.="<li><a href=\"$kb_link\">".KBLINK."</a></li>";
		}
	$umenu.="<li><a href=\"$securebase/helpdesk.php\">".HELPDESKLINK."</a></li>";
	if($use_affil==1){
		if(sqlsingle("select * from module_types where name='idevaffiliate'","status")==1){
			$umenu.="<li><a href=\"$securebase/welcome.php?idev=1\">".AFFILINFO."</a></li>";
		}else if(sqlsingle("select * from module_types where name='jroxaffiliate'","status")==1){
			$umenu.="<li><a href=\"$securebase/welcome.php?jrox=1\">".AFFILINFO."</a></li>";
		}else{
			$umenu.="<li><a href=\"$base/affiliate.php\">".AFFILINFO."</a></li>";
		}
	}
	$umenu.="<li><a href=\"$base/terms.php\">".UMTERMS."</a></li>";
	$umenu.="</ul>";
	$umenu.="</div>";
	$umenu.="<script type=\"text/javascript\">var UMPS4 = SpryGetState(\"UsersMenuPanel4\"); var UsersMenuPanel4 = new Spry.Widget.CollapsiblePanel(\"UsersMenuPanel4\", {contentIsOpen:UMPS4});</script>";
	$umenu.="</div>";
	$umenu.="</div>";
?>
