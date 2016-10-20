<?php
if($acct_canceled==1){
	echo "
		<table class=\"width-100 data alc\">
               <tr>
                   <td class=\"boxtitle\" colspan=\"3\">".HMANAGETITLE."</td>
               </tr>
	  <tr>
		  <td class=\"ar width-25 vlt bold\" nowrap=\"nowrap\">".HDOMAIN.":&nbsp;</td>
		<td class=\"al\">$domain</td>
	  </tr>
	<tr><td class=\"ac bold\" colspan=\"2\"><u>".HCANCELQ."</u></td></tr>
	<tr><td class=\"al bold\" colspan=\"2\">".HCANCELBLURB."
	<br /><br />
	<form method=\"post\" action=\"welcome.php\">
	<center>
	<br /><br /><input type=\"submit\"  name=\"submit\" value=\"".HRETURN."\" /><br /><br />
	</center></form>
	</td></tr>
	</table>
	";
}else{
	echo "
		<table class=\"width-100 data alc\">
               <tr>
                   <td class=\"boxtitle\" colspan=\"3\">".HMANAGETITLE."</td>
               </tr>
	  <tr>
		  <td class=\"ar width-25 vlt bold\" nowrap=\"nowrap\">".HDOMAIN.":&nbsp;</td>
		<td class=\"al width-75 vlt\" nowrap=\"nowrap\">$domain</td>
	  </tr>
		<tr>
		  <td class=\"ar width-25 vlt bold\" nowrap=\"nowrap\">".HSTART.":&nbsp;</td>
		<td class=\"al width-75 vlt\" nowrap=\"nowrap\">$start_date</td>
	  </tr>
	  <tr>
		  <td class=\"ar width-25 vlt bold\" nowrap=\"nowrap\">".HNEXTREN.":&nbsp;</td>
		<td class=\"al width-75 vlt\" nowrap=\"nowrap\">$renew_date</td>
	  </tr>
	  <tr>
		  <td class=\"ar width-25 vlt bold\" nowrap=\"nowrap\">".HSTATUS.":&nbsp;</td>
		<td class=\"al width-75 vlt\" nowrap=\"nowrap\">$dstatus</td>
	  </tr>
	  <tr>
		  <td class=\"ar width-25 vlt bold\" nowrap=\"nowrap\">".HPLAN.":&nbsp;</td>
		<td class=\"al width-75 vlt\" nowrap=\"nowrap\">$plan</td>
	  </tr>
	<tr><td class=\"ac bold\" colspan=\"2\"><b><u>".HWARNTITLE."</u></b></td></tr>
	<tr><td class=\"al bold\" colspan=\"2\"><br />".HWARN."
	<br /><br />

	<form method=\"post\" action=\"hmanage.php\" onsubmit=\"submitonce(this);\">
	<input type=\"hidden\" name=\"action\" value=\"cancel_hosting\" />
	<input type=\"hidden\" name=\"domain\" value=\"".$domain."\" />
	<input type=\"hidden\" name=\"plan\" value=\"".$plan."\" />
	<input type=\"hidden\" name=\"hid\" value=\"".$hid."\" />
	<label><input type=\"radio\" name=\"cancel_date\" value=\"1\" checked=\"checked\" />".HCANCELNOW."&nbsp;</label>";
	if($open_inv != "1"){
		echo "<label><input type=\"radio\" name=\"cancel_date\" value=\"2\" checked=\"checked\" />".HCANCELLATER." </label>";
	}
	echo " <br /><br /><label><input type=\"checkbox\" name=\"iagree\" value=\"1\" />".HCANCELVERIFY."</label>
	<div class=\"ac\"><input type=\"submit\" name=\"submit\" value=\"".HCANCELSUBMIT."\" /></div>
	</form>

	</td></tr></table>
	";
}
?>