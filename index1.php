<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div class="homepage base-content">
	<!-- Reklám box -->
	<div class="adv-block-container">
		<div class="page-holder">
			<div class="adv-wrapper">
				<div class="overlay"></div>
				<div class="row">
					<div class="col-md-6">
						<div class="cont-feat">
							<div class="image">
								<div class="texts">
									<div class="title"><strong>Korlátlan adatforgalom</strong></div>
									<div class="list">
										<ul>
											<li class="cpu">1 Ghz <span class="f">CPU</span></li>
											<li class="ram">1 GB <span class="f">RAM</span></li>
											<li class="hdd">50 GB <span class="f">HDD</span></li>
											<li class="ip">1 db <span class="f">IP cím</span></li>
										</ul>
									</div>
								</div>
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/servers.png" alt="Server" />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cont-text">
								<h2>Webtárhely</h2>
								<h1>Szalag cím</h1>
								<div class="description">
										100 MB Tárhely, 1000 MByte / hó forgalom<br>
										1 db E-mail fiók
								</div>
								<div class="offer">
									évi bruttó
									<div class="price">
										4 990 Ft
									</div>
								</div>
								<div class="links">
									<a href="#" class="btn btn-default">Megrendelés</a>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- - Reklám box -->

	<div class="page-holder">
		<!-- Domain search -->
		<div class="domain-searcher">
			<form method="post" action="<?=$base?>/spincheck.php" id="check" name="check" onsubmit="showObject(false,true);"><!--
		 --><div class="form-wrapper search-input"><input type="text" maxlength="272" name="cSSld" id="cSSld" placeholder="Írja be a választott domain nevét"/></div><!--
		 --><div class="form-wrapper search-list"><input list="end" name="endtag" size="4" placeholder=".HU"/></div><!--
		 --><div class="form-wrapper search-button"><button type="submit" class="keresgomb" name="Submit"/><i class="fa fa-search"></i> KERESÉS</div>
		 		<datalist id="end">
						<option value=".hu">
						<option value=".com">
				</datalist>
			</form>
			<div class="domain-links">
				<div class="link-wrapper"><a href="<?=$base?>/check.php">Új Domain</a></div>
				<div class="link-wrapper"><a href="<?=$base?>/transcheck.php">Domain átkérés</a></div>
				<div class="link-wrapper"><a href="<?=$base?>/pricingfull.php">Domain árlista</a></div>
				<div class="link-wrapper"><a href="<?=$base?>/forsale.php">Eladó domainek</a></div>
			</div>
		</div>
		<!-- END: Domain search -->
	</div>

	<!-- VMWare Packs -->
	<div class="service-block-container">
		<div class="page-holder">
			<div class="services">
				<div class="service-wrapper">
					<div class="box style-default">
							<div class="price-holder">
								<div class="price">
									4000 Ft
									<div class="cycle">
										/ hó
									</div>
								</div>
							</div>
							<div class="title">
								<h2><?=PKGN1?></h2>
							</div>
							<div class="image">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/serv-conf-minimal.png" alt="VMWare Minimal" />
							</div>
							<div class="features">
								<div class="feature">
									<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-cpu.png" class="ico" alt="CPU" />
									<div class="text">1 Ghz CPU</div>
								</div>
								<div class="feature">
									<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ram.png" class="ico" alt="CPU" />
									<div class="text">1 GB RAM</div>
								</div>
								<div class="feature">
									<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-hdd.png" class="ico" alt="CPU" />
									<div class="text">50 GB lemezterület</div>
								</div>
								<div class="feature">
									<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ip.png" class="ico" alt="CPU" />
									<div class="text">1 db IP cím</div>
								</div>
								<div class="feature">
									<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-brandwidth.png" class="ico" alt="CPU" />
									<div class="text">Korlátlan adatforgalom</div>
								</div>
							</div>
							<div class="action">
								<a href="<?=$base?>/hsignup.php?pt=&plan=VWMinimal">MEGRENDELEM</a>
							</div>
					</div>
				</div>
				<div class="service-wrapper">
					<div class="box style-blue">
						<div class="price-holder">
							<div class="price">
								5900 Ft
								<div class="cycle">
									/ hó
								</div>
							</div>
						</div>
						<div class="title">
							<h2><?=PKGN2?></h2>
						</div>
						<div class="image">
							<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/serv-conf-start.png" alt="VMWare Minimal" />
						</div>
						<div class="features">
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-cpu.png" class="ico" alt="CPU" />
								<div class="text">1,5 Ghz CPU</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ram.png" class="ico" alt="CPU" />
								<div class="text">1,5 GB RAM</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-hdd.png" class="ico" alt="CPU" />
								<div class="text">80 GB lemezterület</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ip.png" class="ico" alt="CPU" />
								<div class="text">1 db IP cím</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-brandwidth.png" class="ico" alt="CPU" />
								<div class="text">Korlátlan adatforgalom</div>
							</div>
						</div>
						<div class="action">
							<a href="<?=$base?>/hsignup.php?pt=&plan=VWStart">MEGRENDELEM</a>
						</div>
					</div>
				</div>
				<div class="service-wrapper">
					<div class="box style-green">
						<div class="price-holder">
							<div class="price">
								7900 Ft
								<div class="cycle">
									/ hó
								</div>
							</div>
						</div>
						<div class="title">
							<h2><?=PKGN3?></h2>
						</div>
						<div class="image">
							<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/serv-conf-fx.png" alt="VMWare Minimal" />
						</div>
						<div class="features">
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-cpu.png" class="ico" alt="CPU" />
								<div class="text">2x2 Ghz CPU</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ram.png" class="ico" alt="CPU" />
								<div class="text">2 GB RAM</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-hdd.png" class="ico" alt="CPU" />
								<div class="text">40 GB lemezterület</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ip.png" class="ico" alt="CPU" />
								<div class="text">1 db IP cím</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-brandwidth.png" class="ico" alt="CPU" />
								<div class="text">Korlátlan adatforgalom</div>
							</div>
						</div>
						<div class="action">
							<a href="<?=$base?>/hsignup.php?pt=&plan=VWFX">MEGRENDELEM</a>
						</div>
					</div>
				</div>
				<div class="service-wrapper">
					<div class="box style-red">
						<div class="price-holder">
							<div class="price">
								8900 Ft
								<div class="cycle">
									/ hó
								</div>
							</div>
						</div>
						<div class="title">
							<h2><?=PKGN4?></h2>
						</div>
						<div class="image">
							<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/serv-conf-mini.png" alt="VMWare Minimal" />
						</div>
						<div class="features">
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-cpu.png" class="ico" alt="CPU" />
								<div class="text">2 Ghz CPU</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ram.png" class="ico" alt="CPU" />
								<div class="text">2 GB RAM</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-hdd.png" class="ico" alt="CPU" />
								<div class="text">200 GB lemezterület</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-ip.png" class="ico" alt="CPU" />
								<div class="text">1 db IP cím</div>
							</div>
							<div class="feature">
								<img src="<?=$currentbase?>/templates/<?=$templatedir?>/images/feat-ico-brandwidth.png" class="ico" alt="CPU" />
								<div class="text">Korlátlan adatforgalom</div>
							</div>
						</div>
						<div class="action">
							<a href="<?=$base?>/hsignup.php?pt=&plan=VWMini">MEGRENDELEM</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: VMWare Pack -->
