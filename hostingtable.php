<?php
/*
  AWBS - Advanced Webhost Billing System
  Copyright (C)2000-2010 Total Online Solutions Inc.
  http://www.awbs.com
*/
 $hostingtable .= "<div id=\"pkg\">";
 $boxtop1=@file(WORKDIR."/templates/$templatedir/boxtop.php");
 $boxtop2=@file(WORKDIR."/templates/common_files/boxtop.php");
 $boxtop = false;
 if(is_array($boxtop1)){
  foreach ($boxtop1 as $line) {
      $boxtop .= $line;
  }
 }elseif(is_array($boxtop2)){
  foreach ($boxtop2 as $line) {
      $boxtop .= $line;
  }
 }
 $boxbottom1=@file(WORKDIR."/templates/$templatedir/boxbottom.php");
 $boxbottom2=@file(WORKDIR."/templates/common_files/boxbottom.php");
 $boxbottom = false;
 if(is_array($boxbottom1)){
  foreach ($boxbottom1 as $line) {
      $boxbottom .= $line;
  }
 }elseif(is_array($boxbottom2)){
  foreach ($boxbottom2 as $line) {
      $boxbottom .= $line;
  }
 }
if(preg_match("/hostingtable.php/",getenv("SCRIPT_NAME"))){session_unregister("newuid");session_unregister("LoggedIn");exit;}
$cats = build_otype_list($spt,$pt);
 $hostingtable .= "<form action=\"hosting.php?pt=$pt\" method=\"post\" name=\"theForm\">
						<table class=\"width-100 data alc\">
							<tr><td class=\"boxtitle\" colspan=\"2\">".PKGCNFG."</td></tr>
							<tr>
								<td class=\"vlm ar bold width-25\" nowrap=\"nowrap\">".PKGCTGRS.":&nbsp;</td>
								<td class=\"al vlt\"><select class=\"width-75\" name=\"quicklink\" onchange=\"showObject(); openURL();\">$cats</select></td>
							</tr>
						</table>
					</form><br />";
for ( $i = 1; $i <= $num_package; $i++ ) {
	$hostingtable .= "
	".$boxtop."
		<table class=\"pkgtable\">
			<tr>
			";
			if($pt=="ds"){
				$hosting[$i]['instock']=($hosting[$i]['instock'] != "9876") ? "(".$hosting[$i]['instock'].")" : "";
				$hostingtable .= "<td class=\"pkgtabletitle\" colspan=\"2\"><span class=\"boxlegend\">".$hosting[$i]['description']."&nbsp;".$hosting[$i]['instock']."</span></td>";
			}else{
				$hostingtable .= "<td class=\"pkgtabletitle\" colspan=\"2\"><span class=\"boxlegend\">".$hosting[$i]['description']."</span></td>";
			}
			$hostingtable .= "
			</tr>
			<tr><td class=\"descr\">
			<div class=\"float-left\">".$hosting[1]['details1name']."</div><div class=\"float-right\">";
			if ( $hosting[$i]['details1'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details1']."&nbsp;"; }
			$hostingtable .= "</div><br />
			<div class=\"float-left\">".$hosting[1]['details2name']."</div><div class=\"float-right\">";
							if ( $hosting[$i]['details2'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details2']."&nbsp;"; }
			$hostingtable .= "</div><br />
			<div class=\"float-left\">".$hosting[1]['details3name']."</div><div class=\"float-right\">";
				if ( $hosting[$i]['details3'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details3']."&nbsp;"; }
			$hostingtable .= "</div><br />
			<div class=\"float-left\">".$hosting[1]['details4name']."</div><div class=\"float-right\">";
				if ( $hosting[$i]['details4'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details4']."&nbsp;"; }
			$hostingtable .= "</div><br />
			<div class=\"float-left\">".$hosting[1]['details5name']."</div><div class=\"float-right\">";
				if ( $hosting[$i]['details5'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details5']."&nbsp;"; }
			$hostingtable .= "</div><br />
			<div class=\"float-left\">".$hosting[1]['details6name']."</div><div class=\"float-right\">";
				if ( $hosting[$i]['details6'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details6']."&nbsp;"; }
			$hostingtable .= "</div>
							</td>";
			$hostingtable .= "<td class=\"order\">
								<table class=\"price\"><tr>
				<td class=\"term\">".PRICEMONTH."</td>
				<td class=\"price\">".$hosting[$i]['monthly']."</td>
			</tr>
				<tr>
				<td class=\"term\">".PRICEQUARTER."</td>
				<td class=\"price\">".$hosting[$i]['quarterly']."</td>
			</tr>
			<tr>
				<td class=\"term\">".PRICEBIANNUAL."</td>
				<td class=\"price\">".$hosting[$i]['biannually']."</td>
			</tr>
			<tr>
				<td class=\"term\">".PRICEYEAR."</td>
				<td class=\"price\">".$hosting[$i]['annually']."</td>
			</tr>
			<tr>
				<td class=\"term\">".PRICEBIENNIAL."</td>
				<td class=\"price\">".$hosting[$i]['biennially']."</td>
			</tr>
			<tr>
				<td class=\"term\">".PRICETRIENNIAL."</td>
				<td class=\"price\">".$hosting[$i]['triennially']."</td>
			</tr>
			<tr>
				<td class=\"term\">".HSETUPFEE."</td>";
				$hosting[$i]['setupfee'] = sprintf("$rounding",$hosting[$i]['setupfee']);
				$hostingtable .= "
				<td class=\"price\">".LCURRENCYSYMBOL.$hosting[$i]['setupfee'].RCURRENCYSYMBOL."</td>
			</tr></table>
				";
				if($pt=="ds"){
					if($hosting[$i]['instock'] == "(0)" and $hosting[$i]['instock'] != ""){
						$hostingtable .="[".OUTOFSTOCK."]";
					}else{
						$hostingtable .="<a href=\"hsignup.php?pt=".$pt."&amp;plan=".urlencode($hosting[$i]['plan'])."\" class=\"inplink\">".ORDERNOW."</a>";
					}
				}else{
						$hostingtable .="<a href=\"hsignup.php?plan=".urlencode($hosting[$i]['plan'])."\" class=\"inplink\">".ORDERNOW."</a>";
				}
				$hostingtable .= "
				</td>
			</tr>
		</table>".$boxbottom."
		<br />
	";
}
$hostingtable .= "</div>";
?>