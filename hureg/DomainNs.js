function fnSelectNS() {
	var strDNS = ""
	if (document.form1.UseNameserver.value == "custom") {
		for (var i=0; i < document.form1.length; i++) {
			strDNS = document.form1.elements[i].id
			if (strDNS.indexOf("dns") != -1) {
				document.form1.elements[i].disabled = false;
				KillClass(document.form1.elements[i],'disabledInput');				
			}
		}
		document.form1.dns[1].focus()
	} else {
		for (var i=0; i < document.form1.length; i++) {
			strDNS = document.form1.elements[i].id
			if (strDNS.indexOf("dns") != -1) {
				document.form1.elements[i].disabled = true;
				document.form1.elements[i].value = "";
				AddClass(document.form1.elements[i],'disabledInput');
			}
		}
	}
	return true
}