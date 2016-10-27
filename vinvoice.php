<?php
if($_GET['PDF'] != "1" or $allowpdf != "1"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?=HTMLDIR?>">
<head>
<title><?=$pagetitle?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>" />
<meta http-equiv="Content-Language" content="<?=CONTENTLANG?>" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<link rel="stylesheet" type="text/css" href="templates/<?=$templatedir?>/css/popups/pop.css" />
</head>
<body>
<div>
<p class="ac bold p-2"><a href="javascript:window.print();" class="printer"><?=PRINTPAGE?></a></p>
<form method="get" action="viewitem.php"><input type="hidden" value="1" name="PDF" />
<?php
if($allowpdf=="1"){
	foreach($_GET as $var=>$val){
	?>
		<input type="hidden" value="<?=$val?>" name="<?=$var?>" />
	<?
	}
?>
<p class="ac p-2"><input type="submit" value="<?=TXTGENPDF?>" /></p>
<?php } ?>
<table class="vinvoice width-100 alc" cellpadding="0" cellspacing="0">
	<tr>
		<td class="width-65 vlt" nowrap="nowrap"><font size="3" face="arial"><?=INVSTRING?>&nbsp;#<?=$display_arr['ID']?></font><br />
		<strong><?=$companyname?></strong><br />
		<?=$companyaddress1?><br />
		<?php if ($companyaddress2 != "" ){ echo $companyaddress2."<br />"; }?>
		<?=$companycity?>,&nbsp;<?=$companystate?>&nbsp;&nbsp;<?=$companyzip?><br />
		<?=$companycountry?><br />
		</td>

		<td nowrap="nowrap" class="width-35 al vlt"><strong><?=INVDATE?></strong>&nbsp;<?=$display_arr[InvoiceDate]?><br />
		<strong><?=INVDUEDATE?></strong>&nbsp;<?=$display_arr['DateDue']?><br />
		<?=$paid_image?>
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" /><strong><?=ACCOUNTID?>:</strong>&nbsp;<?=$userstats[user]?><br />
		<strong><?=NAME?>:</strong>&nbsp;<?=$userstats['fname']?>&nbsp;<?=$userstats[lname]?><br />
		<strong><?=COMPANY?>:</strong>&nbsp;<?=$userstats['org']?><br />
		<strong><?=PHONE?>:</strong>&nbsp;<?=$userstats['phone']?><br />
		<strong><?=EMAILADDRESS?>:</strong>&nbsp;<?=$userstats['email']?><br />
		</td>
	</tr>
	<tr><td colspan="2"><hr size="1" /></td></tr>
	<tr>
		<td class="vlt">
		<strong><?=INVORDERID?>:</strong>&nbsp;<?=$display_arr['OrderID']?><br />
		<strong><?=INVPAYTYPE?>:</strong>&nbsp;<?=$display_arr['PayType']?><br />
		<strong><?=INVLASTPAY?>:</strong>&nbsp;<?=$display_arr['DatePaid']?><br />
		<strong><?=INVAUTH?>:</strong>&nbsp;<?=$display_arr['AuthCode']?><br />
		<strong><?=LDESCRIPTION?>:</strong>&nbsp;<?=$display_arr['Description']?><br />
		</td>
		<td class="vlt">
		<strong><?=INVSUBTOTAL?>:</strong>&nbsp;<?=$display_arr['SubTotal']?><br />
		<strong><?=INVTAX?>:</strong>&nbsp;<?=$display_arr['AmountTax']?><br />
		<strong><?=INVTOTAL?>:</strong>&nbsp;<?=$display_arr['AmountDue']?><br />
		<strong><?=INVPAID?>:</strong>&nbsp;<?=$display_arr['AmountPaid']?><br />
		<strong><?=INVBALANCE?>:</strong>&nbsp;<?=$display_arr['Balance']?><br />
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" /><strong><?=INVORDERDESC?>:</strong>
		</td>
	</tr>
	<tr>
		<td colspan="2"><?=$display_arr['Details']?>
		<font size="-2" face="Arial"><?=ORDERLEGEND?></font>
		</td>
	</tr>
	<?php if($numtransactions > 0){ ?>
	<tr>
		<td colspan="2"><hr size="1" /><strong><?=INVPAYHIST?>:</strong>
		</td>
	</tr>
	<tr>
		<td colspan="2"><?=$display_arr['TransactionDetails']?><br /><br />
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="2" class="ac"><br />
		<?=INVBLURB?> <br />
		<br /><strong><font face="Arial" color="#000080"><?=THANKYOU?></font></strong>
		<br />
		</td>
	</tr>
</table>
</form>
</div>
</body>
</html>
<?php
//End of the normal template
}else{
	require(WORKDIR.'/includes/pdf/pdfinvoice.php'); //Include the file containing the class
}
?>