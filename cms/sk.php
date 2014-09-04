<html>
<head>
<?php
include("../includes/connect.php");
include("../includes/sessioncheck.php")

?>


<script language="JavaScript">
function ShowHide(divId,id2)
{
if(document.getElementById(divId).style.display == 'none')
{
document.getElementById(divId).style.display='block';
document.getElementById(id2).style.display = 'none';
}
else
{
document.getElementById(divId).style.display = 'none';
}
}
</script>

<title>
</title>
<style type="text/css">
tr.item td{padding:12px;border:0px;}
tr.item th{padding:12px;border:0px;}
img{cursor:pointer;}
input{width:100px;}
</style>
</head>

<body>
<?php
			include("includes/head.php");
		
	?>
	<br>
	<form method="post" action="ir-slip.php">
	<fieldset>
		<legend><b>Item Requesition Slip</b></legend>
		<table>
			<tr>
				<td>Issue NO:</td>
				<td><input type="text" name="inum"></td>
			</tr>
			
			</tr>
				<td>Issue Date</td>
				<td><input type="date" name="idate"></td>
			</tr>
			<tr>
				<td>Issued to</td>
				<td><input type="text" name="issto"></td>
			</tr>
			<tr>
				<td>Purpose</td>
				<td><input type="text" name="purpose"></td>
			</tr>
			<tr>
				<td>Mode of Delivery</td>
				<td><input type="text" name="modd"></td>
			</tr>
			<tr>
				<td>Procurement Chief</td>
				<td><input type="text" name="pchief"></td>
			</tr>
			
		</table>
		</fieldset>
		<br/>
		
		<?php 
			$a=1;$a2=7;$a3=8;
		?>
		<table border="6px" style="background-color:#2868C7;border-radius:12px;margin-left:120px">
		<tr class="item" style="display:block;">
			
			<th style="padding-left:28px;">SN</th>
			<th style="padding-left:30px;">Item Code</th>
			<th style="padding-left:40px;">Item Name</th>
		
			<th style="padding-left:40px;">Specs</th>
			<th style="padding-left:44px;font-size:12px;">Quantity Requested</th>
			<th style="padding-left:30px;font-size:12px;">Quantity Issued</th>
			<th style="padding-left:39px;">Remarks</th>
			
			
			
		</tr>
		
		<?php
		$b=1;
		while($b<=7)
		{
		?>
		<tr class="item" id="item" style="display:block;">
			<td><input style="width:40px;" type="text" name="sn<?php echo$a?>"></td>
			<td><input type="text" name="icode<?php echo$a?>"></td>
			<td><input type="text" name="iname<?php echo$a?>"></td>
			<td><input type="text" name="specs<?php echo$a?>"></td>
			<td><input type="text" name="quant<?php echo$a?>"></td>
			<td><input type="text" name="quantissued<?php echo$a?>"></td>
			<td><input type="text" name="rem<?php echo$a?>"></td>
			<?php if($b%7==0)
			{
			?>
			<td><img src="images/add1.png" id="img" onclick="javascript:ShowHide('item7','img')" style="heght:20px;width:20px;"></td>
			
			<?php
			}
			?>
		</tr>
		<?php 
		$b=$b+1;$a=$a+1;
		} ?>
		<?php
		$abc=8;$x=1;
		while($x<=100){
		?>
		<tr class="item" id="item<?php echo$a2 ?>" style="display:none;">
			<td><input style="width:40px;" type="text" name="sn<?php echo$abc?>"></td>
			<td><input type="text" name="icode<?php echo$abc?>"></td>
			<td><input type="text" name="iname<?php echo$abc?>"></td>
			<td><input type="text" name="specs<?php echo$abc?>"></td>
			<td><input type="text" name="quant<?php echo$abc?>"></td>
			<td><input type="text" name="quantissued<?php echo$abc?>"></td>
			<td><input type="text" name="rem<?php echo$abc?>"></td>
			<td><img src="images/add1.png" id="img<?php echo$a2 ?>" onclick="javascript:ShowHide('item<?php echo$a3?>','img<?php echo$a2 ?>')" style="heght:20px;width:20px;"></td>
		<?php 
		$x=$x+1;$a3=$a3+1;$a2=$a2+1;$abc=$abc+1;
		} ?>
		
		
		
		
		
		
		</table>
		<br>
	<input type="submit" value="send" style="margin-left:905px;" >	
	
	</form>


</body>
</html>