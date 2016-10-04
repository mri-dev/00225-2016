<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div class="homepage base-content">
	<div class="domain-searcher">
		<form method="post" action="<?=$base?>/spincheck.php" id="check" name="check" onsubmit="showObject(false,true);">
			<input type="text" style="padding:4px;" size="40" maxlength="272" name="cSSld" class="width-65" id="cSSld" placeholder="Írja be a választott domain nevét"/>
			<input list="end" style="padding:4px;" name="endtag" size="4" placeholder=".HU"/>
			<input type="submit" class="keresgomb" name="Submit" value="KERESÉS" />
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
				<?php /*
				<?=INDEXOPT1?><br>
				<?=INDEXOPT2?><br>
				<?=INDEXOPT3?><br>
				<?=INDEXOPT4?><br>

				*/
				?>
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