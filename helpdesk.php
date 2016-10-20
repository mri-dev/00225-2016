<?=$header?>
<?=$top?>
<!-- Contents /s -->
<div id="helpdesk">
   <table id="mainData" class="account-page">
      <tr>
         <td id="tablehead">
            <h1><?=HELPDESKTITLE?>&nbsp;<?=$help_icon?></h1>
         </td>
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

								<? if(isset($hd_stats[4]) && $hd_stats[4] != '0'): ?>
									<div class="alert">
										Önnek <?=$hd_stats[4]?> darab válaszra váró jegye van! <a href="<?=$securebase?>/helpdesk.php?search=waiting">Jegyek mutatása »</a>
									</div>
								<? endif; ?>

                  <?php if ($edit == 1){ ?>

                  <form action="helpdesk.php" method="post" class="awform" enctype="multipart/form-data" onsubmit="submitonce(this);showObject(false,true);">
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=SUBMITTICKET?></span></legend>
                        <table class="width-100 formtable">
                           <?=$form1?>
                        </table>
                     </fieldset>
                     <?=$boxbottom?>
                  </form>
                  <p class="ac bold"><a href="helpdesk.php" class="ac"><?=HDCANCEL?></a></p>

                  <?php }else if ($edit == 2){ ?>

                  <form action="helpdesk.php" method="post" enctype="multipart/form-data" onsubmit="submitonce(this);showObject(false,true);"><?=$form2?></form>

									<?php }else{ ?>
									<form action="helpdesk.php" method="post" class="awform" enctype="multipart/form-data" onsubmit="submitonce(this);showObject(false,true);">
                     <input name="cat" type="hidden" value="body" />
                     <input type="hidden" name="search" value="search" />
                     <?=$boxtop?>
                     <fieldset>
                        <legend><span class="boxlegend"><?=TICKETS?></span></legend>
												<div class="ticket-counts">
													<div class="row">

														<div class="col-md-6">
															<div class="row ticket-new">
																<div class="col-md-12"><a href="<?=$securebase?>/helpdesk.php?action=add_request"><i class="fa fa-plus-circle"></i> <?=OPENTICKET?></a></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row ticket-waiting">
																<div class="col-md-6"><div class="ticket-head"><?=AWAITING?></div></div>
																<div class="col-md-6"><div class="ticket-count"><a href="<?=$securebase?>/helpdesk.php?search=waiting"><?=$hd_stats[4]?> <i class="fa fa-ticket"></i></a></div></div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="row ticket-open">
																<div class="col-md-6"><div class="ticket-head"><?=OPEN?></div></div>
																<div class="col-md-6"><div class="ticket-count"><a href="<?=$securebase?>/helpdesk.php?search=open"><?=$hd_stats[0]?> <i class="fa fa-ticket"></i></a></div></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row ticket-closed">
																<div class="col-md-6"><div class="ticket-head"><?=CLOSED?></div></div>
																<div class="col-md-6"><div class="ticket-count"><a href="<?=$securebase?>/helpdesk.php?search=closed"><?=$hd_stats[1]?> <i class="fa fa-ticket"></i></a></div></div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="row ticket-hold">
																<div class="col-md-6"><div class="ticket-head"><?=HOLD?></div></div>
																<div class="col-md-6"><div class="ticket-count"><a href="<?=$securebase?>/helpdesk.php?search=hold"><?=$hd_stats[2]?> <i class="fa fa-ticket"></i></a></div></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row ticket-all">
																<div class="col-md-6"><div class="ticket-head"><?=TOTAL?></div></div>
																<div class="col-md-6"><div class="ticket-count"><a href="<?=$securebase?>/helpdesk.php"><?=$hd_stats[3]?> <i class="fa fa-ticket"></i></a></div></div>
															</div>
														</div>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-10">
														<label for="search"><?=SEARCH?></label>
														<input type="text" name="list" class="form-control" />
													</div>
													<div class="col-md-2 inp-btn-wlabel">
														<input type="submit" class="form-control" name="submit" value="<?=GOBUTTON?>" />
													</div>
												</div>
                     </fieldset>
                     <?=$boxbottom?>
                  </form>

                  <?php } ?>

                  <?php if ($edit == 0){ ?>

                  <!-- start total records row -->
                  <form method="post" name="uipp" class="zeroPadding" action="helpdesk.php">
                     <table class="totalRecords width-100 alc">
                        <tr>
                           <td class="al"><?=TOTALRECORDS?>: <?=$total_records?></td>
                           <td class="ar"><select name="setipp" class="formlogin" onchange="document.uipp.submit()"><?=$uipp?></td>
                        </tr>
                     </table>
                  </form>
                  <!-- end total records row -->
                  <?=$boxtop?>
                  <table class="width-100 data alc">
                     <tr>
                        <td nowrap="nowrap" class="boxtitle"><?=$ticketlist?>
                  </table>
                  <?=$boxbottom?>
                  <br />
                  <table class="width-100">
                     <tr>
                        <td class="ac vlt"><?=$ticketblist?></td>
                     </tr>
                  </table>

                  <?php } ?>

               </div>
            </div>
            <?php } ?>
         </td>
      </tr>
   </table>
</div>
<!-- Contents /e -->
<?=$bottom?>
