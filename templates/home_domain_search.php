<div class="domain-searcher">
  <form method="post" action="<?=$base?>/spincheck.php" id="check" name="check" onsubmit="showObject(false,true);"><!--
 --><div class="form-wrapper search-input"><input type="text" maxlength="272" name="cSSld" id="cSSld" placeholder="Írja be a választott domain nevét"/></div><!--
 --><div class="form-wrapper search-list"><input autocomplate="off" list="end" name="ttld[]" size="4" placeholder="HU"/></div><!--
 --><div class="form-wrapper search-button"><button type="submit" class="keresgomb" name="Submit"/><i class="fa fa-search"></i> KERESÉS</div>
    <datalist id="end">
      <?php $tld_list=build_tlds("transfer","hu");echo $tld_list;?>
    </datalist>
    <input type="hidden" name="action" value="check">
  </form>
  <div class="domain-links">
    <div class="link-wrapper"><a href="<?=$base?>/check.php">Új Domain</a></div>
    <div class="link-wrapper"><a href="<?=$base?>/transcheck.php">Domain átkérés</a></div>
    <div class="link-wrapper"><a href="<?=$base?>/pricingfull.php">Domain árlista</a></div>
    <div class="link-wrapper"><a href="<?=$base?>/packages.php?spt=1"><?=TMENU5A?></a></div>
  </div>
</div>
