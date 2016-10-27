<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead" class="ac">
         <h1><?=PPTHANKSTITLE?></h1>
      </td>
   </tr>
   <tr>
      <td id="mainTD">
         <h3 class="ac"><?=THANKYOU?></h3>
         <p class="ac p-5"><?=INVOICE?> <?=$inv_id?> <?=PSUCCESSBLURB?></p>
         <br />
         <form action="imanage.php" method="post" class="awform">
            <input type="hidden" name="id" value="<?=$inv_id?>" />
            <input type="hidden" name="action" value="pay_invoice" />
            <?=$boxtop?>
            <fieldset>
               <legend><span class="boxlegend"><?=ORDERSUM?></span></legend>
               <table class="width-100">
                  <tr>
                     <td class="ac red bold" colspan="2"><?=$malldomains?></td>
                  </tr>
                  <tr>
                     <td class="ac"><input type="submit" name="submit" value="<?=PROCEEDTOPAYMENT?>" /></td>
                  </tr>
               </table>
            </fieldset>
            <?=$boxbottom?>
         </form>
				 <hr>
         <p class="ac"><?=ORDEREMAIL?></p>
         <p class="ac"><?=THANKYOU?><br /><?=$companyname?></p>
         <p class="ac bold"><?=PPTHANKSAD?></p>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
