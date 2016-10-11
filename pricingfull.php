<?=$header?>
<?=$top?>
<!-- Contents /s -->
<script type="text/javascript" src="js/common/sortableTable.js"></script>
<script type="text/javascript">
   //Sortable pricing table
   var myTable = {};
   window.addEvent('domready', function(){
   	myTable = new sortableTable('domainPrices', {overCls: 'over'});
   });
</script>
<table id="mainData">
   <tr>
      <td id="tablehead"><h1><?=PRICINGTITLE?>&nbsp;<?=$help_icon?></h1></td>
   </tr>
   <tr>
      <td id="mainTD">
         <div class="underline bold"><?=PRICESPERYEAR?></div>
         <div class="awform">
            <fieldset>
               <?=$pricechart?>
            </fieldset>
         </div>
      </td>
   </tr>
</table>
<!-- Contents /e -->
<?=$bottom?>
