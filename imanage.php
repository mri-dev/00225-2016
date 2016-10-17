<?=$header?>
<?=$top?>
<script type="text/javascript">
checked=false;
function checkedAll (frm1) {
    var aa= document.getElementById(frm1);
    if (checked == false) { checked = true } else { checked = false }
    for (var i =0; i < aa.elements.length; i++) {
        if (aa.elements[i].type == "checkbox") {
            aa.elements[i].checked = checked;
            if (checked == true) {
				 aa.elements[i].getParent().addClass('checked').removeClass('unchecked');
            } else {
				 aa.elements[i].getParent().removeClass('checked').addClass('unchecked');
            }
        }
    }
}
</script>
<!-- Contents /s -->
<table id="mainData" class="account-page">
	<tr>
		<td id="tablehead"><?=IMANAGETITLE?>&nbsp;<?=$help_icon?></td>
	</tr>
	<tr>
		<td id="mainTD">
    <?=$dmsg?>
		<?php if (!$clientportal) { ?>
    <div class="account-page-holder">
      <div class="sidemenu vlt">
        <?=$umenu?>
      </div>
      <div class="account-contant-container">
        <form method="post" action="imanage.php" class="awform margin-5" onsubmit="submitonce(this); showObject(false,true);">
           <?=$boxtop?>
           <fieldset>
              <legend><span class="boxlegend"><?=SEARCH?></span></legend>
              <div class="row">
                <div class="col-md-5">
                  <?=CATEGORY?><br>
                  <select name="cat" class="form-control">
                     <option value="id" selected="selected"><?=INVNUM?></option>
                     <option value="seed"><?=ORDERID?></option>
                     <option value="invoice_date"><?=DATEINVOICE?></option>
                     <option value="date_paid"><?=DATEPAID?></option>
                  </select>
                </div>
                <div class="col-md-5">
                  <?=SEARCH?><br>
                  <input type="text" name="list"  class="form-control"/>
                </div>
                <div class="col-md-2">
                  <br>
                  <input type="hidden" name="search" value="search" />
                  <input type="hidden" name="so" value="invoice_date" />
                  <input type="hidden" name="sd" value="desc" />
                  <input type="submit" class="form-control" name="submit" value="<?=GOBUTTON?>" />
                </div>
              </div>
           </fieldset>
           <?=$boxbottom?>
        </form>

        <form method="post" name="uipp" class="zeroPadding" action="imanage.php">
        <table class="totalRecords width-100">
            <tr>
                <td class="al"><?=TOTALRECORDS?>: <?=$total_records?></td>
                <td class="ar"><select name="setipp" class="formlogin" onchange="document.uipp.submit()"><?=$uipp?></td>
            </tr>
        </table>
        </form>

        <?=$boxtop?>
				<table class="width-100 data">
				<?=$domainlist?>
				<?php if(!$nopayselects and $total_domains != 0){ ?>
					<tr><td colspan="8">
					<input type="hidden" name="action" value="mass_pay" />
					<input type="submit" name="submit" value="<?=PAYSELECTED?>" />
					</form>
					<form method="post" action="imanage.php" style="margin:0;display:inline;">
					<input type="hidden" name="action" value="mass_pay" /><input type="hidden" name="payall" value="1" />
					<input type="submit" name="submit" value="<?=PAYALL?>" />
					</form>
					</td></tr>
				<?php } ?>
				</table>
        <?=$boxbottom?>
        <?=$domainblist?>
      </div>
    </div>
    <?php } ?>
		</td>
	</tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
