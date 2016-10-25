<?php

// Detect that we can call this script at all
if ($domainstateid != "3" || empty($declid)) {
	header('Location: DomainMain.php');
	exit;
}
?>
<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=DOMAINMAINTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
		<?=$dmsg?>
		<?php if($declstatus != "ok") {
		?>
		<table class="width-99 alc">
			<tr>
				<td class="width-20 vlt"><div id="uvmenu"><div class="TabTitleBar"><?=MANAGEDOMAINMENU?></div><ul><?php include(WORKDIR."/templates/common_files/$registrar/menu.php"); ?></ul></div></td>
				<td class="width-1">&nbsp;</td>
				<td class="width-100 vlt">
					<div class="regsitrarLeft">
					<div class="TabTitleBar">&nbsp;<?=DOMAIN?>:&nbsp;<?=$cSld?>.<?=$cTld?>&nbsp;&nbsp;<small>[<a href="DomainMain.php?cSld=<?=$cSld?>&amp;cTld=<?=$cTld?>" class="TipStyle" title="<?=TIPINFOTEXT?>" rel="<?=DOMAINMANAGEMENTBLURB?>"><?=MANAGE?></a>]</small></div>
					<div class="regsitrarLeftContents">
					<!---->
					<form method="post" action="DomainDecl.php" name="sdform" id="sdform" class="awform" onsubmit="submitonce(this);showObject(false,true);">
					<input type="hidden" name="action" value="senddeclaration" />
					<input type="hidden" name="declid" value="<?=$declid?>" />
					<fieldset>
					<legend><?=DOMDECLARATION?></legend>
					<table class="width-100">
						<tr>
							<td class="ac vlm bold"><p class="width-30 ac"><textarea name="decltext" rows="10" cols="70"><?=$decltext?></textarea></p></td>
						</tr>
						<tr>
							<td class="ac vlm bold"><div align="center"><p class="width-30 ac"><img src="data:image/png;base64,<?=$declcaptcha?>" /><input type="text" name="declcaptcha" /></p></div></td>
						</tr>
						<tr>
							<td class="ac vlm bold"><input type="submit" name="Submit" value="<?=DMSAVE?>" /></td>
						</tr>
					</table>
					</fieldset>
					</form>
					<!---->
					</div>
					</div>
				</td>
			</tr>
		</table>
		<?php
		}
		?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
