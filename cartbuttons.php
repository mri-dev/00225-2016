<?php
		$row4.="
		<tr>
			<td class=\"ar vlm refresh-cart\" colspan=\"5\">
				<input type=\"hidden\" name=\"SessionID\" value=\"".session_id()."\" />
				<input type=\"hidden\" name=\"ca\" value=\"update_cart\" />
				<input type=\"hidden\" name=\"numcart\" value=\"$i\" />".CARTCLICKUPDATE."&nbsp;&nbsp;<input type=\"submit\" value=\"".UPDCARTALT."\" name=\"submit\" class=\"w-100\" />
			</td>
		</tr>";
		$row4 .= "</table>";
		if($emptycart!=1){$row4.="</form>";}
?>
