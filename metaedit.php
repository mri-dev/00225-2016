<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData">
   <tr>
      <td id="tablehead">
         <h1><?=METAEDITTITLE?>&nbsp;<?=$help_icon?></h1>
      </td>
   </tr>
   <tr>
      <td id="mainTD">
         <?=$dmsg?>
         <form action="metaedit.php" method="post" class="awform">
            <input type="hidden" name="action" value="save" />
            <input type="hidden" name="hostid" value="<?=$hostid?>" />
            <input type="hidden" name="domainnameid" value="<?php echo $domainnameid; ?>" />
            <?=$boxtop?>
            <fieldset>
               <legend><span class="boxlegend"><?=$cSld?>.<?=$cTld?></span></legend>
               <table class="width-100">
                  <tr>
                     <td class="ar vlt width-35 bold"><?=METATITLE?>&nbsp;</td>
                     <td class="al vlt width-65">
                        <span>(100 <?=CHARACTERS?>)</span>
                        <span><input maxlength="100" size="40" type="text" name="titlebar1" value="<?=$titlebar1?>" class="width-75" /></span>
                     </td>
                  </tr>
                  <tr>
                     <td class="ar vlt width-35 bold">
                        <?=METAKEYWORDS?>&nbsp;<br />(250 <?=CHARACTERS?>)&nbsp;<br /><?=KEYWORDSINST?>&nbsp;
                     </td>
                     <td class="al vlt width-65"><textarea name="keywords1" cols="30" rows="5" class="width-75"><?=$keywords1?></textarea></td>
                  </tr>
                  <tr>
                     <td class="ar vlt width-35 bold">
                        <?=METADESCRIPTION?>&nbsp;<br />(250 <?=CHARACTERS?>)&nbsp;
                     </td>
                     <td class="al vlt width-65"><textarea name="sitedescription1" cols="30" rows="5" class="width-75"><?=$sitedescription1?></textarea></td>
                  </tr>
                  <tr>
                     <td class="ac vlm bold" colspan="2"><?=DESCINST?></td>
                  </tr>
                  <tr>
                     <td class="ac vlm bold" colspan="2"><input type="submit" name="submit" value="Save Changes" /></td>
                  </tr>
               </table>
            </fieldset>
            <?=$boxbottom?>
         </form>
         <p class="ac bold"><a href="<?=$base?>/DomainMain.php" class="rtrntomgmt"><?=RETURNTOMANAGE?></a></p>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
