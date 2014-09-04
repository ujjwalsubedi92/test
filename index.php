<html>
<head>
	<title>
	Log In Interface
	</title>
	<script src="javascript/on_off.js"></script>

	<style type="text/css">
	
		table{padding:10px;color:white;}
		div.lnks{cursor:pointer;color:red;font-weight:bold;font-size:20px;font-family:calibri;padding:10px;}
	</style>
</head>
 <body style="background-color:#b1cdB1">
	<div style="width:100%;background-color:none;height:200px;">
		<div style="width:42%;height:200px;float:left;background-color:none;"></div>
		
		<div style="width:17%;height:200px;float:left;">
		<img src="images/logo.jpg" style="height:100%;width:100%;">
		</div>
	
		<div style="width:40%;height:200px;float:right;background-color:none;"></div>
	</div>
	
	<h1 align="center"> Nepal Government</h1>
	<h2 align="center">Log-in Interface</h2>
		
	<div class="main-form-body">
	<div class="left-space" style="width:40%;height:400px;float:left;color:red;background-color:none;">
	</div>
	
	<div class="right-space" style="width:38%;height:400px;float:right;color:red;background-color:none;">
	</div>
	
	

	
	
	<div name="login" id="login" width="20%" height="3900px" style="float:center;background-color:#12A1A1;border-radius:12px;display:block;">
		<h3 align="center">Employee</h3>
		<form method="POST" action="login_verification.php">
			<table>
				<tr>
					<td>Login</td>
					<td><input type="text" name="user"></input></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="login"></input></td>
				</tr>
			</table>
			
		</form>
	</div>
	

</body>
</html>