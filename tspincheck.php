<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
   <tr>
      <td id="tablehead"><h1><?=TRANSFERTITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
         <?php
            if($dmsg3){
            	echo("<div class=\"error\">".strip_tags($dmsg3,"<br /><br /><div><hr /><hr /><center></center></div><li></li><ol></ol><ul></ul>")."</div>");
            }
            ?>
         <p class="bold"><?=THANKYOUBLURB?> <?=$companyname?>!</p>
         <form action="cart.php" method="post" name="myform" onsubmit="submitonce(this); showObject(false,true);">
            <?=$hiddeninc?>
            <div class="underline bold"><?=TRANSFERAVAILABILITY?></div>
            <?=$boxtop?>
            <table class="width-100 data">
               <tr>
                  <td class="boxtitle"><span class="boxlegend">&nbsp;<?=SPINCSELECT?>&nbsp;</span></td>
                  <td class="boxtitle"><span class="boxlegend">&nbsp;<?=SPINCDOMAIN?>&nbsp;</span></td>
                  <td class="boxtitle"><span class="boxlegend">&nbsp;<?=SPINCSTATUS?>&nbsp;</span></td>
                  <td class="boxtitle ac"><span class="boxlegend"><?=SPINCPRICE?></span></td>
               </tr>
               <?=$row1?>
               <tr>
                  <td colspan="4" class="ac btn-line">
                     <input type="submit" name="Submit" value="<?=ADDTOCART?>" />
										 <?php if($_GET[hwplan]){ ?>
	                   <input type="button" onclick="toURL('<?=$base?>/hsignup.php?plan=<?=$_GET[hwplan];?>')" value="<?=SEARCHAGAIN?>" /><br />
	                   <?php }else if($_GET[dsplan]){?>
	                   <input type="button" onclick="toURL('<?=$base?>/hsignup.php?pt=ds&plan=<?=$_GET[dsplan];?>')" value="<?=SEARCHAGAIN?>" /><br />
	                   <?php }else{ ?>
	                   <input type="button" onclick="toURL('<?=$base?>/transcheck.php')" value="<?=SEARCHAGAIN?>" /><br />
	                   <?php } ?>
                  </td>
               </tr>
            </table>
            <?=$boxbottom?>
         </form>
         <br />
         <?=$boxtop?>
         <table class="width-100 data">
            <tr>
               <td colspan="2" class="boxtitle"><span class="boxlegend"><?=SPINLEGEND?></span></td>
            </tr>
            <tr>
               <td>
                  <img src="templates/<?=$templatedir?>/images/redx.gif" alt="&nbsp;" /> <?=DOMAINNAVAIL?> &nbsp;&nbsp;&nbsp;
									<img src="templates/<?=$templatedir?>/images/g_yellow_on.gif" alt="&nbsp;" /> <?=WHOISERROR?>
               </td>
            </tr>
         </table>
         <?=$boxbottom?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