</div>



<table id="mainData" class="mainContainer" align="center">
	<tr>
		<td id="mainTD">
        <table class="width-100">
            <tr>
                <td class="vlt width-20">
                        <table class="alc">
                            <tr>
                                <td style="font-weight:600;line-height:14px;"><center><?=PKGN1?></center></td>
                            </tr>
                            <tr>
                                <td>
                                <div class="index-box-1" style="background:url(templates/<?=$templatedir?>/images/index_left_box.png) no-repeat;">
                                	<div style="padding:9px 10px 10px 15px;line-height:14px;text-align:left;">
						<?=I1BOX1?>
						<a class="order" href="<?=$base?>/hsignup.php?pt=&plan=VWMinimal"><?=ORDERNOW?></a>
					</div>
                                </td>
                            </tr>
						</table>
                        <table class="alc">
                            <tr>
                                <td style="font-weight:600;"><center><?=PKGN2?></center></td>
                            </tr>
                            <tr>
                                <td>
                                <div class="index-box-2" style="background:url(templates/<?=$templatedir?>/images/index_left_box.png) no-repeat;">
                                	<div style="padding:9px 10px 10px 15px;line-height:14px;text-align:left;">
						<?=I1BOX2?>
						<a class="order" href="<?=$base?>/hsignup.php?pt=&plan=VWStart"><?=ORDERNOW?></a>
					</div>
                                    </div>
                                </td>
                            </tr>
						</table>
                        <table class="alc">
                            <tr>
                                <td style="font-weight:600;"><center><?=PKGN3?></center></td>
                            </tr>
                            <tr>
                                <td>
                                <div class="index-box-2" style="background:url(templates/<?=$templatedir?>/images/index_left_box.png) no-repeat;">
                                	<div style="padding:9px 10px 10px 15px;line-height:14px;text-align:left;">
						<?=I1BOX3?>
						<a class="order" href="<?=$base?>/hsignup.php?pt=&plan=VWFX"><?=ORDERNOW?></a>
					</div>
                                    </div>
                                </td>
                            </tr>
						</table>
                        <table class="alc">
                            <tr>
                                <td style="font-weight:600;"><center><?=PKGN4?></center></td>
                            </tr>
                            <tr>
                                <td>
                                <div class="index-box-2" style="background:url(templates/<?=$templatedir?>/images/index_left_box.png) no-repeat;">
                                	<div style="padding:9px 10px 10px 15px;line-height:14px;text-align:left;">
						<?=I1BOX4?>
						<a class="order" href="<?=$base?>/hsignup.php?pt=&plan=VWMini"><?=ORDERNOW?></a>
					</div>
                                    </div>
                                </td>
                            </tr>
						</table>
				<br>
			    </td>
				<!-- end left column -->
		<!-- begin center -->
                <td class="vlt width-60 al">
                        <table class="indexData" align="center">
                            <tr>
                                <td class="paneHead"><?=DOMAINCHECK?></td>
                            </tr>
                            <tr>
                                <td class="panelContents">
                                	<div class="panelContents">
						                <form method="post" action="<?=$base?>/spincheck.php" id="check" name="check" onsubmit="showObject(false,true);">
                                            <table class="width-100">
                                                <tr>
                                                    <td class="domainsrc"><input type="text" style="padding:4px;" size="40" maxlength="272" name="cSSld" class="width-65" id="cSSld" placeholder="Írja be a választott domain nevét"/>&nbsp;
                                                    <input list="end" style="padding:4px;" name="endtag" size="4" placeholder=".HU"/>&nbsp;<input type="submit" class="keresgomb" name="Submit" value="KERESÉS" /></td>
                                                    <datalist id="end">
                                                        <option value=".hu">
                                                        <option value=".com">
                                                    </datalist>
                                                </tr>
                                                <tr>
                                                    <td class="ac" colspan="2"><strong><?=SELECTEXT?></strong><?=build_tlds_checkboxes("register","8","4","showPrice")?></td>
                                                </tr>
                                                <tr>
                                                    <td class="ac" colspan="2">
                                                        <p>[<a href="<?=$base?>/check.php"><?=VWALLEXT?></a>]</p>
                                                        <p>[<a href="<?=$base?>/pricingfull.php"><?=VWALLPRC?></a>]</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br />
                        <table class="indexData" align="center">
                            <tr>
                                <td class="paneHead"><?=INDEXWELCOME?> <?=$companyname?></td>
                            </tr>
                            <tr>
                                <td class="panelContents2">
                                <div class="panelContents2">
                                    <p><?=INDEXBLURB1?></p>
                                    <br />
                                    <p><?=INDEXBLURB2?></p>
                                </div>
                                </td>
                            </tr>
                        </table>
                </td>
		<!-- end center -->
				<!-- start right column -->
                <td class="vlt width-20">
                        <table class="alc">
                            <tr>
                                <td style="font-size:16px;"><strong><center><?=BOX1TITLE?></center></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size:10px;"><?=BOX1MIDDLE?></td>
                            </tr>
                            <tr>
                                <td class="panelContents">
                                <div class="panelContents index-box-5" style="background:url(templates/<?=$templatedir?>/images/index_right_box.png) no-repeat;">
                                    <span style="padding-right:10px;"><?=BOX1BOTTOM?></span>
                                    </div>
                                </td>
                            </tr>
						</table>
                        <br />
                        <table class="alc">
                            <tr>
                                <td style="font-size:16px;"><strong><center><?=BOX2TITLE?></center></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size:10px;"><?=BOX2MIDDLE?></td>
                            </tr>
                            <tr>
                                <td class="panelContents">
                                <div class="panelContents index-box-5" style="background:url(templates/<?=$templatedir?>/images/index_right_box.png) no-repeat;">
                                    <span style="padding-right:10px;"><?=BOX2BOTTOM?></span>
                                    </div>
                                </td>
                            </tr>
						</table>
                         <br />
                        <table class="alc">
                            <tr>
                                <td style="font-size:16px;"><strong><center><?=BOX3TITLE?></center></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size:10px;"><?=BOX3MIDDLE?></td>
                            </tr>
                            <tr>
                                <td class="panelContents">
                                <div class="panelContents index-box-5" style="background:url(templates/<?=$templatedir?>/images/index_right_box.png) no-repeat;">
                                    <span style="padding-right:10px;"><?=BOX3BOTTOM?></span>
                                    </div>
                                </td>
                            </tr>
						</table>
                        <br />
                        <table class="alc">
                            <tr>
                                <td style="font-size:16px;"><strong><center><?=BOX4TITLE?></center></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size:10px;"><?=BOX4MIDDLE?></td>
                            </tr>
                            <tr>
                                <td class="panelContents">
                                <div class="panelContents index-box-5" style="background:url(templates/<?=$templatedir?>/images/index_right_box.png) no-repeat;">
                                    <span style="padding-right:10px;"><?=BOX4BOTTOM?></span>
                                    </div>
                                </td>
                            </tr>
						</table>
                        <br />
                        <table class="alc">
                            <tr>
                                <td style="font-size:16px;"><strong><center><?=BOX5TITLE?></center></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size:10px;"><?=BOX5MIDDLE?></td>
                            </tr>
                            <tr>
                                <td class="panelContents">
                                <div class="panelContents index-box-5" style="background:url(templates/<?=$templatedir?>/images/index_right_box.png) no-repeat;">
                                    <span style="padding-right:10px;"><?=BOX5BOTTOM?></span>
                                    </div>
                                </td>
                            </tr>
						</table>
               </td>
            </tr>
        </table>
        </td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
