<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><h1><?=$hostingtitle?>&nbsp;<?=$help_icon?></h1></td>
	</tr>
    <tr>
		<td id="mainTD">
        <div class="underline"><?=DSHOSTINGBLURB?></div>
				<?=$hostingtable?>
        </td>
    </tr>
</table>
<?php if(file_exists("templates/$templatedir/includes/dshosting_include.php")){ include("templates/$templatedir/includes/dshosting_include.php"); } ?>
<!-- Contents /e -->
<?=$bottom?>
