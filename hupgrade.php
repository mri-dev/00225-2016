<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="hosting-upgrade-page">
   <tr>
      <td id="tablehead"><h1><?=HUPGRADETITLE?> <?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
         <?php if($dmsg!=""){ echo $dmsg;} ?>
         <p class="al bold p-5"><?=HUPGRADEBLURB?></p>
         <div>
            <h3 class="underline bold"><?=HUPGRADETITLE?></h3>
            <?=HUPGRADEBOXTITLE?>
         </div>
         <br />
         <?=$content?>
         <p class="ac bold"><a href="<?=$securebase?>/hmanage.php" class="rtrntomgmt"><?=CANCELCLICK?></a></p>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
