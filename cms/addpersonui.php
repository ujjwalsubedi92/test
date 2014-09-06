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
tr.item td{padding:12px;border:0px;text-align:center;vertical-align:middle;}
tr.item th{padding:12px;border:0px;text-align:center;vertical-align:middle;}
img{cursor:pointer;}
input{width:100px;}
</style>
</head>

<body>
<?php
			include("../includes/head.php");
		
	?>
	<br>
	<form method="post" action="ir-slip.php">
	<fieldset>
		<legend><b>Add Person</b></legend>
		<table>
			<tr>
				<td>Page no.</td>
				<td><input type="text" name="page"></td>
			</tr>
			
			</tr>
				<td>House no</td>
				<td><input type="text" name="house"></td>
			</tr>
			<tr>
				<td>Tole</td>
				<td><select id="tole" name="tole">
				<?php
					
					
					$sql_tole = "select * from tole order by tolename asc";
					$res_tole = mysql_query($sql_tole) or die("Error in database: " . mysql_error());
					while($row_tole = mysql_fetch_array($res_tole))
						{
							$id=$row_tole['toleid'];
							$name=$row_tole['tolename'];
							echo "<option value='$id'>$name</option>";
							
							
							
							
						}
									
				?>
				</td>
			</tr>
			<tr>
				<td>phone</td>
				<td><input type="text" name="purpose"></td>
			</tr>
			<tr>
				<td>info collector</td>
				<td><input type="text" name="modd"></td>
			</tr>
			<tr>
				<td>info giver</td>
				<td><input type="text" name="pchief"></td>
			</tr>
			
		</table>
		</fieldset>
		<br/>
		
		<?php 
			$a=1;$a2=7;$a3=8;
		?>
		
		
		
		<?php
		$b=1;
		while($b<=7)
		{
		?>
		<table border="1px solid black" style="margin: 0 auto;">
		
		<tr class="item"  style="background-color: #3399FF;" >
			
			<td style="padding-left:10px;">SN</th>
			<td style="padding-left:10px;">Name</th>
			<td style="padding-left:10px;">Date of Birth</th>
		
			<td style="padding-left:10px;">Age</th>
			<td style="padding-left:10px;">Mom Name</th>
			<td style="padding-left:10px;">Dad Name</th>
			<td style="padding-left:10px;">Relation</th>
			<td style="padding-left:10px;">Sex</th>
			<td style="padding-left:10px;">Religion</th>
			
			
			
			
		</tr>
		<tr class="item" id="item" >
			<td><input  style="width:30px;" type="text" name="sn<?php echo$a?>"></td>
			<td><input type="text" name="name<?php echo$a?>"></td>
			<td><input type="text" name="dob<?php echo$a?>"></td>
			<td><input  style="width:30px;" type="text" name="age<?php echo$a?>"></td>
			<td><input type="text" name="mom<?php echo$a?>"></td>
			<td><input type="text" name="dad<?php echo$a?>"></td>
			<td>
				<select name="relation<?php echo$a?>">
					<option value="hama">hama</option>
					<option value="vata">vata</option>
					<option value="kala">kala</option>
					<option value="kaya">kaya</option>
					<option value="mhyaya">mhyaya</option>
					<option value="bhou">bhou</option>
					<option value="chaya">chaya</option>
					<option value="kija">kija</option>
					<option value="kijabhau">kijabhau</option>
					<option value="memegu">memegu</option>
			
			</td>
			<td>
				<select name="sex<?php echo$a?>">
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="3rd">3rd</option>
					
			
			</td>
			
			<td>
				<select name="religion<?php echo$a?>">
					<option value="boudha">boudha</option>
					<option value="hindu">hindu</option>
					<option value="isai">isai</option>
					<option value="others">others</option>
					
			
			</td>
			
			
			
		</tr>
		</table>
		<br>
		<table border="1px solid black" style="margin: 0 auto;">
		<tr class="item"  style="background-color: #3399FF;" >
		<td colspan="2">Marital</td>
		<td colspan="3">Matritwa Born</td>
		<td colspan="3">Matritwa Alive</td>
		<td colspan="2">Education</td>
		<td colspan="3">Foreign</td>
		<td></td>
		<td colspan="2">Work</td>
		</tr>
		<tr class="item"  style="background-color: #3399FF;" >
		<td > Status</th>
		<td >Married to</th>
		<td> male</td>
		<td> female</td>
		<td> 3rd</td>
		<td> male</td>
		<td> female</td>
		<td> 3rd</td>
		<td> level</td>
		<td> subject</td>
		<td> study</td>
		<td> work</td>
		<td>Country </td>
		<td>Reason </td>
		<td>Ancient </td>
		<td>Modern </td>
		
		
		
		</tr>
		<tr class="item" id="item" >
		<td>
				<select name="maritalstatus<?php echo$a?>">
					<option value="jula">jula</option>
					<option value="majuni">majuni</option>
					<option value="widhuwa">widhuwa</option>
					<option value="widur">widur</option>
					<option value="parpachuke">parpachuke</option>
					<option value="other">other</option>
					
			
			</td>
			
			<td>
				<select name="marriedto<?php echo$a?>">
					<option value="jyapu">jyapu</option>
					<option value="sesya">sesya</option>
					<option value="gubhaju">gubhaju</option>
					<option value="barhey">barhey</option>
					<option value="uday">uday</option>
					<option value="sayami">sayami</option>
					<option value="chetri">chetri</option>
					<option value="brahmu">brahmu</option>
					<option value="bidesi">bidesi</option>
					<option value="others">others
					</option>
					
			
			</td>
			<td><input  type="text" style="width:30px;" name="bm<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="bf<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="b3<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="am<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="af<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="a3<?php echo$a?>"></td>
			
		
		</tr>
		</table>
		<br>
		<table border="1px solid black" style="margin:0 auto;">
		<tr class="item"  style="background-color: #3399FF;" >
		<td>Land </td>
		<td>Skill </td>
		<td>Disease </td>
		<td>Blood group </td>
		<td>Sports </td>
		<td>sanchar </td>
		<td>sadhan </td>
		<td>upobhogya sadhan </td>
		<td>amal </td>
		<td>kaifiyat </td>
		
		
		</tr>
		</table>
		<hr>
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
		
		
		
		
		
		
		
		<br>
	<input type="submit" value="send" style="margin-left:905px;" >	
	
	</form>


</body>
</html>