<?php
/*
  AWBS - Advanced Webhost Billing System
  Copyright (C)2000-2009 Total Online Solutions Inc.
  http://www.awbs.com
*/
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
if(preg_match("/caddontable.php/",getenv("SCRIPT_NAME"))){exit;}
	for ( $i = 0; $i < $num_package; $i++ ) {
		$hostingtable .= "".$boxtop."<table class=\"width-100 data\">";
		$hostingtable .= "<tr><td class=\"boxtitle\">".$pulldowns[$i][description]."</td></tr>";
		$hostingtable .= "<tr><td class=\"ac\"><select name=\"addon".$i."\">".$pulldowns[$i][options]."</select></td></tr>";
		$hostingtable .= "<tr><td  class=\"al\">".$pulldowns[$i][blurb]."</td></tr>";
		$hostingtable .= "</table>".$boxbottom."<br />";
	}
	$hostingtable .= "<input type=\"hidden\" name=\"numaddons\" value=\"".$i."\" />
		<input type=\"hidden\" name=\"spt\" value=\"".$spt."\" />
		<input type=\"hidden\" name=\"ca\" value=\"add_addon\" />";
	$hostingtable .= "<div class=\"ac\"><input type=\"submit\" name=\"submit\" value=\"".NEXT."\" /></div>";

?>