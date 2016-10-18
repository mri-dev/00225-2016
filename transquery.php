<?=$header?>
<?=$top?>
<!-- Contents /s -->
<table id="mainData" class="account-page">
   <tr>
      <td id="tablehead"><h1><?=TSTATUSTITLE?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
				<?php if (!$clientportal) { ?>
   	    <div class="account-page-holder">
   	      <div class="sidemenu vlt">
   	        <?=$umenu?>
   	      </div>
   	      <div class="account-contant-container">
						<form method="post" action="transquery.php" id="form1" name="form1" class="awform" onsubmit="submitonce(this); showObject(false,true);">
							 <input type="hidden" name="action" value="check" />
							 <?=$boxtop?>
							 <fieldset>
									<legend><span class="boxlegend"><?=TSTATUSBOXTITLE?></span></legend>
									<?php
										 if ( $cAction == "check" ) {
												 if ( $bError == 1 ) {
														 echo "<p class=\"bold red pb-5 ac\">".strip_tags(TQERROR1)." <span class=\"black\">$cSld.$cTld</span>.</p>";
												 } else if ( $bAvailable == 1 ) {
														 echo "<p class=\"bold red pb-5 ac\">".strip_tags(TQSORRY)." <span class=\"black\">$cSld.$cTld</span>.xox</p>";
														 echo "<p class=\"bold red pb-5 ac\">".TQNOTAVAIL."".TQTRYAGAIN."</p>";
												 } else if ( $bAvailable == 0 ) {
														 echo "<p class=\"bold red pb-5 ac\">".RESULTSFOUND.": $ordercount ".FORDOMAIN." $cSld.$cTld</p>";
												 $i=1;
												 while ($i < ($ordercount + 1)) {
														 $orderid[$i]=$Enom->Values[ "orderid" . $i ];
														 $orderdate[$i]=$Enom->Values[ "orderdate" . $i ];
														 $statusdesc[$i]=$Enom->Values[ "statusdesc" . $i ];
														 echo "<p>".TQNUMBER.": " . $i . "</p>";
														 echo "<p>".TQORDERID. ": " . $orderid[$i]. "</p>";
														 echo "<p>".TQORDERDATE . ": " . $orderdate[$i]. "</p>";
														 echo "<p>".TQSTATUS . ": " . $statusdesc[$i]. "</p>";
														 echo "<hr />";
												 $i++;
												 }
												 } else {
														 echo "Darn those php guys they made a bug!";
												 }
										 }
										 ?>
									<div class="row">
										<div class="col-md-8">
											<input type="text" name="sld" id="idsld" class="form-control" maxlength="128" />
										</div>
										<div class="col-md-2">
											<select name="tld" id="idtld" class="form-control"><?php $tld_list=build_tlds("transfer");echo $tld_list;?></select>
										</div>
										<div class="col-md-2">
											<input type="submit" class="form-control" name="Submit" value="<?=SUBMIT?>" />
										</div>
									</div>
							 </fieldset>
							 <?=$boxbottom?>
						</form>
						<p class="ac"><?=TSTATUSBLURB?></p>
						<p class="ac bold p-5"><a href="welcome.php" class="rtrntomgmt"><?=CANCELCLICK?></a></p>
   	      </div>
   	    </div>
   	    <?php } ?>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
