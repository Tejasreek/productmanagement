<?php 


include("config.php");
if(isset($_POST['submit']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysql_query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
	
	$count = mysql_num_rows($query);
	
	if($count>='1')
	{
		
		$select_data = mysql_fetch_assoc($query);
		$userid = $select_data['id'] ;
		$email = $select_data['email'];
		$_SESSION['id'] = $userid;
		$_SESSION['email'] = $email;
		
		
		echo "<script>window.location='index.php';</script>";
	}
	else
	{
		echo "<script>alert('Email or Password Incorrect'); </script>";
	}
}
?>
<!DOCTYPE html>

<body>
<form action="" method="POST" enctype="multipart/form-data"> 
<center><input type="email" placeholder="email" name="email"><br><br>
<input type="password" placeholder="Password" name="password"><br><br>
<button type="submit" name="submit" >Login</button>
</form>
</body>
</html>