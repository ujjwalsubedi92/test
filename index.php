<html>
<head>
	<title>
	Log In Interface
	</title>
	<script src="javascript/on_off.js"></script>
	<link rel="stylesheet" type="text/css" href="css/button.css">

	<style type="text/css">
	
		table{padding:10px;color:white;}
		div.lnks{cursor:pointer;color:red;font-weight:bold;font-size:20px;font-family:calibri;padding:10px;}
	</style>
</head>
 <body style="background-image:url('images/background2.png')">
	<div style="width:100%;background-color:none;height:200px;">
		<div style="width:42%;height:200px;float:left;background-color:none;"></div>
		
		<div style="width:17%;height:200px;float:left;">
		<img src="images/logo.jpg" style="height:100%;width:100%;">
		</div>
	
		<div style="width:40%;height:200px;float:right;background-color:none;"></div>
	</div>
	
	<h1 align="center"> Nepal Government</h1>
	<h2 align="center">Log-in Interface</h2>
		
	
	<div class="left-space" style="width:40%;height:250px;float:left;color:red;background-color:none;">
	</div>
	
	<div class="right-space" style="width:38%;height:250px;float:right;color:red;background-color:none;">
	</div>
	
	


	
	
		<div name="login" id="login" style="float:center;border-radius:12px;display:block;">

			<form method="POST" action="login_verification.php">
				<table style="background-image:url('images/background.png');border-radius:12px;float:center">
					<tr>
						<td><b>Login</b></td>
						<td><input type="text" name="user"></input></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name="pass"></input></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="button" value="    LOGIN    "></input></td>
					</tr>
				</table>
				
			</form>
		</div>
	

</body>
</html>