<?php
/*
  AWBS - Advanced Webhost Billing System
  Copyright (C)2000-2006 Total Online Solutions Inc.
  http://www.awbs.com


  DO NOT EDIT UNLESS YOU __REALLY__ KNOW WHAT YOU ARE DOING!
*/
switch($legal_case){
	case "au":

	if(strtolower($row[carttld])=="asn.au"){
$row2options="<option value=\"INCASSOC\">Australian Incorporated Association</option><option value=\"POLITIC\">Australian Political Party</option><option value=\"UNION\">Australian Trade Union</option><option value=\"INDUSTRY\">Australian Industry Body</option><option value=\"CLUB\">Australian Sporting or Personal Interest Club</option><option value=\"OTHER\">Other</option>";
	}elseif(strtolower($row[carttld])=="com.au"){
$row2options="<option value=\"INCASSOC\">Australian Incorporated Association</option><option value=\"COMPANY\">Australian Registered Company</option><option value=\"TRADING\">Trading under an Australian Business Name</option><option value=\"PARTNERSHIP\">Australian Partnership</option><option value=\"SOLETRADER\">Australian Sole Trader</option><option value=\"FOREIGN\">Foreign Company Licensed to trade in Australia</option><option value=\"TMARKOWNER\">Australian Registered Trademark owner</option><option value=\"TMARKAPPLIC\">Australian Registered Trademark applicant</option><option value=\"STATUTORY\">Australian Commercial Statutory Body</option><option value=\"OTHER\">Other</option>";
	}elseif(strtolower($row[carttld])=="net.au"){
$row2options="<option value=\"INCASSOC\">Australian Incorporated Association</option><option value=\"COMPANY\">Australian Registered Company</option><option value=\"TRADING\">Trading under an Australian Business Name</option><option value=\"PARTNERSHIP\">Australian Partnership</option><option value=\"SOLETRADER\">Australian Sole Trader</option><option value=\"FOREIGN\">Foreign Company Licensed to trade in Australia</option><option value=\"TMARKOWNER\">Australian Registered Trademark owner</option><option value=\"TMARKAPPLIC\">Australian Registered Trademark applicant</option><option value=\"STATUTORY\">Australian Commercial Statutory Body</option><option value=\"OTHER\">Other</option>";
	}elseif(strtolower($row[carttld])=="org.au"){
$row2options="<option value=\"INCASSOC\">Australian Incorporated Association</option><option value=\"CLUB\">Australian Sporting or Personal Interest Club</option><option value=\"COMPANY\">Australian Registered Company</option><option value=\"TRADING\">Trading under an Australian Business Name</option><option value=\"CHARITY\">Charity operating in Australia</option><option value=\"NONPROFIT\">Non-Profit Organisation Operating in Australia</option><option value=\"OTHER\">Other</option>";
	}elseif(strtolower($row[carttld])=="id.au"){
$row2options="<option value=\"CITIZEN\">Australian Citizen or Resident</option>";
	}

	$row2.="
	<tr class=\"invisible\"><td colspan=\"2\">
	<script language=\"javascript\" type=\"text/javascript\">
		function doAUstuff$g(prefer){
			ResetStuff$g();
			switch (prefer){
				case 'INCASSOC':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;Association number';
				break;
				case 'UNION':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;Organisation number';
				break;
				case 'INDUSTRY':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;Organisation number';
				break;
				case 'COMPANY':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;ACN (Australian Company Number)';
				break;
				case 'TRADING':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;RBN (Registered Business Number)';
				break;
				case 'PARTNERSHIP':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;ABN (Australian Business Number)';
				break;
				case 'SOLETRADER':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;ABN (Australian Business Number)';
				break;
				case 'FOREIGN':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;RBN (Registered Business Number)';
				break;
				case 'TMARKOWNER':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;Applicable to company type';
					document.getElementById(\"extras$g\").style.display = 'block';
					document.getElementById(\"trademark2$g\").style.display = 'block';
					document.getElementById(\"trademark$g\").style.display = 'block';
				break;
				case 'TMARKAPPLIC':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;Applicable to company type';
					document.getElementById(\"extras$g\").style.display = 'block';
					document.getElementById(\"trademark2$g\").style.display = 'block';
					document.getElementById(\"trademark$g\").style.display = 'block';
				break;
				case 'CHARITY':
					text = '&lt;strong class=\"bold red\"&gt;*&lt;/strong&gt;ABN (Australian Business Number)';
				break;
				case 'CLUB':
					text = 'ABN (if applicable)';
				break;
				case 'NONPROFIT':
					text = 'ABN (if applicable)';
				break;
				case 'STATUTORY':
					text = 'Comments';
					document.getElementById(\"extras$g\").style.display = 'block';
					document.getElementById(\"parliament$g\").style.display = 'block';
				break;
				default:
					text = 'Comments';
				break;
			}
			document.getElementById(\"pc2txt$g\").innerHTML = decodeHTML(text);
		}
		function ResetStuff$g(){
			document.getElementById(\"extras$g\").style.display = 'none';
			document.getElementById(\"trademark2$g\").style.display = 'none';
			document.getElementById(\"trademark$g\").style.display = 'none';
			document.getElementById(\"parliament$g\").style.display = 'none';
		}
	</script>
	</td></tr>
	<tr class=\"$dlcolor\">
		<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Organisation Type&nbsp;</td>
		<td colspan=\"2\"><select id=\"pc1$g\" name=\"pc1$g\" onchange=\"doAUstuff$g(this.value)\" class=\"width-75\">$row2options</select></td>
	</tr>
	<tr class=\"$dlcolor\">
		<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><div id=\"pc2txt$g\"><strong class=\"bold red\">*</strong>Association number</div></td>
		<td colspan=\"2\"><input type=\"text\" name=\"pc2$g\" value=\"$row[preconfig2]\" class=\"width-75\" /></td>
	</tr>
	<tr id=\"extras$g\" style=\"display:none;\">
		<td class=\"ar vlm width-20\" nowrap=\"nowrap\">
			<div id=\"trademark$g\" style=\"display:none;\"><strong class=\"bold red\">*</strong>Trademark Name:&nbsp;</div>
			<div id=\"parliament$g\" style=\"display:none;\"><strong class=\"bold red\">*</strong>Parliament Act:&nbsp;</div>
		</td>
		<td colspan=\"2\"><input type=\"text\" name=\"pc3$g\" value=\"$row[preconfig3]\" class=\"width-75\" /></td>
	</tr>
	<tr id=\"trademark2$g\" style=\"display:none;\">
		<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Trademark Number:&nbsp;</td>
		<td colspan=\"2\">
			<input type=\"text\" name=\"pc4$g\" value=\"$row[preconfig4]\" class=\"width-75\" />
			<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" />
			<input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
		</td>
	</tr>
	<tr class=\"$dlcolor\">
		<td class=\"ac vlm width-50\" colspan=\"3\">The Registrant Name will be taken from the Organisation Name in your domain profile. If there is no Organisation Name avaliable your Firtname and Surname will be used. Your State and Address must also be correct. Failiure to provide accurate infomation, may result in your AU application been rejected.</td>
	</tr>
	<tr class=\"invisible\"><td colspan=\"3\"><script language=\"javascript\" type=\"text/javascript\">doAUstuff$g(document.getElementById(\"pc1$g\").value);</script></td></tr>
	";
	break;

	case "uk":
		$row2.="
	<tr class=\"$dlcolor\">
		<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Legal Type of Registrant Contact&nbsp;</td>
		<td colspan=\"2\"><select name=\"pc1$g\" class=\"width-75\"><option value=\"LTD\">UK Limited Company</option><option value=\"PLC\">UK Public Limited Company</option><option value=\"PTNR\">UK Partnership</option><option value=\"LLP\">UK LLP</option><option value=\"STRA\">UK Sole Trader</option><option value=\"RCHAR\">UK Registered Charity</option><option value=\"IND\">UK Individual</option><option value=\"OTHER\">UK Entity (other)</option><option value=\"FCORP\">Non-UK Corporation</option><option value=\"FOTHER\">Non-UK Organization</option></select> </td>
	</tr>
	<tr class=\"$dlcolor\">
		<td class=\"ar vlt width-20\" nowrap=\"nowrap\">Company Identification Number&nbsp;</td>
		<td colspan=\"2 vlt\">
			<input type=\"text\" name=\"pc2$g\" value=\"$row[preconfig2]\" class=\"width-75\" />
			<ul class=\"al\">
				<li><strong>* UK Limited Company</strong> requires an entry in Company identification number</li>
				<li><strong>* UK Public Limited Company</strong> requires an entry in Company identification number</li>
				<li><strong>* UK LLP</strong> requires an entry in Company identification number</li>
				<li><strong>* UK Registered Charity</strong> requires an entry in Company identification number</li>
				<li><strong>* All others should leave the above field blank</li>
			</ul>
		</td>
	</tr>
	<tr class=\"$dlcolor\">
		<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Company or person domain is registered for:&nbsp;<br />(this must be accurate and CANNOT BE CHANGED)&nbsp;</td>
		<td colspan=\"2\"><input type=\"text\" name=\"pc3$g\" value=\"$row[preconfig3]\" class=\"width-75\" /><input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" /><input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" /></td>
	</tr>";
	if($ukwhoisopt==1){
		$row2.="
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Hide WHOIS info at Nominet</td>
			<td colspan=\"2\"><select name=\"pc4$g\" class=\"width-75\"><option value=\"y\" selected=\"selected\">Yes</option><option value=\"n\">No</option></select></td>
		</tr>";
	}
	break;
//uk_reg_opt_out
	case "sg":
		$row2.="
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Company Registration Number</td>
			<td colspan=\"2\"><input type=\"text\" name=\"pc1$g\" class=\"width-75\" /><input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" /><input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" /></td>
		</tr>
		";
	break;
	case "ca":
		$row2.="
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Legal Type of Registrant Contact</td>
			<td colspan=\"2\">
				<select name=\"pc1$g\" class=\"width-75\">
				<option value=\"CCO\">Corporation</option>
				<option value=\"CCT\">Canadian Citizen</option>
				<option value=\"RES\">Canadian Resident</option>
				<option value=\"GOV\">Government Entity</option>
				<option value=\"EDU\">Educational</option>
				<option value=\"ASS\">Unincorporated Association</option>
				<option value=\"HOP\">Hospital</option>
				<option value=\"PRT\">Partnership</option>
				<option value=\"TDM\">Trade-mark</option>
				<option value=\"TRD\">Trade Union</option>
				<option value=\"PLT\">Political Party</option>
				<option value=\"LAM\">Library, Archive or Museum</option>
				<option value=\"TRS\">Trust</option>
				<option value=\"ABO\">Aboriginal Peoples</option>
				<option value=\"INB\">Indian Band</option>
				<option value=\"LGR\">Legal Representative</option>
				<option value=\"OMK\">Official Mark</option>
				<option value=\"MAJ\">The Queen</option>
				</select>
				<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" /><input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Agree to Registrant Agreement</td>
			<td colspan=\"2\"><select name=\"pc2$g\" class=\"width-40\"><option value=\"Y\">Yes</option><option value=\"\">No</option></select>&nbsp;[<a href=\"http://www.cira.ca/assets/Documents/Legal/Registrants/registrantagreement.pdf\" target=\"_blank\">Click to View Agreement</a>]</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar width-20 vlm\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Agreement Version Number</td>
			<td colspan=\"2\" class=\"al vlt\">
				<input type=\"text\" name=\"pc3$g\" class=\"width-75\" /></td>
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td colspan=\"3\" class=\"al small\">
			Note: Enter the agreement version number you are agreeing to above. This is found at the top of the agreement.
			<br /><br /> You are about to apply for a domain name registration in the .ca registry. Please note that CIRA, the organization that operates the .ca registry, requires everyone who registers a domain name in the .ca registry to meet the .ca Canadian Presence Requirements (CPR) (you can find these at: http://www.cira.ca/en/cat_Registration.html). If you do not meet any of the Canadian Presence Requirements please do not apply for a .ca domain name. If you do not meet the Canadian Presence Requirements when you apply for a registration, CIRA may reject your Registration Request. If you do not meet the Canadian Presence Requirements and after you are granted a .ca domain name registration, CIRA may cancel all your domain name registrations.
			</td>
		</tr>";
	break;
	case "us":
		$row2.= "
		<tr class=\"$dlcolor\">
			<td class=\"ar vlt bold width-20\" nowrap=\"nowrap\"><a href=\"legalpop.php\" rel=\"external\" onclick='window.open(\"$base/legalpop.php\",\"legalpop\",\"width=475,height=415,status=yes,scrollbars=1,resizable=1\");return false;'><img src=\"templates/$templatedir/images/question.gif\" alt=\"Legal\" /></a>&nbsp;<strong class=\"bold red\">*</strong>Nexus Category:</td>
			<td class=\"al vlt\" colspan=\"2\">
				<p><input type=\"radio\" name=\"pc1$g\" value=\"C11\" checked=\"checked\" />C11: US Citizen</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"C12\" />C12: Permanent Resident</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"C21\" />C21: US organization</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"C31\" />C31/CC: Foreign organization</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"C32\" />C32/CC: Foreign org. with U.S. office</p>
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm bold width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Nexus Country:</td>
			<td class=\"al vlt\" colspan=\"2\">
				<select name=\"pc2$g\"><option value=\"us\">United States</option><option value=\"af\">Afghanistan</option><option value=\"al\">Albania</option><option value=\"dz\">Algeria</option><option value=\"as\">American Samoa</option><option value=\"ad\">Andorra, Principality of</option><option value=\"ao\">Angola</option><option value=\"ai\">Anguilla</option><option value=\"aq\">Antarctica</option><option value=\"ag\">Antigua and Barbuda</option><option value=\"ar\">Argentina</option><option value=\"am\">Armenia</option><option value=\"aw\">Aruba</option><option value=\"au\">Australia</option><option value=\"at\">Austria</option><option value=\"az\">Azerbaidjan</option><option value=\"bs\">Bahamas</option><option value=\"bh\">Bahrain</option><option value=\"bd\">Bangladesh</option><option value=\"bb\">Barbados</option><option value=\"by\">Belarus</option><option value=\"be\">Belgium</option><option value=\"bz\">Belize</option><option value=\"bj\">Benin</option><option value=\"bm\">Bermuda</option><option value=\"bt\">Bhutan</option><option value=\"bo\">Bolivia</option><option value=\"ba\">Bosnia-Herzegovina</option><option value=\"bw\">Botswana</option><option value=\"bv\">Bouvet Island</option><option value=\"br\">Brazil</option><option value=\"io\">British Indian Ocean Territory</option><option value=\"bn\">Brunei Darussalam</option><option value=\"bg\">Bulgaria</option><option value=\"bf\">Burkina Faso</option><option value=\"bi\">Burundi</option><option value=\"kh\">Cambodia, Kingdom of</option><option value=\"cm\">Cameroon</option><option value=\"ca\">Canada</option><option value=\"cv\">Cape Verde</option><option value=\"ky\">Cayman Islands</option><option value=\"cf\">Central African Republic</option><option value=\"td\">Chad</option><option value=\"cl\">Chile</option><option value=\"cn\">China</option><option value=\"cx\">Christmas Island</option><option value=\"cc\">Cocos (Keeling) Islands</option><option value=\"co\">Colombia</option><option value=\"km\">Comoros</option><option value=\"cg\">Congo</option><option value=\"cd\">Congo, The Democratic Republic of the</option><option value=\"ck\">Cook Islands</option><option value=\"cr\">Costa Rica</option><option value=\"hr\">Croatia</option><option value=\"cu\">Cuba</option><option value=\"cy\">Cyprus</option><option value=\"cz\">Czech Republic</option><option value=\"dk\">Denmark</option><option value=\"dj\">Djibouti</option><option value=\"dm\">Dominica</option><option value=\"do\">Dominican Republic</option><option value=\"tp\">East Timor</option><option value=\"ec\">Ecuador</option><option value=\"eg\">Egypt</option><option value=\"sv\">El Salvador</option><option value=\"gq\">Equatorial Guinea</option><option value=\"er\">Eritrea</option><option value=\"ee\">Estonia</option><option value=\"et\">Ethiopia</option><option value=\"fk\">Falkland Islands</option><option value=\"fo\">Faroe Islands</option><option value=\"fj\">Fiji</option><option value=\"fi\">Finland</option><option value=\"cs\">Former Czechoslovakia</option><option value=\"su\">Former USSR</option><option value=\"fr\">France</option><option value=\"fx\">France (European Territory)</option><option value=\"gf\">French Guyana</option><option value=\"tf\">French Southern Territories</option><option value=\"ga\">Gabon</option><option value=\"gm\">Gambia</option><option value=\"ge\">Georgia</option><option value=\"de\">Germany</option><option value=\"gh\">Ghana</option><option value=\"gi\">Gibraltar</option><option value=\"gb\">Great Britain</option><option value=\"gr\">Greece</option><option value=\"gl\">Greenland</option><option value=\"gd\">Grenada</option><option value=\"gp\">Guadeloupe (French)</option><option value=\"gu\">Guam (USA)</option><option value=\"gt\">Guatemala</option><option value=\"gn\">Guinea</option><option value=\"gw\">Guinea Bissau</option><option value=\"gy\">Guyana</option><option value=\"ht\">Haiti</option><option value=\"hm\">Heard and McDonald Islands</option><option value=\"va\">Holy See (Vatican City State)</option><option value=\"hn\">Honduras</option><option value=\"hk\">Hong Kong</option><option value=\"hu\">Hungary</option><option value=\"is\">Iceland</option><option value=\"in\">India</option><option value=\"id\">Indonesia</option><option value=\"ir\">Iran</option><option value=\"iq\">Iraq</option><option value=\"ie\">Ireland</option><option value=\"il\">Israel</option><option value=\"it\">Italy</option><option value=\"ci\">Ivory Coast (Cote DIvoire)</option><option value=\"jm\">Jamaica</option><option value=\"jp\">Japan</option><option value=\"jo\">Jordan</option><option value=\"kz\">Kazakhstan</option><option value=\"ke\">Kenya</option><option value=\"ki\">Kiribati</option><option value=\"kw\">Kuwait</option><option value=\"kg\">Kyrgyz Republic (Kyrgyzstan)</option><option value=\"la\">Laos</option><option value=\"lv\">Latvia</option><option value=\"lb\">Lebanon</option><option value=\"ls\">Lesotho</option><option value=\"lr\">Liberia</option><option value=\"ly\">Libya</option><option value=\"li\">Liechtenstein</option><option value=\"lt\">Lithuania</option><option value=\"lu\">Luxembourg</option><option value=\"mo\">Macau</option><option value=\"mk\">Macedonia</option><option value=\"mg\">Madagascar</option><option value=\"mw\">Malawi</option><option value=\"my\">Malaysia</option><option value=\"mv\">Maldives</option><option value=\"ml\">Mali</option><option value=\"mt\">Malta</option><option value=\"mh\">Marshall Islands</option><option value=\"mq\">Martinique (French)</option><option value=\"mr\">Mauritania</option><option value=\"mu\">Mauritius</option><option value=\"yt\">Mayotte</option><option value=\"mx\">Mexico</option><option value=\"fm\">Micronesia</option><option value=\"md\">Moldavia</option><option value=\"mc\">Monaco</option><option value=\"mn\">Mongolia</option><option value=\"ms\">Montserrat</option><option value=\"ma\">Morocco</option><option value=\"mz\">Mozambique</option><option value=\"mm\">Myanmar</option><option value=\"na\">Namibia</option><option value=\"nr\">Nauru</option><option value=\"np\">Nepal</option><option value=\"nl\">Netherlands</option><option value=\"an\">Netherlands Antilles</option><option value=\"nc\">New Caledonia (French)</option><option value=\"nz\">New Zealand</option><option value=\"ni\">Nicaragua</option><option value=\"ne\">Niger</option><option value=\"ng\">Nigeria</option><option value=\"nu\">Niue</option><option value=\"nf\">Norfolk Island</option><option value=\"kp\">North Korea</option><option value=\"mp\">Northern Mariana Islands</option><option value=\"no\">Norway</option><option value=\"om\">Oman</option><option value=\"pk\">Pakistan</option><option value=\"pw\">Palau</option><option value=\"pa\">Panama</option><option value=\"pg\">Papua New Guinea</option><option value=\"py\">Paraguay</option><option value=\"pe\">Peru</option><option value=\"ph\">Philippines</option><option value=\"pn\">Pitcairn Island</option><option value=\"pl\">Poland</option><option value=\"pf\">Polynesia (French)</option><option value=\"pt\">Portugal</option><option value=\"pr\">Puerto Rico</option><option value=\"qa\">Qatar</option><option value=\"re\">Reunion (French)</option><option value=\"ro\">Romania</option><option value=\"ru\">Russian Federation</option><option value=\"rw\">Rwanda</option><option value=\"gs\">S. Georgia &amp; S. Sandwich Isls.</option><option value=\"sh\">Saint Helena</option><option value=\"kn\">Saint Kitts &amp; Nevis Anguilla</option><option value=\"lc\">Saint Lucia</option><option value=\"pm\">Saint Pierre and Miquelon</option><option value=\"st\">Saint Tome (Sao Tome) and Principe</option><option value=\"vc\">Saint Vincent &amp; Grenadines</option><option value=\"ws\">Samoa</option><option value=\"sm\">San Marino</option><option value=\"sa\">Saudi Arabia</option><option value=\"sn\">Senegal</option><option value=\"sc\">Seychelles</option><option value=\"sl\">Sierra Leone</option><option value=\"sg\">Singapore</option><option value=\"sk\">Slovak Republic</option><option value=\"si\">Slovenia</option><option value=\"sb\">Solomon Islands</option><option value=\"so\">Somalia</option><option value=\"za\">South Africa</option><option value=\"kr\">South Korea</option><option value=\"es\">Spain</option><option value=\"lk\">Sri Lanka</option><option value=\"sd\">Sudan</option><option value=\"sr\">Suriname</option><option value=\"sj\">Svalbard and Jan Mayen Islands</option><option value=\"sz\">Swaziland</option><option value=\"se\">Sweden</option><option value=\"ch\">Switzerland</option><option value=\"sy\">Syria</option><option value=\"tj\">Tadjikistan</option><option value=\"tw\">Taiwan</option><option value=\"tz\">Tanzania</option><option value=\"th\">Thailand</option><option value=\"tg\">Togo</option><option value=\"tk\">Tokelau</option><option value=\"to\">Tonga</option><option value=\"tt\">Trinidad and Tobago</option><option value=\"tn\">Tunisia</option><option value=\"tr\">Turkey</option><option value=\"tm\">Turkmenistan</option><option value=\"tc\">Turks and Caicos Islands</option><option value=\"tv\">Tuvalu</option><option value=\"ug\">Uganda</option><option value=\"ua\">Ukraine</option><option value=\"ae\">United Arab Emirates</option><option value=\"uk\">United Kingdom</option><option value=\"uy\">Uruguay</option><option value=\"um\">USA Minor Outlying Islands</option><option value=\"uz\">Uzbekistan</option><option value=\"vu\">Vanuatu</option><option value=\"ve\">Venezuela</option><option value=\"vn\">Vietnam</option><option value=\"vg\">Virgin Islands (British)</option><option value=\"vi\">Virgin Islands (USA)</option><option value=\"wf\">Wallis and Futuna Islands</option><option value=\"eh\">Western Sahara</option><option value=\"ye\">Yemen</option><option value=\"yu\">Yugoslavia</option><option value=\"zr\">Zaire</option><option value=\"zm\">Zambia</option><option value=\"zw\">Zimbabwe</option></select>
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar vlt bold width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Application Purpose:</td>
			<td class=\"al vlt\" colspan=\"2\">
				<p><input type=\"radio\" name=\"pc3$g\" value=\"P1\" checked=\"checked\" />P1: Business use for profit</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"P2\" />P2: Non-profit business</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"P3\" />P3: Personal use</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"P4\" />P4: Educational purposes</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"P5\" />P5: Government purposes</p>
				<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" /><input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
			</td>
		</tr>
		";
	break;
	case "asia":
		$row2.= "
		<tr class=\"$dlcolor\">
			<td class=\"ar vlt bold width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Entity Type:</td>
			<td class=\"al vlt\" colspan=\"2\">
				<p><input type=\"radio\" name=\"pc1$g\" value=\"corporation\" checked=\"checked\" />Corporations or Companies</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"cooperative\" />Cooperatives</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"partnership\" />Partnerships or Collectives</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"government\" />Government Bodies</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"politicalParty\" />Political parties or Trade Unions</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"society\" />Trusts, Estates, Associations or Societies</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"institution\" />Institutions</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"naturalPerson\" />Natural Persons</p>
				<p><input type=\"radio\" name=\"pc1$g\" value=\"other\" />Other</p>
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm bold width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Country:</td>
			<td class=\"al vlt\" colspan=\"2\">
				<select name=\"pc2$g\"><option value=\"af\">Afghanistan</option><option value=\"aq\">Antarctica</option><option value=\"am\">Armenia</option><option value=\"au\">Australia</option><option value=\"az\">Azerbaidjan</option><option value=\"bh\">Bahrain</option><option value=\"bd\">Bangladesh</option><option value=\"bt\">Bhutan</option><option value=\"bn\">Brunei Darussalam</option><option value=\"kh\">Cambodia, Kingdom of</option><option value=\"cn\">China</option><option value=\"cc\">Cocos (Keeling) Islands</option><option value=\"ck\">Cook Islands</option><option value=\"cy\">Cyprus</option><option value=\"fj\">Fiji</option><option value=\"ge\">Georgia</option><option value=\"hm\">Heard and McDonald Islands</option><option value=\"in\">India</option><option value=\"id\">Indonesia</option><option value=\"ir\">Iran</option><option value=\"iq\">Iraq</option><option value=\"il\">Israel</option><option value=\"jp\">Japan</option><option value=\"jo\">Jordan</option><option value=\"kz\">Kazakhstan</option><option value=\"ki\">Kiribati</option><option value=\"kw\">Kuwait</option><option value=\"kg\">Kyrgyz Republic (Kyrgyzstan)</option><option value=\"la\">Laos</option><option value=\"lb\">Lebanon</option><option value=\"mo\">Macao</option><option value=\"my\">Malaysia</option><option value=\"mv\">Maldives</option><option value=\"mh\">Marshall Islands</option><option value=\"fm\">Micronesia</option><option value=\"mn\">Mongolia</option><option value=\"mm\">Myanmar</option><option value=\"nr\">Nauru</option><option value=\"np\">Nepal</option><option value=\"nz\">New Zealand</option><option value=\"nu\">Niue</option><option value=\"nf\">Norfolk Island</option><option value=\"kp\">North Korea</option><option value=\"om\">Oman</option><option value=\"pk\">Pakistan</option><option value=\"pw\">Palau</option><option value=\"ps\">Palestinian Territories</option><option value=\"pg\">Papua New Guinea</option><option value=\"ph\">Philippines</option><option value=\"qa\">Qatar</option><option value=\"ws\">Samoa</option><option value=\"sa\">Saudi Arabia</option><option value=\"sg\">Singapore</option><option value=\"sb\">Solomon Islands</option><option value=\"kr\">South Korea</option><option value=\"lk\">Sri Lanka</option><option value=\"sy\">Syria</option><option value=\"tw\">Taiwan</option><option value=\"tj\">Tajikistan</option><option value=\"th\">Thailand</option><option value=\"tl\">Timor-Leste</option><option value=\"tk\">Tokelau</option><option value=\"to\">Tonga</option><option value=\"tr\">Turkey</option><option value=\"tm\">Turkmenistan</option><option value=\"tv\">Tuvalu</option><option value=\"ae\">United Arab Emirates</option><option value=\"uz\">Uzbekistan</option><option value=\"vu\">Vanuatu</option><option value=\"vn\">Vietnam</option><option value=\"ye\">Yemen</option></select>
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar vlt bold width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Form of Identity:</td>
			<td class=\"al vlt\" colspan=\"2\">
				<p><input type=\"radio\" name=\"pc3$g\" value=\"certificate\" checked=\"checked\" />Certificate of Incorporation</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"legislation\" />Act, decree or legislation chartering the formation of an entity</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"societyRegistry\" />Societies Registry or equivalent registry for non-corporate entities</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"politicalPartyRegistry\"/ >Political Parties Registry</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"passport\" />Passport or Citizenship ID</p>
				<p><input type=\"radio\" name=\"pc3$g\" value=\"other\" />Other</p>
			<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" /><input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
			</td>
		</tr>
		<tr class=\"$dlcolor\">
			<td class=\"ar vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Form of Identity ID Number</td>
			<td colspan=\"2\"><input type=\"text\" name=\"pc4$g\" class=\"width-75\" /></td>
		</tr>
		";
	break;
	case "de":
		$row2.="
		<tr class=\"$dlcolor\">
		<td class=\"al vlm width-20\" nowrap=\"nowrap\">
			<strong class=\"bold red\">*</strong>I certify that the Admin Contact is a resident of Germany&nbsp;
			<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" />
			<input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
		</td>
		<td colspan=\"2\"><p><input type=\"checkbox\" name=\"pc1$g\" value=\"DE\" />&nbsp;</p></td>
		</tr>


		";
	break;
	case "it":

		$row2.="
		<tr class=\"$dlcolor\">
			<td class=\"al vlt\" colspan=\"3\">
				<p style=\"text-align:justify\"><input type=\"checkbox\" name=\"pc1$g\" value=\"YES\" style=\"background-repeat:no-repeat;\" /><strong class=\"bold red\">*</strong>YES: I agree and acknowledge to the special renewal and expiration terms set forth for this domain name, including those terms set forth in the Registration Agreement. I understand that this domain name must be renewed PRIOR to the EXPIRATION DATE or this domain will be deleted from my account. If the deadline has passed and you have not renewed the domain, no modifications will be allowed for this domain and this domain will continue to resolve until deleted by the registry.</p>
				<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" />
				<input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
			</td>
		</tr>";
	break;
	case "eu":
		$row2.="
		<tr class=\"$dlcolor\">
			<td class=\"al vlm width-20\" nowrap=\"nowrap\">
				<p><input type=\"checkbox\" name=\"pc3$g\" value=\"I AGREE\" /><strong class=\"bold red\">*</strong>Do you agree to the Registry Data Transfer Policy?&nbsp;</p>
			</td>
			<td colspan=\"2\">[<a href=\"#\" title=\"More Info\" onclick='window.open(\"$base/eupop.php?section=3\",\"viewer\",\"width=545,height=370,status=yes,scrollbars=1,resizable=1\");return false;'>?</a>]</td>
		</tr>

		<tr class=\"$dlcolor\">
			<td class=\"al vlm width-20\" nowrap=\"nowrap\">
				<p><input type=\"checkbox\" name=\"pc1$g\" class=\"formfield\" value=\"YES\" /><strong class=\"bold red\">*</strong>Do you agree to deletion rules/privacy policies for this domain?&nbsp;</p>
				<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" />
				<input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
			</td>
			<td colspan=\"2\">[<a href=\"#\" title=\"More Info\" onclick='window.open(\"$base/eupop.php?section=1\",\"viewer\",\"width=545,height=370,status=yes,scrollbars=1,resizable=1\");return false;'>?</a>]</td>
		</tr>

		<tr class=\"$dlcolor\">
			<td class=\"al vlm width-20\" nowrap=\"nowrap\"><strong class=\"bold red\">*</strong>Language for ADR?&nbsp;<select name=\"pc2$g\" class=\"width-60\"><option value=\"cs\">Czech</option><option value=\"da\">Danish</option><option value=\"de\">German</option><option value=\"el\">Greek</option><option value=\"en\" selected=\"selected\">English</option><option value=\"es\">Spanish</option><option value=\"et\">Estonian</option><option value=\"fi\">Finnish</option><option value=\"fr\">French</option><option value=\"hu\">Hungarian</option><option value=\"it\">Italian</option><option value=\"li\">Lithuanian</option><option value=\"lv\">Latvian</option><option value=\"mt\">Maltese</option><option value=\"nl\">Dutch</option><option value=\"pl\">Polish</option><option value=\"pt\">Portugese</option><option value=\"sk\">Slovak</option><option value=\"sl\">Slovenian</option><option value=\"sv\">Swedish</option></select></td>
			<td colspan=\"2\">[<a href=\"#\" title=\"More Info\" onclick='window.open(\"$base/eupop.php?section=2\",\"viewer\",\"width=545,height=370,status=yes,scrollbars=1,resizable=1\");return false;'>?</a>]</td>
		</tr>
		<tr class=\"$dlcolor\">
		<td class=\"al vlt width-20\" colspan=\"3\">
			<div class=\"underline bold\">Notice:</div>
			Before applying for a domain name, any prospective .eu registrant must verify that the general eligibility criteria set out by EURid are met. Specifically, a registrant of a .eu domain name must be:
			<ol class=\"circle\">
			<li>an undertaking having its registered office, central administration or principal place of business within the EU; </li>
			<li>an organisation established within the EU without prejudice to the application of national law; or </li>
			<li>a natural person resident within the EU.</li>
			</ol>
			Your Domain Profile <strong><u>MUST</u></strong> reflect the above requirements or your registration will be denied.
		</td>
		</tr>";
	break;
	case "pro":
		$row2.="
		<tr class=\"$dlcolor\">
		<td class=\"al vlm width-20\" nowrap=\"nowrap\">
			<strong class=\"bold red\">*</strong>Indicated professional association recognized by government body&nbsp;
			<input type=\"hidden\" name=\"CartID$g\" value=\"$row[cartId]\" />
			<input type=\"hidden\" name=\"CartType$g\" value=\"preconfig\" />
		</td>
		<td colspan=\"2\"><input type=\"text\" name=\"pc1$g\" class=\"width-75\" /></td>
		</tr>
		<tr class=\"$dlcolor\">
			<td colspan=\"3\" class=\"al small\">Note: .PRO domains become immediately active on registration. Add your licensed profession. Must be recognized by a government body.</td>
		</tr>";
	break;
	
}
?>