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
<link rel="stylesheet" type="text/css" href="../css/button.css">
<style type="text/css">
tr.item td{padding:12px;border:0px;}
tr.item th{padding:12px;border:0px;}
img{cursor:pointer;}
input{width:100px;}
</style>
</head>

<body>
<?php
			include("../includes/head.php");
		
	?>
	<br>
	<form method="post" action="addtole.php">
	<fieldset>
		<legend><b>Add Tole</b></legend>
		<table>
			<tr>
				<td>Tole Id:</td>
				<td><input type="text" name="toleid"></td>
			</tr>
			<tr>
				<td>Tole name:</td>
				<td><input type="text" name="tolename"></td>
			</tr>
			
			</tr>
				<td>Ward no.</td>
				<td><input type="text" name="toleward"></td>
			</tr>
			<tr>
				<td>District</td>
				<td><input type="text" name="toledistrict"></td>
			</tr>
			<tr>
				<td>Zone</td>
				<td><input type="text" name="tolezone"></td>
			</tr>
			<tr>
				<td>Tole Nayo</td>
				<td><input type="text" name="tolenayo"></td>
			</tr>
			
			
		</table>
		</fieldset>
		<br/>
		
		<?php 
			$a=1;$a2=3;$a3=4;
		?>
		<table border="6px" style="background-color:#lol;border-radius:12px;margin-left:10px">
		<tr class="item" style="display:block;">
			
			<th style="padding-left:28px;">SN</th>
			<th style="padding-left:28px;">Representative</th>
			
			
			
			
			
		</tr>
		
		<?php
		$b=1;
		while($b<=3)
		{
		?>
		<tr class="item" id="item" style="display:block;">
			<td><input style="width:40px;" type="text" name="sn<?php echo$a?>"></td>
			<td><input  type="text" name="rep<?php echo$a?>"></td>
			
			<?php if($b%3==0)
			{
			?>
			<td><img src="../images/add.png" id="img" onclick="javascript:ShowHide('item7','img')" style="heght:20px;width:20px;"></td>
			
			<?php
			}
			?>
		</tr>
		<?php 
		$b=$b+1;$a=$a+1;
		} ?>
		<?php
		$abc=4;$x=1;
		while($x<=10){
		?>
		<tr class="item" id="item<?php echo$a2 ?>" style="display:none;">
			<td><input style="width:40px;" type="text" name="sn<?php echo$abc?>"></td>
			<td><input type="text" name="rep<?php echo$abc?>"></td>
			
			<td><img src="../images/add.png" id="img<?php echo$a2 ?>" onclick="javascript:ShowHide('item<?php echo$a3?>','img<?php echo$a2 ?>')" style="heght:20px;width:20px;"></td>
		<?php 
		$x=$x+1;$a3=$a3+1;$a2=$a2+1;$abc=$abc+1;
		} ?>
		
		
		
		
		
		
		</table>
		<br>
	<input type="submit" value="ADD" class="button" style="margin-left:05px;" >	
	
	</form>


</body>
</html>