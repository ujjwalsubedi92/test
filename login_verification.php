<?php
	session_start();
	
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	if($username=="admin" && $password=="pass")
	{
		$_SESSION['myusername'] = $username;
		$_SESSION['mypassword'] = $password;
		?>
        <script language="javascript">
			location.replace("cms/addtoleui.php");
		</script>
        <?php
	}
	else
	{
		echo "<h5 style='color:black'> Invalid Username or Password!! Please Try again..</h5>";
		echo "<h4><a href='index.php'>Go Back</a></h4>";
	}
?>