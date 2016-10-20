<?php
echo "

$boxtop
<table class=\"width-100 data\">
	<tr>
		<td colspan=\"2\" class=\"boxtitle\"><span class=\"boxlegend\">".TICKETEDITOR."</span></td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".HDTICKETID.":</td>
		<td class=\"al width-75\">&nbsp;$hd_prefix-$id</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".OPENDATE.":</td>
		<td class=\"al width-75\">&nbsp;$open_date</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".HDUSERNAME.":</td>
		<td class=\"al width-75\">&nbsp;$newuid</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".HDREALNAME.":</td>
		<td class=\"al width-75\">&nbsp;$hd_name</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".HDDOMAIN.":</td>
		<td class=\"al width-75\">&nbsp;$hd_url</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".TICKETSUBJECT.":</td>
		<td class=\"al width-75\">&nbsp;$hd_subject</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".TICKETTYPE.":</td>
		<td class=\"al width-75\">&nbsp;$catlist</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".HDPRIORITY.":</td>
		<td class=\"al width-75\">&nbsp;$levellist</td>
	</tr>
	<tr>
		<td class=\"ar bold width-25\">".TICKETSTATUS.":</td>
		<td class=\"al width-75\">&nbsp;$statuslist</td>
	</tr>
	<tr>
		<td colspan=\"2\" class=\"al\"><hr />$hd_fold_request<hr /></td>
	</tr>
	<tr>
		<td colspan=\"2\" class=\"ac\">$ticketcloselink</td>
	</tr>
</table>
$boxbottom
<br />
$boxtop
<table class=\"width-100 data\">
	<tr>
		<td class=\"boxtitle\"><span class=\"boxlegend\">".HDTICKETRESPONSES."</span></td>
	</tr>
		$hd_old_request
</table>
$boxbottom
<br />
$boxtop
<table class=\"width-100 data\">			
	<tr>
		<td class=\"boxtitle\"><span class=\"boxlegend\">".HDENTERRESPONSE."</span></td>
	</tr>
	<tr>
		<td class=\"row_11 ac\"><textarea rows=\"10\" cols=\"70\" name=\"hd_request\" class=\"formtextarea\">$hd_request</textarea></td>
	</tr>
	<tr>
		<td colspan=\"2\" class=\"row_11 ac\">
			<input type=\"hidden\" name=\"action\" value=\"$hd_action\" />
			<input type=\"hidden\" name=\"catlist\" value=\"$catlist\" />
			<input type=\"hidden\" name=\"statuslist\" value=\"$statuslist\" />
			<input type=\"hidden\" name=\"id\" value=\"$id\" />	
			<input type=\"file\" size=\"32\" name=\"a_file[]\" value=\"\" />
			<br /><input type=\"file\" size=\"32\" name=\"a_file[]\" value=\"\" />
			<br /><input type=\"file\" size=\"32\" name=\"a_file[]\" value=\"\" />
			<br />
			<input type=\"submit\" name=\"submit\" value=\"$button_text\" />	
		</td>
	</tr>
</table>
$boxbottom
<p class=\"ac\"><a href=\"helpdesk.php\" class=\"rtrntomgmt\" style=\"width:50px;\">".HDCANCEL."</a></p>

";
?>