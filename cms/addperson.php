<?php
	include("../includes/connect.php");
	$ab=1;
	$page=$_POST['page'];
	$house=$_POST['house'];
	$tole=$_POST['tole'];
	$phone=$_POST['phone'];
	$collector=$_POST['collector'];
	$giver=$_POST['giver'];
	
	
	while($ab<20){
	$sn=$_POST['sn'.$ab];
	$icode=$_POST['icode'.$ab];
	$specs=$_POST['specs'.$ab];
	$quant=$_POST['quant'.$ab];
	$rem=$_POST['rem'.$ab];
	$iname=$_POST['iname'.$ab];
	$quantis=$_POST['quantissued'.$ab];
	
	
	if($sn!=0){
	$sql1 = "insert into item_requis (sn,iname,icode,specs,qty_req,qty_issue,remarks,issue_no) values('$sn','$iname','$icode','$specs','$quant','$quantis','$rem','$inum');";
	mysql_query($sql1) or die("Error in SQL: ".mysql_error());
	echo "Row $ab has been successfully added.";
	echo "<br> ";
	}
	$ab=$ab+1;
	}
	
	$sql = "insert into irslip (issue_no,issued_to,purpose,pchief,modd,issue_date) values('$inum','$issto','$purpose','$pchief','$modd','$idate');";
	mysql_query($sql) or die("Error in SQL: ".mysql_error());
	
?>
<a href="javascript:history.back();">Go back</a>