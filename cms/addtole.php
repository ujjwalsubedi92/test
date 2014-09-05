<?php
	include("../includes/connect.php");
	$ab=1;
	$name=$_POST['tolename'];
	$ward=$_POST['toleward'];
	$district=$_POST['toledistrict'];
	$zone=$_POST['tolezone'];
	$nayo=$_POST['tolenayo'];
	$id=$_POST['toleid'];
	
	
	
	while($ab<14){

	$rep=$_POST['rep'.$ab];
	$sn=$_POST['sn'.$ab];
	
	
	
	if($sn!=0){
	$sql1 = "insert into tole_representatives (toleid,representative) values('$id','$rep');";
	mysql_query($sql1) or die("Error in SQL: ".mysql_error());
	echo "Row $ab has been successfully added.";
	echo "<br> ";
	}
	$ab=$ab+1;
	}
	
	$sql = "insert into tole (toleid,tolename,wardno,district,zone,tolenayo) values('$id','$name','$ward','$district','$zone','$nayo');";
	mysql_query($sql) or die("Error in SQL: ".mysql_error());
	
?>
<a href="javascript:history.back();">Go back</a>