<?=$header?>
<?=$top?>
<!-- Contents /s -->
<script type="text/javascript" src="js/common/sortableTable.js"></script>
<script language="javascript" type="text/javascript">
	//Form Validation
	window.addEvent('domready', function(){check = new FormCheck('checkform1', {
		display : {
			fadeDuration 	: 500,
			errorsLocation 	: 3,
			indicateErrors 	: 2,
			flashTips 		: true,
			showErrors 		: 1
		}
	})});
	//Sortable pricing table
	var myTable = {};
	window.addEvent('domready', function(){
		myTable = new sortableTable('domainPrices', {overCls: 'over'});
	});
</script>
<div id="checkpage"><table id="mainData">
	<tr>
		<td id="tablehead"><h1><?=CHECKTITLE?>&nbsp;<?=$help_icon?></h1></td>
	</tr>
	<tr>

<td id="mainTD">
<?=$boxtop?>
        <div class="underline bold"><span class="boxlegend"><?=FIND?></span></div>
        <form method="post" action="spincheck.php" id="checkform1" name="checkform1" class="awform" onsubmit="showObject(false,true);">
        <input type="hidden" name="action" value="check" />
        <?php if($isidn){ ?>
        <input type="hidden" name="isidn" value="1" />
        <?php } ?>
<fieldset>
				<div class="domain-check-form">
					<h3><?=DOMAIN?></h3>
					<input type="text" maxlength="272" name="cSSld" class="validate['required'] width-55 fullwidthonmobile" id="idsld" />
					<input type="submit" name="Submit" class="divblock alc fullwidthonmobile" value="<?=CHECKAVA?>" />
				</div>
        <!-- build_tlds_checkboxes("register(if you want to register a new domain name) transfer(if you want to create a transfer check list)","How Many TLDs","How Many Columns In A Row","showPrice/0") -->
        <div class="tlds"><?=build_tlds_checkboxes("register","","4","showPrice")?></div>
        <table class="width-100">
            <tr>
            	<td class="width-100 ac bold">
                    <p><?=CHECKBLURB?></p>
                </td>
            </tr>
            <tr>
            	<td class="width-100 bold ac">
                	<a href="transcheck.php" class="check"><span class="red"><?=CHECK1?>,&nbsp;</span><?=CLICKHERE?></a>
                </td>
            </tr>
            <tr>
            	<td class="width-100">
                	<div id="domainPrice">
                        <div id="CollapsiblePanel1" class="CollapsiblePanel">
                            <div class="CollapsiblePanelTab ac"><a onclick="return false;" href="#" class="check"><span class="red"><?=DPRICING?>,&nbsp;</span><?=CLICKHERE?></a></div>
                            <div class="CollapsiblePanelContent">
                            	<br />
                                <div class="awform">
<fieldset><?=$pricechart?></fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
		</fieldset>
		</form>
		<?=$boxbottom?>
		<table class="alc"><tr><td><?=$payment_images?></td></tr></table>
        <p class="ac red p-5"><?=CHECKBLURB2?></p>
		</td>

	</tr>
</table></div>
<script type="text/javascript">
	var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
</script>
<!-- Contents /e -->
<?=$bottom?>
