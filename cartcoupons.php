<?=$boxtop?>
<div class="cart-coupon-container">
  <h3><?=COUPONTITLE?></h3>
  <small><?=COUPONBLURB?></small>
  <div class="code">
    <form method="post" action="<?=$base?>/cart.php">
      <input type="text" size="20" name="cart_coupon" placeholder="<?=COUPONCODE?>" value="" class="width-100" />
      <input type="hidden" name="ca" value="cart_coupon" />
      <input type="hidden" name="numcart" value="<?=$i?>" />
      <input type="submit" value="<?=SETCOUPON?>" name="submit" />
    </form>
  </div>
</div>
<?=$boxbottom?>
