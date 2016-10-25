<li><a href="manage.php"><?=MYDOMAINS?></a></li>
<li><a href="DomainMain.php"><?=MANAGEHOME?></a></li>
<li><a href="DomainContacts.php"><?=CONTACTINFOLINK?></a></li>
<li><a href="DomainNs.php"><?=CHANGENAMESERVERSLINK?></a></li>
<?php

if ($domainstateid == "3" && !empty($declid)) {
        // Detect the declaration was asked
        if ($declid == "9999999999") {
		?>
		<li><a href="DomainDecl.php"><?=SIGNONLINELINK?></a></li>
		<?php
        // Detect it's id and determine the state
        } elseif ($declstate != "2") {
		?>
		<li><a href="DomainDecl.php"><?=SIGNONLINELINK?></a></li>
		<?php
        }
}

if ($domainstateid == "3" || $domainstateid == "34" || $domainstateid == "9" || $domainstateid == "25") {
		?>
		<li><a href="DomainDoc.php"><?=UPLOADDOCSLINK?></a></li>
		<?php
}

?>
