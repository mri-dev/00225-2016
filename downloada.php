<?=$header?>
<?=$top?>
<!-- Contents /s -->	
<table id="mainData">
	<tr>
		<td id="tablehead"><?=OMANAGETITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
			<?=$dmsg?>
            <?php if ($edit != ""){ ?>
 		<?php if (!$clientportal) { ?>
               <table class="width-99 alc">
                    <tr>
                        <td class="width-20 vlt"><?=$umenu?></td>
                        <td class="width-1">&nbsp;</td>
                        <td class="width-100 vlt">
                        <!-- user menu /s -->            
		<?php } ?>
                        <?=$form1?>
						<div class="ac"><a href="downloada.php" class="rtrntomgmt"><?=RETURNTODOWNLOAD?></a></div>
		<?php if (!$clientportal) { ?>
                        <!-- user menu /e -->				
                        </td>
                    </tr>
                </table> 
		<?php } ?>
            <?php }else{ ?>
		<?php if (!$clientportal) { ?>
                <table class="width-99 alc">
                    <tr>
                        <td class="width-20 vlt"><?=$umenu?></td>
                        <td class="width-1">&nbsp;</td>
                        <td class="width-100 vlt">
		<?php } ?>
             			<form action="downloada.php" method="post" name="theForm" class="awform">
<?=$boxtop?>
<fieldset><legend><span class="boxlegend"><?=DLCAT?></span></legend><table class="width-100"><tr><td class="ac"><select name="quicklink" class="width-20" onchange="openURL()"><?=$catlist?></select></td></tr></table></fieldset>
<?=$boxbottom?>
</form>           
                        <!-- user menu /s -->        
                        <!-- start total records row -->
                        <table class="totalRecords width-100"><tr><td class="al"><?=strip_tags($domaintlist,"<a></a>")?></td></tr></table>
                        <div style="height:10px; clear:both;"></div>
                        <!-- end total records row -->           
<?=$boxtop?>
<table class="width-100 data"><?=$domainlist?></table>
<?=$boxbottom?>
		<?php if (!$clientportal) { ?>
                        <!-- user menu /e -->				
                        </td>
                    </tr>
                </table>  
		<?php } ?>
            <?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>