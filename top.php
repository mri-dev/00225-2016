<?php
	if ($clientportal){
		$headerLogo = "headerImagePortal";
	}else{
		$headerLogo = "headerImage";
	}

	if($_GET['devvar'] == '1') {
		echo '<pre>';
		print_r($this->data);
		exit;
		echo '</pre>';
	}
?>
<div class="wrapper">
<div class="header">
	<div class="page-holder">
		<div class="row">
			<div class="col-md-12">
				<ul class="a-list">
					<li><a href="<?=$base?>/support.php">
						<span class="fa-stack">
						  <i class="fa fa-circle-thin fa-stack-2x"></i>
						  <i class="fa fa-info fa-stack-1x"></i>
						</span>
						Support</a></li><!--
			 --><li><a href="mailto:<?=$this->data['salesmail']?>">Email</a></li><!--
			 --><li>+<?=$companyphone?></li><!--
			 --><li class="cart-block"><a href="<?=$base?>/cart.php"><? if($this->data['curcart']['items'] != '0'): ?><div id="cartitemsnum"><?=$this->data['curcart']['items']?></div><? endif; ?>Kosár <i class="fa fa-shopping-cart"></i></a></li><!--
			 --><?php	if ($LoggedIn== "1"){ ?><li class="user-block hide-on-mobiles"><a href="<?=$base?>/welcome.php"><?=HELLO?>, <strong><?=ucfirst($newuid)?></strong>!</a></li><!--
			 --><li class="user-logout hide-on-mobiles"><a href="<?=$base?>/LogOut.php" title="<?=TMENU7B?>"><i class="fa fa-sign-out"></i></a></li>
					<? } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="logo-row">
	<div class="page-holder">
		<div class="row">
			<div class="col-md-12">
				<div class="show-on-mobiles">
					<div id="menu-toggler" toggle=".top-main-header" toggle-status="0"><i class="fa fa-bars"></i></div>
				</div>
				<div class="logo">
					<a href="/"><img src="templates/<?=$templatedir?>/images/serverland-hosting-logo-h50.png" alt="SzerverLand Bt."/></a>
				</div>
				<div class="show-on-mobiles">
					<?php if ($LoggedIn != "1"){ ?>
					<div class="mobile-login-button">
						<a href="<?=$securebase?>/aLogIn.php" class="<?=$page_acctSelected?>"><?=TMENU7A?> <i class="fa fa-user"></i></a>
					</div>
					<?php } ?>
					<?php if ($LoggedIn == "1"){ ?>
					<div class="mobile-logged-user">
						<a class="user" href="<?=$base?>/welcome.php"><?=HELLO?>, <strong><?=ucfirst($newuid)?></strong>!</a><!--
				 --><a href="<?=$base?>/LogOut.php" class="mobile-logout" title="<?=TMENU7B?>"><i class="fa fa-sign-out"></i></a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="top-main-header">
	<div class="page-holder">
		<div class="row">
			<div class="col-md-10 menu-holder">
				<?=$menu?>
			</div>
			<div class="col-md-2 hideon-layout-break">
				<div class="contact-info">
					<div class="res-ico res-ico-envelope"><i class="fa fa-envelope"></i></div>
					<div class="res-ico res-ico-phone"><i class="fa fa-phone"></i></div>
					<div class="phone">+<?=$companyphone?></div>
					<div class="email"><a href="mailto:<?=$this->data['salesmail']?>"><?=$this->data['salesmail']?></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="curves"></div>
<div id="content">
<table id="doc" cellspacing="0" cellpadding="0">
	<tr>
	    <td id="docTD">
