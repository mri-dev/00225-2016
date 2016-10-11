<?=$boxtop?>
<div class="cart-summary-container">
  <h3><?=ORDERSUMMARYTITLE?></h3>
  <table class="width-100" style="height:140px">
      <tr>
          <td class="ar bold"><?=SETUPFEES?>:</td>
          <td class="ar width-10" nowrap="nowrap"><?=$setup_fees?></td>
      </tr>
      <tr>
          <td class="ar bold"><?=EXTRAS?>:</td>
          <td class="ar width-10" nowrap="nowrap"><?=$total_echarge?></td>
      </tr>
      <tr>
          <td class="ar bold green"><?=DISCOUNTS?>:</td>
          <td class="ar width-10 green" nowrap="nowrap"><?=$total_discount?></td>
      </tr>
      <tr>
          <td class="ar bold blue"><?=SUBTOTAL?>:</td>
          <td class="ar width-10 blue" nowrap="nowrap"><?=$total_charge?></td>
      </tr>
      <tr>
          <td class="ar" colspan="3">
            <a class="submitCart" href="<?=$base?>/cart.php?ca=checkout" title="<?=CHECKOUTALT?>"><?=PRTCKOUT?></a>
          </td>
      </tr>
  </table>
</div>
<?=$boxbottom?>
