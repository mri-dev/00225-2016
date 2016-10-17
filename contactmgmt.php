<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead"><?=PMGMTTITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
        <?=$dmsg?>
		<?php if (!$clientportal) { ?>
        <table class="width-99 alc">
            <tr>
                <td class="width-20 vlt"><?=$umenu?></td>
                <td class="width-1">&nbsp;</td>
                <td class="width-100 vlt">
                    <!-- user menu /s -->
		<?php } ?>
                    <!-- start total records row -->
                    <form method="post" name="uipp" class="zeroPadding" action="contactmgmt.php">
                    <table class="totalRecords width-100">
                    	<tr>
                    		<td class="al"><?=TOTALRECS?>: <?=$total_records?>&nbsp;<a class="action-btn" href="contactmgmt.php?addnew=1"><?=ADDCONTACT?> <i class="fa fa-user"></i></a></td>
                    		<td class="ar"><select name="setipp" class="formlogin" onchange="document.uipp.submit()"><?=$uipp?></td>
                    	</tr>
                    </table>
                    </form>
                    <div style="height:10px; clear:both;"></div>
                    <!-- end total records row -->
					<?=$boxtop?>
					<table class="width-100 data"><tr><td class="boxtitle"><?=$domainlist?></table>
					<?=$boxbottom?>
                    <?=$domainblist?>
		<?php if (!$clientportal) { ?>
                    <!-- user menu /e -->
				</td>
			</tr>
		</table>
		<?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
