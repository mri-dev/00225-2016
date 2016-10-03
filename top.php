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
					<li><a href="<?=$base?>/support.php">Support</a></li>
					<li><a href="mailto:<?=$this->data['salesmail']?>">Email</a></li>
					<li>+<?=$companyphone?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="logo-row">
	<div class="page-holder">
		<div class="row">
			<div class="col-md-12">
				<div class="logo">
					<a href="/"><img src="templates/<?=$templatedir?>/images/serverland-hosting-logo-h50.png" alt="SzerverLand Bt."/></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="top-main-header">
	<div class="page-holder">
		<div class="row">
			<div class="col-md-10">
				<?=$menu?>
			</div>
			<div class="col-md-2">
				<div class="contact-info">
					<div class="phone">+<?=$companyphone?></div>
					<div class="email"><a href="mailto:<?=$this->data['salesmail']?>"><?=$this->data['salesmail']?></a></div>
				</div>
			</div>
		</div>
	</div>
</div>


<div style="height:30px; clear:both;"></div>
<div class="curves"></div>
<div id="content">
<table id="doc" cellspacing="0" cellpadding="0">
	<tr>
	    <td id="docTD">

