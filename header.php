<?php header("Pragma: private"); header("Cache-Control: post-check=0, pre-check=0", false); header("Cache-Control: no-cache, must-revalidate"); include_once(''.WORKDIR.'/includes/browserClass.php'); 	$br = new Browser; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?=HTMLDIR?>">
<head>
<title><?=$pagetitle?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?=$pagekeywords?>" />
<meta name="description" content="<?=$pagedesc?>" />
<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>" />
<meta http-equiv="Content-Language" content="<?=CONTENTLANG?>" />
<?php if (($br->Name == 'MSIE') && ($br->Version == "6.0")) { ?><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/IE7.js"></script><?php } ?>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script
    src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
<link rel="alternate" type="application/rss+xml" title="Latest news from <?=$companyname?>" href="newsfeed.php" />
<link rel="alternate" type="application/rss+xml" title="Latest system news from <?=$companyname?>" href="newsfeed.php?sys=1" />
<?php if ($br->Name == 'MSIE') { ?><link rel="stylesheet" type="text/css" href="<?=$currentbase?>/templates/<?=$templatedir?>/css/IE.css" /><?php } ?>
<?php if ( ($clientportal or $t=="5") && (strtolower($this_filename) == "index.php") ) { ?><link rel="stylesheet" type="text/css" href="<?=$currentbase?>/templates/<?=$templatedir?>/css/portal.css" /><?php } ?>
<?php if ($usejq == "1") { ?><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/jquery/jQscripts.js"></script>
<?php } ?>
<script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/mootools.js"></script><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/moocheck.js"></script><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/moomore.js"></script><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/functions.js"></script><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/SpryCollapsiblePanel.js"></script><script language="javascript" type="text/javascript" src="<?=$currentbase?>/js/common/formcheck.php"></script>
<!-- Bootstrap 3.3.7 -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?=$currentbase?>/templates/<?=$templatedir?>/css/bootstrap-3.3.7/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="<?=$currentbase?>/templates/<?=$templatedir?>/css/bootstrap-3.3.7/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="<?=$currentbase?>/templates/<?=$templatedir?>/css/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<script language="javascript" type="text/javascript" src="<?=$currentbase?>/templates/<?=$templatedir?>/js/jquery.cookie.js"></script>
<script language="javascript" type="text/javascript" src="<?=$currentbase?>/templates/<?=$templatedir?>/js/jquery.cookieaccept.js"></script>
<script language="javascript" type="text/javascript" src="<?=$currentbase?>/templates/<?=$templatedir?>/js/master.js"></script>
<?php if($userssnews=="1"){ ?>
<?php } ?>
<?php if(file_exists(WORKDIR."/templates/$templatedir/includes/header_includes.php")){ include(WORKDIR."/templates/$templatedir/includes/header_includes.php"); }else if(file_exists(WORKDIR."/templates/common_files/includes/header_includes.php")){ include(WORKDIR."/templates/common_files/includes/header_includes.php"); } ?>
<script type="text/javascript">window.addEvent('domready', function() { loadEvents(); });</script>
<?php if(file_exists(WORKDIR."/templates/$templatedir/includes/user_includes.php")){ include(WORKDIR."/templates/$templatedir/includes/user_includes.php"); } ?>
<link rel="stylesheet" type="text/css" href="<?=$currentbase?>/templates/<?=$templatedir?>/css/style<?=(isset($_GET['old']))?'.old':''?>.css?t=<?=microtime()?>" />
<link rel="stylesheet" type="text/css" href="<?=$currentbase?>/templates/<?=$templatedir?>/css/menu.css" />
</head>
<body>
<noscript>
<?php $_SESSION['no_java']=="1"; ?>
</noscript>
<a name="top" id="top"></a>
<div id="blockDiv"><div id="blockDivText"><?=(GPROCESSING)? GPROCESSING: $jptext?></div><img name="<?=$templatedir?>" id="blockDivImg" src="templates/<?=$templatedir?>/images/loading.gif" alt="" /></div>
