<?php if($idpactive==1){ ?>
<?php if($f6_state==1){ ?>
<li><a href="DomainMain.php?action=idptoggle&amp;cSld=<?php echo $cSld; ?>&amp;cTld=<?php echo $cTld; ?>" class="IDPon"><?=IDPROTECTED?></a></li>
<?php }else{ ?>
<li><a href="DomainMain.php?action=idptoggle&amp;cSld=<?php echo $cSld; ?>&amp;cTld=<?php echo $cTld; ?>" class="IDPoff"><?=IDNPROTECTED?></a></li>
<?php } } ?>
<li><a href="manage.php"><?=MYDOMAINS?></a></li>
<li><a href="DomainMain.php"><?=MANAGEHOME?></a></li>
<?php if ($reglocked!=2){
echo "<li><a href=\"DomainContacts.php\">".CONTACTINFOLINK."</a></li>";
echo "<li><a href=\"DomainNs.php\">".CHANGENAMESERVERSLINK."</a></li>";
echo "<li><a href=\"nsmaint.php\">".NAMESERVERSLINK."</a></li>";
if($f1_state == 1){
echo "<li><a href=\"emailmgmt.php\">".EMAILFORLINK."</a></li>";
}
if($f2_state == 1){
echo "<li><a href=\"dnsmgmt.php\">".URLFWD."</a></li>";
}
}
?>
