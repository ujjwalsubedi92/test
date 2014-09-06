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
Add person
</title>
<link rel="stylesheet" type="text/css" href="../css/button.css">
<style type="text/css">
tr.item td{padding:12px;border:0px;text-align:center;vertical-align:middle;}
tr.item1 td{padding:5px;border:0px;text-align:center;vertical-align:top;}
tr.item th{padding:12px;border:0px;text-align:center;vertical-align:middle;}
img{cursor:pointer;}
input{width:100px;}
</style>
</head>

<body>
<?php
			include("../includes/head.php");
		
	?>
	
	<a name="top">&nbsp;</a>
	
	<br>
	<p style="right:0;position:fixed;"><a href="#done"><img src="../images/done-small.png"></a></p>
	<br/><br/>
	
	
	<form method="post" action="addperson.php">
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
				<td>
				<select id="tole" name="tole">
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
				</select>
				</td>
			</tr>
			<tr>
				<td>phone</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>info collector</td>
				<td><input type="text" name="collector"></td>
			</tr>
			<tr>
				<td>info giver</td>
				<td><input type="text" name="giver"></td>
			</tr>
			
		</table>
		</fieldset>
		<br/>
		
		<?php 
			$a=1;$total=25;
		?>
		
		
		
		<?php
		$b=1;
		while($b<=$total)
		{
		?>
		<table border="1px solid black" style="margin: 0 auto;">
		
		<tr class="item"  style="background-color: #3399FF;" >
			
			<td style="padding-left:10px;">SN</th>
			<td style="padding-left:10px;">ID</th>
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
			<td><input  style="width:65px;" type="text" name="id<?php echo$a?>"></td>
			<td><input style="width:150px;" type="text" name="name<?php echo$a?>"></td>
			<td><input type="text" name="dob<?php echo$a?>"></td>
			<td><input  style="width:30px;" type="text" name="age<?php echo$a?>"></td>
			<td><input type="text" style="width:150px;" name="mom<?php echo$a?>"></td>
			<td><input type="text" style="width:150px;" name="dad<?php echo$a?>"></td>
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
				</select>
			
			</td>
			<td>
				<select name="sex<?php echo$a?>">
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="3rd">3rd</option>
				</select>
					
			
			</td>
			
			<td>
				<select name="religion<?php echo$a?>">
					<option value="boudha">boudha</option>
					<option value="hindu">hindu</option>
					<option value="isai">isai</option>
					<option value="others">others</option>
				</select>	
			
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
					
				</select>
			</td>
			
			<td>
				<select name="marriedto<?php echo$a?>">
					<option value=" "> </option>
					<option value="jyapu">jyapu</option>
					<option value="sesya">sesya</option>
					<option value="gubhaju">gubhaju</option>
					<option value="barhey">barhey</option>
					<option value="uday">uday</option>
					<option value="sayami">sayami</option>
					<option value="chetri">chetri</option>
					<option value="brahmu">brahmu</option>
					<option value="bidesi">bidesi</option>
					<option value="others">others</option>
				</select>
			
			</td>
			<td><input  type="text" style="width:30px;" name="bm<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="bf<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="b3<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="am<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="af<?php echo$a?>"></td>
			<td><input  type="text" style="width:30px;" name="a3<?php echo$a?>"></td>
			
			<td>
				<select name="level<?php echo$a?>">
					<option value="nirachyar">nirachyar</option>
					<option value="sadharan">sadharan</option>
					<option value="school">school</option>
					<option value="+2">barhey</option>
					<option value="uday">snatak</option>
					<option value="sayami">snatakotar</option>
					<option value="chetri">phd</option>
					<option value="others">others
					</option>
				</select>	
			
			</td>
		
			<td>
				<select name="subject<?php echo$a?>">
					<option value=" "> </option>
					<option value="kala">kala</option>
					<option value="banijya">banijya</option>
					<option value="bigyan">bigyan</option>
					<option value="doctor">doctor</option>
					<option value="engineer">engineer</option>
					<option value="krisi">krisi</option>
					<option value="computer">computer</option>
					<option value="nurse">nurse</option>
					<option value="ca">ca</option>
					<option value="others">others</option>				
				</select>
			</td>
			<td>
				<select name="foreignstudy<?php echo$a?>">
					<option value=" "> </option>
					<option value="doctor">doctor</option>
					<option value="engineer">engineer</option>
					<option value="ca">ca</option>
					<option value="phd">phd</option>
					
					<option value="computer">computer</option>
					<option value="management">management</option>
					<option value="nurse">nurse</option>
					<option value="IT">IT</option>
					<option value="others">others</option>				
				</select>
			</td>
			
			<td>
				<select name="foreignwork<?php echo$a?>">
					<option value=" "> </option>
					<option value="doctor">doctor</option>
					<option value="engineer">engineer</option>
					<option value="nurse">nurse</option>
					<option value="overseer">overseer</option>
					<option value="udhyog">udhyog</option>
					
					<option value="byapar">byapar</option>
					<option value="homework">homework</option>
					
					
					<option value="others">others</option>				
				</select>
			</td>
			
			<td>
				<select name="country<?php echo$a?>">
					<option value=" "> </option>
					<option value="USA">USA</option>
					<option value="UK">UK</option>
					<option value="Australia">Australia</option>
					<option value="Japan">Japan</option>
					<option value="Germany">Germany</option>
					
					<option value="Canada">Canada</option>
					<option value="China">China</option>
					<option value="India">India</option>
					<option value="Norway">Norway</option>
					
					
					<option value="others">others</option>				
				</select>
			</td>
		
		</tr>
		</table>
		<br>
		<table border="1px solid black" style="margin:0 auto;">
		<tr class="item1"  style="background-color: #3399FF;" >
			
			<td></td>
			<td colspan="2">Work</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			
		</tr>
		<tr class="item"  style="background-color: #3399FF;" >
			<td>Reason </td>
			<td>Ancient </td>
			<td>Modern </td>
			<td>Land </td>
			<td>Skill </td>
			<td>Disease </td>
			<td>Blood group </td>
			
		
		
		</tr>
		<tr class="item1" id="item" >
			<td>
					<select name="reason<?php echo$a?>">
						<option value=" "> </option>
						<option value="abumadaya">abumadaya</option>
						<option value="mamadaya">mamadaya</option>
						<option value="damdaya">damadaya</option>
						<option value="chena machwaya">chena mchwaya</option>
						<option value="other">other</option>
						
					</select>
			</td>
			<td>
					<select name="ancient<?php echo$a?>">
						<option value=" "> </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="other">otherother</option>
						
					</select>
			</td>
			
			<td>
				<select name="modern<?php echo$a?>">
					<option value=" "> </option>
					<option value="doctor">doctor</option>
					<option value="engineer">engineer</option>
					<option value="nurse">nurse</option>
					<option value="overseer">overseer</option>
					<option value="teaching">teaching</option>
					<option value="udhyog">udhyog</option>
					
					<option value="byapar">byapar</option>
					<option value="lawyer">lawyer</option>
					<option value="karmachari">karmachari</option>
					
					
					<option value="others">others</option>				
				</select>
			</td>
			<td>
				<select name="land<?php echo$a?>">
					<option value="yes">yes</option>
					<option value="no">no</option>
					<option value="little">little</option>
								
				</select>
			</td>
			
			
			<td>
				<table border=0>
				<tr>
					<td>Dhimeye</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="dhimeye"></td>
				</tr>
				<tr>
					<td>khee pachima</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="khee pachima"></td>
				</tr>
				<tr>
					<td>basuri</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="basuri"></td>
				</tr>
				<tr>
					<td>harmonium</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="harmonium"></td>
				</tr>
				<tr>
					<td>sitar</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="sitar"></td>
				</tr>
				<tr>
					<td>myehaligu</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="myehaligu"></td>
				</tr>
				<tr>
					<td>nritya</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="nritya"></td>
				</tr>
				<tr>
					<td>others</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="others"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="skill<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				
					
								
				</table>
			</td>
			
			<td>
				<table border=0>
				<tr>
					<td>blood pressure</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="blood pressure"></td>
				</tr>
				<tr>
					<td>sugar</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="sugar"></td>
				</tr>
				<tr>
					<td>dam</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="dam"></td>
				</tr>
				<tr>
					<td>heart</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="heart"></td>
				</tr>
				<tr>
					<td>hardjorni</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="hardjorni"></td>
				</tr>
				<tr>
					<td>chyacyaigu</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="chyacyaigu"></td>
				</tr>
				<tr>
					<td>bat lwya</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="bat lwya"></td>
				</tr>
				<tr>
					<td>gystrik</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="gyastrik"></td>
				</tr>
				<tr>
					<td>others</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="others"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="disease<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				
				
					
								
				</table>
			</td>
			
			<td>
				<select name="blood<?php echo$a?>">
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="other">other</option>
								
				</select>
				
			</td>
			
		</tr>
		</table>
		<BR>
		<table border="1px solid black" style="margin:0 auto;">
		<tr class="item"  style="background-color: #3399FF;" >
			<td>Sports </td>
			<td>sanchar </td>
			<td>sadhan </td>
			<td>upobhogya sadhan </td>
			<td>amal </td>
			
		</tr>
		<tr class="item1" id="item" >
			
			
			<td>
				<table border=0>
				<tr>
					<td>football</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="football"></td>
				</tr>
				<tr>
					<td>volleyball</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="volleyball"></td>
				</tr>
				<tr>
					<td>TT</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="TT"></td>
				</tr>
				<tr>
					<td>judo</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="judo"></td>
				</tr>
				<tr>
					<td>karate</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="karate"></td>
				</tr>
				<tr>
					<td>chess</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="chess"></td>
				</tr>
				<tr>
					<td>badminton</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="badminton"></td>
				</tr>
				<tr>
					<td>doud</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="doud"></td>
				</tr>
				<tr>
					<td>others</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="others"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="sport<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				
				
					
								
				</table>
			</td>
			
			<td>
				<table border=0>
				<tr>
					<td>radio</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="radio"></td>
				</tr>
				<tr>
					<td>tv</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="tv"></td>
				</tr>
				<tr>
					<td>pc</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="pc"></td>
				</tr>
				<tr>
					<td>phone</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="phone"></td>
				</tr>
				<tr>
					<td>mobile</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="mobile"></td>
				</tr>
				<tr>
					<td>internet</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="internet"></td>
				</tr>
				
				<tr>
					<td>others</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="others"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="tele<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				
				
					
								
				</table>
			</td>
			
			<td>
				<table border=0>
				<tr>
					<td>cycle</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="cycle"></td>
				</tr>
				<tr>
					<td>motorcycle</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="motorcycle"></td>
				</tr>
				<tr>
					<td>scotee</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="scotee"></td>
				</tr>
				<tr>
					<td>car</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="car"></td>
				</tr>
				<tr>
					<td>bus</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="bus"></td>
				</tr>
				<tr>
					<td>truck</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="truck"></td>
				</tr>
				<tr>
					<td>tractor</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="tractor"></td>
				</tr>
				<tr>
					<td>others</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="others"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="trans<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				
				
					
								
				</table>
			</td>
			<td>
				<table border=0>
				<tr>
					<td>vutu</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="vutu"></td>
				</tr>
				<tr>
					<td>stove</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="stove"></td>
				</tr>
				<tr>
					<td>gas</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="gas"></td>
				</tr>
				<tr>
					<td>ricecooker</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="ricecooker"></td>
				</tr>
				<tr>
					<td>oven</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="oven"></td>
				</tr>
				<tr>
					<td>fridge</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="fridge"></td>
				</tr>
				
				<tr>
					<td>others</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="others"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="cook<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				
				
					
								
				</table>
			</td>
			
			<td>
				<table border=0>
				<tr>
					<td>dhumrapan</td>
					<td><input type="checkbox" name="addict<?php echo$a?>[]" value="dhumrapan"></td>
				</tr>
				<tr>
					<td>madirapan</td>
					<td><input type="checkbox" name="addict<?php echo$a?>[]" value="madirapan"></td>
				</tr>
				<tr>
					<td>other</td>
					<td><input type="checkbox" name="addict<?php echo$a?>[]" value="other"></td>
				</tr>
				<tr style="display:none;">
					<td>xyzzywhatisthiseven2014</td>
					<td><input type="checkbox" name="addict<?php echo$a?>[]" value="xyzzywhatisthiseven2014" checked></td>
				</tr>
				</table>
			</td>
			
		</tr>
		</table>
		
		<table border="1px solid black" style="margin:0 auto;">
		<tr class="item"  style="background-color: #3399FF;" >
			<td>Kaifiyat </td>
			
		</tr>
		<tr class="item1" id="item" >
			<td><textarea name="comment<?php echo$a?>" rows="10" cols="60" wrap="physical">Enter kaifiyat</textarea></td>
		</tr>
		</table>
		<hr>
		<?php 
		$b=$b+1;$a=$a+1;
		} ?>
		
		
		
		
		
		
		
		<br>
		
	<table style="margin:0 auto;">
		<tr>
			<td>
			<input type="submit"  value="send" class="button" >
			</td>
		</tr>
	</table>
	
	</form>
	<a href="#top" name= "done"><img src="../images/checklist-small.png"></a> 
	

<?php
include("../includes/head.php");
?>
</body>
</html>