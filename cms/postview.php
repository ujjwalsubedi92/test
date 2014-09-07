<?php
	
	include("../includes/connect.php");
	include("../includes/sessioncheck.php");
	
	
	$x = $_GET['page'];
	
	$sql_page = "select * from page where pageno = $x;";
	$res_page = mysql_query($sql_page) or die("Error in database: " . mysql_error());
	$row_page = mysql_fetch_array($res_page); //no need to loop because 

	$toleid=$row_page['toleid'];
	echo$toleid;

	$sql_tole = "select * from tole where toleid = '$toleid';";
	$res_tole = mysql_query($sql_tole) or die("Error in database: " . mysql_error());
	$row_tole = mysql_fetch_array($res_tole); //no need to loop because 
	
	
	$sql_person = "select * from person where personid = $x ;";
	$res_person = mysql_query($sql_person) or die("Error in database: " . mysql_error());
	 
?>

<html>
<head>

<style type="text/css">
table.question td{padding:2px;border:0px;font-size:20;}


</style>
<title>
POST view
</title>

<style type="text/css">
 body{font-family:arial;color:black;}
 
 td{padding:4px;}
 
 
 </style>

</head>

<body>
<?php

include("../includes/head.php");
?>
<br>


	<fieldset>
	<table class="question">
			<tr>
				<td><b>pageno:</b></td>
				<td><?php echo$row_page['pageno']?></td>
			</tr>
			</tr>
					<td><b>houseno:</b></td>
					<td><?php echo$row_page['houseno']?></td>
			</tr>
			</tr>
					<td><b>tolename:</b></td>
					<td><?php echo$row_tole['tolename']?></td>
			</tr>
			
			
	</table>
	</fieldset>
	
<div>
	<table border="1px" style="border-radius:10px;border-color:#3F4C63;background-color:#9ba9e3;padding:6px;">
	<tr class="style1" style="padding:10px;">
										<td> SN</td>
										<td> Item Code</td>
										<td> Item Name</td>
										<td> Specs</td>
										<td> Quantity Required</td>
										<td> Quantity Issued</td>
										<td> Unit</td>
										<td> Remarks</td>
										<td> Issue no</td>
									</tr>
	
	<?php
									$sql_person = "select * from item_requis where issue_no=$x"; //sorting in desceding order by date such that latest thread posted appear at top.
									$res_person = mysql_query($sql_person) or die("Error in database: " . mysql_error());
									while($row_person = mysql_fetch_array($res_person))
									{
									?>
									<tr>
										<td> <?php echo$row_person['sn']?></td>
										<td> <?php echo$row_person['icode']?></td>
										<td> <?php echo$row_person['iname']?></td>
										<td> <?php echo$row_person['specs']?></td>
										<td> <?php echo$row_person['qty_req']?></td>
										<td> <?php echo$row_person['qty_issue']?></td>
										<td> <?php echo$row_person['unit']?></td>
										<td> <?php echo$row_person['remarks']?></td>
										<td> <?php echo$row_person['issue_no']?></td>
									</tr>
									<?php
									} //end of while loop
									/* P.S.
										"<?= ?>" is actually a short cut for <?php echo ... ?>
									*/
									?>
									</table>
									
									</div>
									<br>
					
</body>
</html>