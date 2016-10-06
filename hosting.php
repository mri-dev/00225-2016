<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><h1><?=$hostingtitle?></h1><?=$help_icon?></td>
	</tr>
    <tr>
		<td id="mainTD">
        <div class="underline"><?=$hostingblurb?></div>
		<?=$hostingtable?>
		<?php if(file_exists("templates/common_files/includes/hosting_include.php") && $pt!="ds"){
	        include("templates/common_files/includes/hosting_include.php");
	    }else if(file_exists("templates/common_files/includes/ds_include.php") && $pt=="ds"){
       		include("templates/common_files/includes/ds_include.php");
	    } ?>
	    </td>
    </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
