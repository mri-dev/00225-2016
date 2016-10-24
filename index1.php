<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div class="homepage base-content">
	<!-- Reklám box -->
	<?php require_once(WORKDIR."/templates/$templatedir/templates/home_adv_block.php"); ?>
	<!-- - Reklám box -->

	<div class="page-holder">
		<!-- Domain search -->
		<?php require_once(WORKDIR."/templates/$templatedir/templates/home_domain_search.php"); ?>
		<!-- END: Domain search -->
	</div>

	<!-- VMWare Packs -->
	<?php require_once(WORKDIR."/templates/$templatedir/templates/home_vmware_packs.php"); ?>
	<!-- END: VMWare Pack -->

	<!-- Infoblock -->
	<?php require_once(WORKDIR."/templates/$templatedir/templates/home_info_blocks.php"); ?>
	<!-- END: Infoblock -->
</div>
<!-- Contents /e -->
<?=$bottom?>
