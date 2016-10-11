<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="forsale">
   <table id="mainData">
      <tr>
         <td id="tablehead"><h1><?=FSTITLE?>&nbsp;<?=$help_icon?></h1></td>
      </tr>
      <tr>
         <td id="mainTD">
            <?=$dmsg?>
            <div class="awform">
               <?=$boxtop?>
               <fieldset>
                  <legend><span class="boxlegend"><?=FEATUREDDOMAINS?></span></legend>
                  <table class="width-100">
                     <tr>
                        <td class="width-25 vlt al"><img src="templates/<?=$templatedir?>/images/forsale-trans.png" alt="<?=FSTITLE?>" /></td>
                        <td class="width-75 vlt al">
                           <?php if ($rfs[0]) { echo "<ul>"; } ?>
                           <?php // Syntax: $rfs[0][sld] $rfs[0][tld] $rfs[0][domain] ?>
                           <?php if ($rfs[0][domain]) { ?>
                           <li><span class="verdana bold">&#155;</span><?=$rfs[0][sld]?>.<?=$rfs[0][tld]?>&nbsp;&rarr;&nbsp;<?=$rfs[0][offerlink]?></li>
                           <?php } ?>
                           <?php if ($rfs[1][domain]) { ?>
                           <li><span class="verdana bold">&#155;</span><?=$rfs[1][domain]?>&nbsp;&rarr;&nbsp;<?=$rfs[1][offerlink]?></li>
                           <?php } ?>
                           <?php if ($rfs[2][domain]) { ?>
                           <li><span class="verdana bold">&#155;</span><?=$rfs[2][domain]?>&nbsp;&rarr;&nbsp;<?=$rfs[2][offerlink]?></li>
                           <?php } ?>
                           <?php if ($rfs[3][domain]) { ?>
                           <li><span class="verdana bold">&#155;</span><?=$rfs[3][domain]?>&nbsp;&rarr;&nbsp;<?=$rfs[3][offerlink]?></li>
                           <?php } ?>
                           <?php if ($rfs[4][domain]) { ?>
                           <li><span class="verdana bold">&#155;</span><?=$rfs[4][domain]?>&nbsp;&rarr;&nbsp;<?=$rfs[4][offerlink]?></li>
                           <?php } ?>
                           <?php if ($rfs[0]) { echo "</ul>"; } ?>
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <?=$boxbottom?>
            </div>
            <form method="post" action="forsale.php" class="awform" onsubmit="submitonce(this);">
               <?=$boxtop?>
               <fieldset>
                  <legend><span class="boxlegend"><?=SEARCH?></span></legend>
                  <div class="underline bold">&nbsp;<?=CATSEARCH?></div>
                  <div class="ac">
                     <select name="cat">
                        <option value="all"><?=FALLCATEGORIES?></option>
                        <?=$newFSCo?>
                     </select>
                     <input type="text" name="list" class="width-35" />
                     <input type="hidden" name="action" value="search" />
                     <input type="hidden" name="so" value="" />
                     <input type="submit" name="submit" value="Search" />
                  </div>
                  <div class="underline bold">&nbsp;<?=FILTER?></div>
                  <div class="ac bold vlm">
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=a">A</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=b">B</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=c">C</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=d">D</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=e">E</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=f">F</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=g">G</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=h">H</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=i">I</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=j">J</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=k">K</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=l">L</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=m">M</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=n">N</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=o">O</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=p">P</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=q">Q</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=r">R</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=s">S</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=t">T</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=u">U</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=v">V</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=w">W</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=x">X</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=y">Y</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=list&amp;list=z">Z</a> <a href="forsale.php">[<?=SHOWALL?>]</a>
                  </div>
                  <div class="ac bold vlm">
                     <span class="bold"><?=FSLENGTH?>:</span>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=3">3 <?=FSLESS?></a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=4">4</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=5">5</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=6">6</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=7">7</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=8">8</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=9">9</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=10">10</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=11">11</a>
                     <a href="forsale.php?so=<?=$so?>&amp;action=length&amp;list=12">12 <?=FSMORE?></a>
                  </div>
               </fieldset>
               <?=$boxbottom?>
            </form>
            <?php include($fstable); ?>
            <?php // if($_REQUEST[action] != ""){ ?>
            <a href="forsale.php" class="rtrntomgmt"><?=RETURNTOSEARCH?></a>
            <?php //} ?>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
