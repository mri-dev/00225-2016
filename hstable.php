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
if(preg_match("/hstable.php/",getenv("SCRIPT_NAME"))){exit;}
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
	$hostingtable .= $boxtop."
		<table class=\"pkgtable\">
			<tr>
				<td class=\"pkgtabletitle\" colspan=\"2\"><span class=\"boxlegend\">".$hosting[$i]['description']."</span></td>
			</tr>
			<tr>
				<td class=\"descr\">";
				if ( $hosting[$i]['details_blurb'] == "" ){ $hostingtable .= "&nbsp;"; } else { $hostingtable .= "".$hosting[$i]['details_blurb'].""; }
				$hostingtable .= "
				</td>
				<td class=\"order\">
				<table class=\"price\">";
				if ( $hosting[$i]['monthly'] != "N/A" ) { $hostingtable .="
				<tr>
				<td class=\"term\">".PRICEMONTH."</td>
			<td class=\"price\">".$hosting[$i]['monthly']."</td>
			</tr>";}
				if ( $hosting[$i]['quarterly'] != "N/A" ) { $hostingtable .="
			<tr>
				<td class=\"term\">".PRICEQUARTER."</td>
				<td class=\"price\">".$hosting[$i]['quarterly']."</td>
			</tr>";}
				if ( $hosting[$i]['biannually'] != "N/A" ) { $hostingtable .="
			<tr>
				<td class=\"term\">".PRICEBIANNUAL."</td>
				<td class=\"price\">".$hosting[$i]['biannually']."</td>
			</tr>";}
				if ( $hosting[$i]['annually'] != "N/A" ) { $hostingtable .="
			<tr>
				<td class=\"term\">".PRICEYEAR."</td>
				<td class=\"price\">".$hosting[$i]['annually']."</td>
			</tr>";}
				if ( $hosting[$i]['biennially'] != "N/A" ) { $hostingtable .="
			<tr>
				<td class=\"term\">".PRICEBIENNIAL."</td>
				<td class=\"price\">".$hosting[$i]['biennially']."</td>
			</tr>";}
				if ( $hosting[$i]['triennially'] != "N/A" ) { $hostingtable .="
			<tr>
				<td class=\"term\">".PRICETRIENNIAL."</td>
				<td class=\"price\">".$hosting[$i]['triennially']."</td>
			</tr>";}
			$hostingtable .="
			<tr>
				<td class=\"term\">".HSETUPFEE."</td>";
				$hostingtable .= "
				<td class=\"price\">".$hosting[$i]['setupfee']."</td>
			</tr></table>
		";
				if($hosting[$i]['instock'] == "(0)" and $hosting[$i]['instock'] != ""){ $hostingtable .= "<div class=\"outofstock\"><span class=\"red\">[".OUTOFSTOCK."]</span></div>"; }else{ $hostingtable .= "<div class=\"hsOrderNow\"><span><a href=\"hsignup.php?pt=$pt&amp;plan=".urlencode($hosting[$i]['plan'])."\" class=\"inplink\">".ORDERNOW."</a></span></div>"; }
				$hostingtable .= "
				</td>
			</tr>
		</table>".$boxbottom."
		<br />
	";
}
$hostingtable .= "</div>";
?>