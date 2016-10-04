   </td>
    </tr>
</table>
</div>
</div>

<div id="bottom_bg">
  <div class="footer-features-images">
    <div class="page-holder">
      <img src="templates/<?=$templatedir?>/images/ripemember.gif" width="50" height="50" >
      <img src="templates/<?=$templatedir?>/images/huregmember.jpg" width="140" height"40" >
      <img src="templates/<?=$templatedir?>/images/cpanelreseller.jpg">
      <img src="templates/<?=$templatedir?>/images/rapidsslmember.gif">
      <img src="templates/<?=$templatedir?>/images/payu_logo_left.png">
    </div>
  </div>
  <div class="bottom" align="center">
      <div class="page-holder">
        <div class="row">
          <div class="col-md-2">
            <div class="logostr">
              <div class="company-name">
                <strong>Server</strong>Land
              </div>
              <div class="slogan">webhosting serverhosting</div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="forlinks">
                <a href="<?=$base?>/index.php"><?=BMENU1?></a>
                <span class="sep">|</span>
                <?php if ($_SESSION['t']!=2) { ?><a href="<?=$base?>/hosting.php"><?=BMENU2?></a>
                <span class="sep"></span>
                <?php }else{?><a href="<?=$base?>/pricingfull.php"><?=BMENU8?></a>
                <span class="sep">|</span>
                <?php } ?>
                <a href="<?=$base?>/check.php"><?=BMENU3?></a>
                <span class="sep">|</span>
                <a href="<?=$base?>/support.php"><?=BMENU5?></a>
                <span class="sep">|</span>
                <?php if ($LoggedIn== "1"){ ?>
                <a href="<?=$securebase?>/LogOut.php"><?=BMENU10?></a>
                <span class="sep">|</span>
                <a href="<?=$securebase?>/welcome.php" ><?=BMENU9?></a>
                <span class="sep">|</span>
                <?php } else { ?>
                <a href="<?=$securebase?>/aLogIn.php"><?=LMENU5?></a>
                <span class="sep">|</span>
                <a href="<?=$securebase?>/createacct.php"><?=BMENU4?></a>
                <span class="sep">|</span>
                <?php } ?>
                <a href="<?=$base?>/terms.php"><?=BMENU11?></a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="contact-list">
              <div>Telefon: <span class="value"><?php echo $this->data['companyphone']; ?></span></div>
              <div>Fax: <span class="value"><?php echo $this->data['companyfax']; ?></span></div>
              <div>Levelezési cím: <span class="value"><?php echo $this->data['companyzip']; ?> <?php echo $this->data['companycity']; ?>, <?php echo $this->data['companyaddress1']; ?></span></div>
              <div>Ügyfélszolgálati idő: <span class="value">Munkanap 9:00-tól 17:00-ig</span></div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="footer"><div class="page-holder"><div class="copyright"><?=COPYRIGHT?></div></div></div>
</div>

<?php
//do not remove the below!!
if($_SESSION[newuid] != $_SESSION[adminuser] and trim($_SESSION[adminuser]) != "") { ?>
<div id="watermarklogo" style="position:absolute;"></div>
<script type="text/javascript" src="js/staticlogo.js"></script>
<?php }?>
<script type="text/javascript" src="js/dw_event.js"></script>
<script type="text/javascript" src="js/dw_viewport.js"></script>
<script type="text/javascript" src="js/dw_tooltip.js"></script>
<?=$dynamicconverterlink?>
</body>
</html>
