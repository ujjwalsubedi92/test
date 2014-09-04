<html>
<head>
	<title>
	Log In Interface
	</title>
	<script language="JavaScript">
		function ShowHide(d1,d2,d3)
		{
		if(document.getElementById(d1).style.display == 'none')
		{
		document.getElementById(d1).style.display='block';
		document.getElementById(d2).style.display = 'none';
		document.getElementById(d3).style.display = 'none';
		}
		else
		{
		document.getElementById(d1).style.display = 'none';
		}
		}
	</script>

	<style type="text/css">
	
		table{padding:10px;color:white;}
		div.lnks{cursor:pointer;color:red;font-weight:bold;font-size:20px;font-family:calibri;padding:10px;}
	</style>
</head>
 <body style="background-color:#b1cdB1">
	<div style="width:100%;background-color:none;height:200px;">
		<div style="width:42%;height:200px;float:left;background-color:none;"></div>
		
		<div style="width:17%;height:200px;float:left;">
		<img src="images/logo.png" style="height:100%;width:100%;">
		</div>
	
		<div style="width:40%;height:200px;float:right;background-color:none;"></div>
	</div>
	
	<h1 align="center"> Nepal Government</h1>
	<h2 align="center">Log-in Interface</h2>
	<div class="login-options" style="width:100%;height:60px;color:white;">
		
		<div style="width:30%;height:60px;float:left;">
			<div class="lnks"  style="color:white;" onclick="javascript:ShowHide('pc1','sk1','em1')">
			Procurement Officer
			</div>
		</div>
		<div style="width:20%;height:60px;float:left;padding-left:220px;">
			<div class="lnks"  style="color:white;" onclick="javascript:ShowHide('em1','pc1','sk1')">
			Employee
			</div>
		</div>
		
		<div style="width:30%;height:60px;float:right;">
			<div class="lnks" style="color:white;float:right;padding-right:10px;" onclick="javascript:ShowHide('sk1','pc1','em1')">
			Store Keeper
			</div>
		</div>
		
			
		
		
	</div>
	
	<div class="main-form-body">
	<div class="left-space" style="width:40%;height:400px;float:left;color:red;background-color:none;">
	</div>
	
	<div class="right-space" style="width:38%;height:400px;float:right;color:red;background-color:none;">
	</div>
	
	<div name="pc1n" id="pc1" width="20%" height="3900px" style="float:right;background-color:#12A1A1;border-radius:12px;display:none;">
		<h3 align="center">Procurement Chief</h3>
		<form method="POST" action="pc-login.php">
			<table>
				<tr>
					<td>Login</td>
					<td><input type="text" name="u"></input></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="p"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="login"></input></td>
				</tr>
			</table>
			
		</form>
	</div>

	<div name="sk1n" id="sk1" width="20%" height="3900px" style="float:right;background-color:#12A1A1;border-radius:12px;display:none;">
		<h3 align="center">Store Keeper</h3>
		<form method="POST" action="sk-login.php">
			<table>
				<tr>
					<td>Login</td>
					<td><input type="text" name="u"></input></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="p"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="login"></input></td>
				</tr>
			</table>
			
		</form>
	</div>
	
	<div name="sk1n" id="em1" width="20%" height="3900px" style="float:right;background-color:#12A1A1;border-radius:12px;display:none;">
		<h3 align="center">Employee</h3>
		<form method="POST" action="em-login.php">
			<table>
				<tr>
					<td>Login</td>
					<td><input type="text" name="u"></input></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="p"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="login"></input></td>
				</tr>
			</table>
			
		</form>
	</div>
	
	</div>
</body>
</html>