<?php
			$row4 .= "
			<tr><td class=\"ac vlt\" colspan=\"4\">
	  		<input type=\"hidden\" name=\"SessionID\" value=\"$sessionid\" /> 
	  		<input type=\"hidden\" name=\"ca\" value=\"update_cart\" />
	  		<input type=\"hidden\" name=\"numcart\" value=\"$g\" />			
			<input type=\"button\" value=\"".EMPTYCARTALT."\" onclick=\"if (confirm('".AREYOUSURECART."')) toURL('".$base."/cart.php?ca=empty');\" class=\"w-100\" />
			<input type=\"submit\" value=\"".PREUPDCARTALT."\" name=\"submit\" class=\"w-100\" />
			</td></tr></table></form>";
			$needsform="1";
?>