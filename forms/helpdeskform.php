<?php
echo "<tr>
	  <td class=\"ar bold vlt\" nowrap=\"nowrap\">".HDUSERNAME.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\" style=\"line-height: 40px;\"><b>$newuid</b></td>
  </tr>
  <tr>
	  <td class=\"ar bold vlt\" nowrap=\"nowrap\">".HDREALNAME.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\"><input type=\"text\" name=\"hd_name\" value=\"$hd_name\" class=\"width-90\" /></td>
  </tr>
  <tr>
	  <td class=\"ar bold vlt\" nowrap=\"nowrap\">".HDDOMAIN.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\"><input type=\"text\" name=\"hd_url\" value=\"$hd_url\" class=\"width-90\" /></td>
   <tr>
	<td class=\"ar bold vlt\" nowrap=\"nowrap\">&nbsp;".TICKETSUBJECT.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\"><input type=\"text\" size=\"45\" maxlength=\"45\" name=\"hd_subject\" value=\"$hd_subject\" class=\"width-90\" /></td>
  </tr>

	<tr>
	  <td class=\"ar bold vlt\" nowrap=\"nowrap\">".TICKETTYPE.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\">$catlist</td>
  </tr>
  <tr>
	  <td class=\"ar bold vlt\" nowrap=\"nowrap\">".HDPRIORITY.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\">$levellist</td>
  </tr>
  <tr>
	  <td class=\"ar bold vlt\" nowrap=\"nowrap\">".HDREQUEST.":&nbsp;</td>
	<td class=\"al bold vlt width-90\" nowrap=\"nowrap\"><textarea rows=\"12\" cols=\"50\" name=\"hd_request\" class=\"width-90\">$hd_request</textarea></td>
  </tr>
  <tr>
	<td colspan=\"2\" class=\"row_11 ac\">
	<input type=\"hidden\" name=\"action\" value=\"$hd_action\" />
	<input type=\"hidden\" name=\"id\" value=\"$id\">
	<input type=\"file\" size=\"32\" name=\"a_file[]\" value=\"\" />
	<br /><input type=\"file\" size=\"32\" name=\"a_file[]\" value=\"\" />
	<br /><input type=\"file\" size=\"32\" name=\"a_file[]\" value=\"\" />
	<br />
	<input type=\"submit\" name=\"submit\" value=\"$button_text\" /></td>
  </tr>
";
?>
