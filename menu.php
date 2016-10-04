<?php
if(preg_match("/menu.php/",getenv("SCRIPT_NAME"))){@session_destroy();exit;}
if ($_POST['groupid'] || $_GET['groupid']){@session_destroy();exit;}
if ($_POST['groupname'] || $_GET['groupname']){@session_destroy();exit;}
if($_GET['g'] and $_GET['gc']){
	$_POST['g']=$_GET['g'];
	$_POST['gc']=$_GET['gc'];
}

if($_POST['g'] and $_POST['gc']){
	$csum=md5($_POST['g']."group".$_POST['g']);
	$csum=substr($csum,0,6);
	if($_POST['gc'] == $csum){
		$_SESSION['groupname']=$_POST[g];
	}
}
if ($LoggedIn != "1" and trim($_SESSION['groupname'] == "")) {
	$groupid=1;
	$_SESSION['groupname']=$groupid;
}else if(trim($_SESSION['groupname']) != "" and $LoggedIn != "1"){
	$groupid=$_SESSION['groupname'];
}else if($LoggedIn == "1"){
	$groupid=sqlsingle("select * from users where username='$newuid'","groupname");
	$_SESSION['groupname']=$groupid;
	if(!$_SESSION['aid']){
		$_SESSION['aid']=sqlsingle("select * from groups where id='".$groupid."'","affilid");
	}
}
if($groupid < 1 or trim($groupid) == ""){$groupid=1;$_SESSION['groupname']=$groupid;}

if($clientportal){
	if(file_exists(WORKDIR."/templates/$templatedir/group".$groupid."cpmenu.php")){
		include(WORKDIR."/templates/$templatedir/group".$groupid."cpmenu.php");
	}else if(file_exists(WORKDIR."/templates/common_files/group".$groupid."cpmenu.php")){
		include(WORKDIR."/templates/common_files/group".$groupid."cpmenu.php");
	}else{
		include(WORKDIR."/templates/common_files/group1cpmenu.php");
	}
}else{
	if(file_exists(WORKDIR."/templates/$templatedir/group".$groupid."menu.php")){
		include(WORKDIR."/templates/$templatedir/group".$groupid."menu.php");
	}else if(file_exists(WORKDIR."/templates/common_files/group".$groupid."menu.php")){
		include(WORKDIR."/templates/common_files/group".$groupid."menu.php");
	}else{
		include(WORKDIR."/templates/common_files/group1menu.php");
		eval($menu);
	}
}
?>